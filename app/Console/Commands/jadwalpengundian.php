<?php

namespace App\Console\Commands;
use DB;
use Illuminate\Console\Command;

class jadwalpengundian extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pengundian:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Penjadwalan pengundian peserta Arisan';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /** Inisialisasi */
        $key = 1;

        $ids = DB::table('group')->get();

        /** Tanggal hari ini */
        $this_date = date('Y-m-d');

        /** Mencari data group yang pengundian hari ini */
        $search_dates = DB::table('group')
                            ->where('waktu_pengocokan',$this_date)->get();

        /** Menghitung jumlah data */
        $search_count = DB::table('group')
                            ->where('waktu_pengocokan',$this_date)->count();
        
        foreach($search_dates as $search_date)
        {
            $id_list = $search_date->id;
            
            /** Menampilakn data member berdasarkan pencarian group_id */
            $member_result = DB::table('members')
                                ->where('group_id',$id_list)
                                ->where('status_arisan',0)
                                ->inRandomOrder()
                                ->limit(1)
                                ->get();

            /** Update hasil peserta yang terpilih */
            foreach($member_result as $member_update)
            {
                $member_update_id = $member_update->id;

                $group_id_result = $member_update->group_id;
                
                /** Update data status_arisan */
                DB::table('members')->where('id',$member_update_id)
                                    ->update(['status_arisan' => $key, 'updated_at' => now()]);
            }

            /** Get data dari group untuk mencari tanggal pengundian */
            $date_result_db = DB::table('group')->where('id',$group_id_result)->get();

            foreach($date_result_db as $date_result)
            {
                /** Mengambil date waktu pengocokan dan rentan waktu pengocokan */
                $id_group_up = $date_result->id;
                $waktu = $date_result->waktu_pengocokan;
                $rentawaktu = $date_result->rentan_waktu_pengocokan;

                $date1 = str_replace('-', '/', $waktu);
                $tomorrow = date('Y-m-d',strtotime($date1 . "+$rentawaktu days"));

                DB::table('group')->where('id',$id_group_up)
                                  ->update(['waktu_pengocokan' => $tomorrow]);
            }

        }
    }
}
