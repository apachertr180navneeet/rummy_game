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




class TeenPattiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tableMaster()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.teenpatti.tablemaster',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }


    public function tableAdd()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            return view('admin.teenpatti.add_table',compact('user_data'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function tableEdit($id)
    {
        if(Auth::check()){
            $user_data = auth()->user();
            return view('admin.teenpatti.edit_table',compact('user_data'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }


    public function gameHistory()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.teenpatti.gamehistory',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }


    public function watchTable()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.teenpatti.watchtable',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function jackpot()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.teenpatti.jakpothistory',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function RobotCards()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.teenpatti.robotcard',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
}
