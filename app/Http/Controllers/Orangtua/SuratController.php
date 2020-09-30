<?php

namespace App\Http\Controllers\Orangtua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Surat;
use App\Siswa;
use Auth;
use Carbon\Carbon;
class SuratController extends Controller
{
    public function formizin()
    {
    	$siswa = Siswa::where('no_telp_wali',Auth::user()->no_telp)->get();
    	foreach ($siswa as $data) {
    		return view('orangtua.surat.izin', compact('data'));
    	}
    }
    public function formsakit()
    {
    	$siswa = Siswa::where('no_telp_wali',Auth::user()->no_telp)->get();
    	foreach ($siswa as $data) {
    		return view('orangtua.surat.sakit', compact('data'));
    	}
    }
    public function postsurat(Request $request)
    {
    	$data =Surat::create([
    		'id_siswa' => $request['id_siswa'],
    		'izin' => $request['izin'],
    		'sakit' => $request['sakit'],
    		'dari_tanggal' =>$request['dari_tanggal'],
    		'sampai_tanggal' =>$request['sampai_tanggal'],
    		'keterangan' =>$request['keterangan']
    	]);
    	if ($request->hasFile('foto')){
    		$request->file('foto')->move('/Surat', $request->file('foto')->getClientOriginalName());
    		$data->image = $request->file('foto')->getClientOriginalName();
    		$data->save();
    	}
    	return redirect('orangtua\success')->with('success','Surat Berhasil Dikirim!');
    }
}
