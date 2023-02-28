<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function FormLoginMasyarakat() 
    {
        return view('auth.login');
    }

    public function LoginMasyarakat()
    {
        $auth = request()->only('username', 'password');
        if (Auth()->guard('masyarakat')->attempt($auth)) {
            return redirect()->to('/pengaduan');
        }
    }

    public function logout(){
        if (Auth::guard('masyarakat')->check()){
            Auth::guard('masyarakat')->logout();
        }
        // Auth::logout();
        return redirect ('/login');
    }
}
