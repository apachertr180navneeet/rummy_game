<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\{
    User,
    Setting
};


use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\{
    Auth,
    Hash,
    Session
};




class LeaderBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.leaderboard.list',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
}
