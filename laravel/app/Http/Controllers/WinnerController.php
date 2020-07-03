<?php

namespace App\Http\Controllers;

use auth;
use Session;
use App\Group;
use App\Member;
use App\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = Auth::user()->id;
        $status_selesai = 1;
        
        $groups = Group::WHERE('users_id',$userID)
                        ->WHERE('status','=',1)->paginate(7);

        /**
         * Menampilkan Nilai Group_id Terbesar
         */

        $max_group_id = Group::orderBy('id', 'desc')->first();

        $con_mac_id = $max_group_id->id;

        $i = 1;

        while($i <= $con_mac_id)
        {
            /*Mengecek table member status berdasarkan group_id*/
            $x = Member::WHERE('group_id',$i++)->get();
            $y = $x->count();

            foreach($x as $xc)
            {
                $group_ids = $xc->group_id;
            }

            /* Cek status arisan */
            $status_arisan = Member::WHERE('group_id',$group_ids)
                                    ->WHERE('status_arisan','=',1)->get();

            $countsy = $status_arisan->count();

            
            if([$group_ids = $countsy] == [$group_ids = $y])
            {
                Group::WHERE('id',$group_ids)->update(['status' => 0]);
                Session::flash('message', 'Data Group Terbaru !'); 
            }else{
                Session::flash('alert-class', 'alert-danger'); 
            }
        }
              
            //   $desc_status = Member::WHERE('group_id',$group_ids)->WHERE('status_arisan','=',1)->orderBy('updated_at', 'desc')->get();
            
        return view('winner',['groups' => $groups]);
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
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function show(Winner $winner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function edit(Winner $winner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winner $winner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Winner $winner)
    {
        //
    }
}
