<?php

namespace App\Http\Controllers;

use Auth;
use App\M;
use App\Test;
use App\Group;
use App\Member;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentuserid = Auth::user()->id;
        $group = Group::WHERE('users_id',$currentuserid)->orderBy('created_at','DESC')->take(1)->get();
        
        return view('members',['group' => $group]);
        // echo $group;
    }

    public function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
       'group_id' => 'required',
       'nama.*'  => 'required',
       'email.*'  => 'required',
       'telpon.*' => 'required',
       'status_arisan' => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $nama = $request->nama;
      $email = $request->email;
      $telpon = $request->telpon;
      $group_id = $request->group_id;
      $status_arisan = $request->status_arisan;

      for($count = 0; $count < count($nama); $count++)
      {
       $data = array(
        'nama' => $nama[$count],
        'email'  => $email[$count],
        'telpon'  => $telpon[$count],
        'group_id' => $group_id[$count],
        'status_arisan' => $status_arisan[$count]
       );
       $insert_data[] = $data; 
      }

      Member::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
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

    // function insert(Request $request)
    // {

    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
