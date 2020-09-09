<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
	public function getKelasAbsen()
	{
		$kelas = \App\Kelas::get();
		return view('guru.absensi.tampilkelas',compact('kelas'));
	}

	public function getSiswaAbsen($id)
	{
		$siswa = \App\Siswa::where('id_kelas',$id)->get();
		return view('guru.absensi.tampilsiswa',compact('siswa'));
	}

	public function getKelasNilai()
	{
		$kelas = \App\Kelas::get();
		return view('guru.nilai_tugas.tampilkelas',compact('kelas'));
	}

	public function getSiswaNilai($id)
	{
		$mapel = \App\Mapel::get();
		$siswa = \App\Siswa::where('id_kelas',$id)->get();
		return view('guru.nilai_tugas.tampilsiswa',compact('siswa','mapel'));
	}

	public function cariKelas(Request $req)
	{
		if ($req->ajax()) {
			$output = '';

			$kelas = \App\Kelas::where('nama_kelas','LIKE','%'.$req->kelas.'%')->get();

			foreach ($kelas as $key => $kelas)
			{
				$output = '<a href=getSiswa/'.$kelas->id_kelas.'>'.$kelas->nama_kelas.'</a>';
			}
			return Response($output);
		}
	}

	public function absensi(Request $req)
	{
		foreach ($req->id_siswa as $i => $value) {
			$absen = new \App\Absensi;
			$absen->id_siswa = $value;
			$absen->id_kelas = $req->id_kelas;
			$absen->masuk = $req->tanggal_masuk;
			$absen->status = $req->status[$i];
			$absen->id_user = Auth::id();

			$absen->save();
		}
		return redirect()->route('gurudashboard');
	}

	public function postNilai(Request $req)
	{
		foreach ($req->id_siswa as $i => $value) {
			$tugas = new \App\Nilai;
			$tugas->id_siswa = $value;
			$tugas->id_mapel = $req->id_mapel;
			$tugas->nama_tugas = $req->nama_tugas;
			$tugas->nilai = $req->nilai[$i];
			$tugas->id_user = Auth::id();

			$tugas->save();
		}
		return redirect()->route('gurudashboard');
	}
}
