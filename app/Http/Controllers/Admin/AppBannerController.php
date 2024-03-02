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




class AppBannerController extends Controller
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
            return view('admin.appbanner.list',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }


    public function add()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            return view('admin.appbanner.add',compact('user_data'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function tableEdit($id)
    {
        if(Auth::check()){
            $user_data = auth()->user();
            return view('admin.appbanner.edit',compact('user_data'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
}
