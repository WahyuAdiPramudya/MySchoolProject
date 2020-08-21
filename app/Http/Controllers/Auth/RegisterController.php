<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Sekolah;
class RegisterController extends Controller
{
    public function index()
    {
       
        $sekolah = Sekolah::all();
        return view('auth.register',compact('sekolah'));
    }
    public function register()
    {
        $data = array(
            'nama_lengkap' => input::get('nama_lengkap'),
            'email'        => input::get('email'),
            'no_telp'      => input::get('no_telp'),
            'password'     => bcrypt(input::get('password')),
            'status'       => input::get('status'),
            'role_id'      => input::get('role_id'),
            'id_sekolah'   => input::get('id_sekolah'),

        );
        DB::table('users')->insert($data);
        return redirect('/login');
    }
}
