<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Auth;
use Session;
use UxWeb\SweetAlert\SweetAlert;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
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
             Alert()->success('success','Success');
            return redirect()->route('SuperAdmin.dashboard');
        } elseif (Auth::user()->role_id == 2 and Auth::user()->status == "enable") {

            $user = User::all();
            foreach ($user as $us) {
                if ($us["no_telp"] == input::get('no_telp')) {
                    Session::put("no_telp", $us["no_telp"]);
                    Session::put("id_sekolah", $us["id_sekolah"]);

                    break;
                }
            }
             Alert()->success('success','Success');
            return redirect('staff/dashboard');
        } elseif (Auth::user()->role_id == 3 and Auth::user()->status == "enable") {
            $user = User::all();
            foreach ($user as $us) {
                if ($us["no_telp"] == input::get('no_telp')) {
                    Session::put("no_telp", $us["no_telp"]);
                    Session::put("id_sekolah", $us["id_sekolah"]);

                    break;
                }
            }
             Alert()->success('success','Success');
            return redirect()->redirect('guru/dashboard');
        } elseif (Auth::user()->role_id == 4 and Auth::user()->status == "enable") {
            $user = User::all();
            foreach ($user as $us) {
                if ($us["no_telp"] == input::get('no_telp')) {
                    Session::put("no_telp", $us["no_telp"]);
                    Session::put("id_sekolah", $us["id_sekolah"]);

                    break;
                }
            }
             Alert()->success('success','Success');
            return redirect();
        } else {
            $notification = Toastr::info('message ','akun belum di aktifkan','Info');   
        }
    } else {
        $notification = Toastr::error('message','No Telpon salah / Password Salah');
    }
    return back()->with($notification);
}
    
public function logout()
{
    session()->forget('no_telp');
    session()->forget('id_sekolah');
    session()->flush();
    Auth::logout();
    return redirect('/');
}
}
