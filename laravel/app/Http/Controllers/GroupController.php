<?php

namespace App\Http\Controllers;

use Auth;
use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('group');
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
        $request->validate([
            'groups_name'=>'required',
            'biaya'=>'required',
            'jumlah_peserta'=>'required',
            'total_hadiah'=>'required',
            'tanggal_mulai'=>'required'
        ]);

        $userID = Auth::user()->id;
        $status = 1;
        // $waktu_pengocokan = 2020-04-05;
        $rentan_waktu_pengocokan = $request->get('rentan_waktu_pengocokan');
        $tanggal_mulai = $request->get('tanggal_mulai');
        $hasil_tanggal_mulai = date('Y-m-d', strtotime('+6 days',strtotime($tanggal_mulai)));
        // printf($hasil_tanggal_mulai);

        $x = new group ([
            'groups_name' => $request->get('groups_name'),
            'biaya' => $request->get('biaya'),
            'jumlah_peserta' => $request->get('jumlah_peserta'),
            'total_hadiah' => $request->get('total_hadiah'),
            'users_id' => $userID,
            'status' => $status,
            'tanggal_mulai' => $request->get('tanggal_mulai'),
            'waktu_pengocokan' => $hasil_tanggal_mulai,
            'rentan_waktu_pengocokan' => $request->get('rentan_waktu_pengocokan'),
        ]);

        $x->save();

        return redirect('members');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
