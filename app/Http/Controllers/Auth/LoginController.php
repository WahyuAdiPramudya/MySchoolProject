<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Auth;
use Session;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
   public function login()
   {
    return view('auth.login');
    }

    public function multilogin(){
    if (Auth::attempt(['no_telp' => input::get('no_telp'), 'password' => input::get('password')])) {
        if (Auth::user()->role_id == 1 and Auth::user()->status == "enable") {
            $user = User::all();
            foreach ($user as $us) {
                if ($us["no_telp"] == input::get('no_telp')) {
                    Session::put("no_telp", $us["no_telp"]);
                    Session::put("id_sekolah", $us["id_sekolah"]);

                    break;
                }
            }

            return redirect('/SuperAdmin/dashboard');
        } elseif (Auth::user()->role_id == 2 and Auth::user()->status == "enable") {

            $user = User::all();
            foreach ($user as $us) {
                if ($us["no_telp"] == input::get('no_telp')) {
                    Session::put("no_telp", $us["no_telp"]);
                    Session::put("id_sekolah", $us["id_sekolah"]);

                    break;
                }
            }

            return redirect('/staff');
        } elseif (Auth::user()->role_id == 3 and Auth::user()->status == "enable") {
            $user = User::all();
            foreach ($user as $us) {
                if ($us["no_telp"] == input::get('no_telp')) {
                    Session::put("no_telp", $us["no_telp"]);
                    Session::put("id_sekolah", $us["id_sekolah"]);

                    break;
                }
            }
            return redirect('/guru');
        } elseif (Auth::user()->role_id == 4 and Auth::user()->status == "enable") {
            $user = User::all();
            foreach ($user as $us) {
                if ($us["no_telp"] == input::get('no_telp')) {
                    Session::put("no_telp", $us["no_telp"]);
                    Session::put("id_sekolah", $us["id_sekolah"]);

                    break;
                }
            }
            return redirect('/');
        } else {
            $notification = array(
                'message' => 'Akun Anda Belom Di Aktifkan',
                'alert-type' => 'info'
            );
        }
    } else {
        $notification = array(
            'message' => 'Username/Password Salah!',
            'alert-type' => 'error'
        );
    }
    return back()->with($notification);
}

public function logout()
{
    session()->forget('no_telp');
    session()->forget('id_sekolah');
    session()->flush();
    Auth::logout();
    return redirect('/login');
}
}
