<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Polls;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // $this->middleware('subscribed');

        // $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show()
    {

        $all_polls = DB::table('polls')->get();
        $active_polls = DB::table('polls')->where('poll_status', 'active')->get();

        $last_poll = Polls::latest()->first();

        return view('home',
        [
            'active_polls' => $active_polls,
            'all_polls' => $all_polls,
            'last_poll' => $last_poll
        ]);
    }
}
