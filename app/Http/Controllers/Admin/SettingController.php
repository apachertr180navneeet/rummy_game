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




class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        if(Auth::check()){
            $user_data = auth()->user();
            $id = '1';
            return view('admin.setting.edit',compact('user_data','id'));
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
}
