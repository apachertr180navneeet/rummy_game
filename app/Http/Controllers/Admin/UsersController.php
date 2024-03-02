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




class UsersController extends Controller
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
            return view('admin.user.index',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }


    public function addBot()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            return view('admin.user.add_bot',compact('user_data'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function view($id)
    {
        if(Auth::check()){
            $user_data = auth()->user();
            return view('admin.user.view',compact('user_data'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function user_category_list()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.user.index_category',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function addCategory()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.user.add_category',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function UserKyc()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.user.user_kyc',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function UserBank()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.user.user_bank_detail',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
}
