<?php

namespace App\Http\Controllers\Orangtua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AbsensiController extends Controller
{
    public function listAbsen($id)
    {
    	$absen = DB::table('tb_absensi as a')
			->leftjoin('tb_siswa as s','a.id_siswa','=','s.id_siswa')
			->select('a.status','a.masuk')
			->where('s.user_id', $id)
			->get();
			return view('orangtua.absensi.absen',compact('absen'));
    }
}
