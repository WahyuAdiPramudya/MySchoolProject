<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use App\Kelas;
use App\Surat;
use App\User;
use  Auth;
class SiswaController extends Controller
{
   
    public function listdatasiswa()
    {
        $data = Kelas::where('sekolah_id', Auth::user()->id_sekolah)->get();
        return view('guru.siswa.listdatasiswa', compact('data'));
    }

    public function datasiswa($id)
    {
        $data = Siswa::where('id_kelas', $id)->get();
        return view('guru.siswa.datasiswa', compact('data'));
    }
    public function detailsiswa($id)
    {
        $data = Siswa::where('id_siswa', $id)->get();

        foreach ($data as $row) {
            return view('guru.siswa.detailsiswa', compact('row'));
        }
       
    }

    public function surat()
    {
        $data = Surat::where('id_sekolah', Auth::user()->id_sekolah)->with('siswa')->get();
        return view('guru.surat.index', compact('data'));
    }
    public function detail_surat($id)
    {
        $user = User::where('role_id', 4)->get();
        $data = Surat::find($id);
        return view('guru.surat.detail', compact('data','user'));

    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
