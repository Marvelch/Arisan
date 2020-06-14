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
        $groupId = $request->route('id');
        $subview = Group::WHERE('id',$groupId)->get();

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

                /*Pilih pemenang terakhir*/
                

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
       
       
        // $result_pem[] = $pemenangs;
        // echo $result_pem;

        foreach($pemenangs as $ku)
        {
            $result_pem[] = $ku;
        }

        return view('subarisan',['subview' => $subview])->with(['submember' => $submember])->with(['x' => $tanggal])->with(['result_pem' => $result_pem]);
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

        $update_users = [
            'phone' => $request->phone,
            'email' => $request->email,
            'status' => $request->status,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter
        ];

        User::WHERE('id',$userId)->update($update_users);

        return Redirect::to('xcprofile')
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
