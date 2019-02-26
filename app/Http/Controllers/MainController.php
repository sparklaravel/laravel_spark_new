<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Polls;

class MainController extends Controller
{
    // public function index(){

    //     $all_polls = DB::table('polls')->get();
    //     $active_polls = DB::table('polls')->where('poll_status', 'active')->get();

    //     //$last_poll = DB::table('polls')->where('created_at', 'desc')->first();

    //     $last_poll = Polls::latest()->first();

    //     return view('main.index',
    //     [
    //         'active_polls' => $active_polls,
    //         'all_polls' => $all_polls,
    //         'last_poll' => $last_poll
    //     ]);
    // }

    public function create_poll(Request $request){

        $new_poll = new Polls();

        $new_poll->poll_status = $request->poll_status;

        $new_poll->poll_name = $request->poll_name;
        $new_poll->poll_type = $request->poll_type;
        $new_poll->poll_question = $request->poll_question;
        $new_poll->poll_first_answer = $request->poll_first_answer;
        $new_poll->poll_second_answer = $request->poll_second_answer;
        $new_poll->poll_third_answer = $request->poll_third_answer;
        $new_poll->poll_audience = $request->poll_audience;
        $new_poll->poll_audience_gender = $request->poll_audience_gender;
        $new_poll->poll_audience_age_from = $request->poll_audience_age_from;
        $new_poll->poll_audience_age_to = $request->poll_audience_age_to;
        $new_poll->poll_audience_location = $request->poll_audience_location;

        $new_poll->save();



        return back();
    }

    public function login(){

        return view('login_test');
    }

    public function plans(){

        return view('plans');
    }

}
