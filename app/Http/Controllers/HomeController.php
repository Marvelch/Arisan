<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Group;
use App\Contact;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();

        /**
         * Menghitung Data Peserta
         */

        $counts = Group::join('members','group.id','=','members.group_id')
                        ->WHERE('users_id','=',$userId)
                        ->count();
        $hasil[] = $counts;

        /**
         * Count Group
         */

        $count_group = Group::WHERE('users_id',$userId)->count();

        $hasil_group[] = $count_group;

        /**
         * Menghitung Jumlah Peserta Selesai
         */
        $counts_end = Group::join('members','group.id','=','members.group_id')
                        ->WHERE('users_id',$userId)
                        ->WHERE('status_arisan','=',1)
                        ->count();
        
        $hasil_end[] = $counts_end;

        $counts_report = Contact::where('user_id',$userId)->count();

        $hasil_report[] = $counts_report;

        return view('home',['counts' => $hasil])->with(['count_group' => $hasil_group])->with(['ends' => $hasil_end])->with(['reports' => $hasil_report]);
    }

    public function donasi()
    {
        return view('donasi');
    }

    public function page_error()
    {
        return view('not_found');
    }
}
