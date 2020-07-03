<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Redirect;
use Auth;
use App\Member;
use App\User;
use App\Winner;
use App\Group;
use App\Arisan;
use Illuminate\Http\Request;

class ArisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group_arisan = Group::All();

        return view('arisan',['group_arisan' => $group_arisan]);
    }

    public function subarisan(Request $request)
    {   
        $userID = Auth::user()->id;
        $groupId = $request->route('id');
        $subview = Group::WHERE('id',$groupId)->get();

        /**
         * Menampilkan id group dari tabel Group
         * Pencarian dengan users_id dan statusnya 1
         */

        $group_ids = Group::WHERE('users_id',$userID)->WHERE('status',1)->get();

        $db_access = Group::WHERE('id',$groupId)
                            ->WHERE('users_id',$userID)
                            ->count();

        if($db_access == null)
        {
            return redirect('page_lost');
        }

        $submember = Member::WHERE('group_id',$groupId)->get();

        // Algoritma pengocokan

        $tanggal = Group::WHERE('id',$groupId)->pluck('waktu_pengocokan');
        $x = date($tanggal);
        $today = date('["Y-m-d"]');

        if($today == $x)
        {
            $peserta = Member::WHERE('group_id',$groupId AND 'status_arisan',0)->inRandomOrder()->limit(1)->get();
            foreach($peserta as $hsl)
            {
                $randomresilt = $hsl->nama;
                $members_id = $hsl->id;
                $satu = 1;
                Member::WHERE('id',$members_id)->update(['status_arisan' => $satu]);    

                // Update Group Waktu Pengundian
                $waktu_pengocokan = Group::WHERE('id',$groupId)->get();
                foreach($waktu_pengocokan as $wtks)
                {
                    $waktu = $wtks->waktu_pengocokan;
                    $rentawaktu = $wtks->rentan_waktu_pengocokan;
                    $date1 = str_replace('-', '/', $waktu);
                    $tomorrow = date('Y-m-d',strtotime($date1 . "+$rentawaktu days"));

                    Group::WHERE('id',$groupId)->update(['waktu_pengocokan' => $tomorrow]);
                }
            }
        }
       
        $pemenangs = Member::WHERE([['group_id','=',$groupId],['status_arisan','1']])->orderBy('updated_at', 'desc')->limit(1)->get();

        if(!$pemenangs->isEmpty())
        {
            foreach($pemenangs as $hasil)
            {
                $hasil_pemenang[] = $hasil->nama;
            }
        }else{
            $hasil_pemenang[] = "Tidak Tersedia";
        }

        return view('subarisan',['subview' => $subview])->with(['submember' => $submember])->with(['x' => $tanggal])->with(['hasil_pemenang' => $hasil_pemenang]);
    }

    public function profile(Request $request)
    {
        $userId = Auth::id();
        $users = User::WHERE('id',$userId)->get();

        return view('profile',['users' => $users]);
    }

    public function editprofile(Request $request)
    {
        $userId = Auth::id();
        $users = User::WHERE('id',$userId)->get();

        return view('edit_profile',['users' => $users]);

    }

    /**
     * Processing update
     */
    public function updateprofile(Request $request)
    {

        $userId = Auth::id();

        $facebook_check = $request->facebook;
        $twitter_check = $request->twitter;
        $instagram_check = $request->instagram;

        if($facebook_check == null)
        {
            $facebook = "http://bookingbook.my.id/";
        }else{
            $facebook = $request->facebook;
        }

        if($twitter_check  == null)
        {
            $twitter = "http://bookingbook.my.id/";
        }else{
            $twitter = $request->twitter;
        }

        if($instagram_check == null)
        {
            $instagram = "http://bookingbook.my.id/";
        }else{
            $instagram = $request->instagram;
        }

        $update_users = [
            'name' => $request->name,
            'phone' => $request->phone,
            'status' => $request->status,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'twitter' => $twitter
        ];

        User::WHERE('id',$userId)->update($update_users);

        return Redirect::to('profile')
       ->with('success','Berhasil Melakukan Perubahan !');
    }

    /**
     * Data Peserta Arisan
     * 
     */

    public function Membersdata(Request $request)
    {
        $groups = Group::All()->get();
        
        return view('Members_Data',['groups' => $groups]);
    }

    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Arisan  $arisan
     * @return \Illuminate\Http\Response
     */
    public function show(Arisan $arisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arisan  $arisan
     * @return \Illuminate\Http\Response
     */
    public function edit(Arisan $arisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arisan  $arisan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arisan $arisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arisan  $arisan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arisan $arisan)
    {
        //
    }
}
