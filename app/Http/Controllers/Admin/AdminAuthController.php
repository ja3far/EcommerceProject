<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller;

class AdminAuthController extends Controller
{
    //
    public function login(){
        return view('admin.login');
    }

    public function doLogin(){
        $remember_me = request('remember_me') == 1? true: false;
        if(auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')], $remember_me)){
            return redirect('admin');
        }else{
            session()->flash('error', trans('admin.incorrect_login_info'));
            return redirect()->back();
        }
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }
}
