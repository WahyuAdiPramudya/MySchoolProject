<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Mapel;

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
		$kelas= \App\Kelas::find($id);
		return view('guru.absensi.tampilsiswa',compact('siswa','kelas'));
	}
	public function getDataSiswaAbsen($id)
	{
		$date = date('Y-m-d');
		$kelas= \App\Kelas::find($id);
		$data = \App\absensi::where('masuk', $date)->get();
		$sekolah = \App\Sekolah::all();
		return view('guru.absensi.dataabsensi',compact('data','kelas','sekolah'));
	}

	public function getKelasNilai()
	{
		$kelas = \App\Kelas::get();
		return view('guru.nilai_tugas.tampilkelas',compact('kelas'));
	}

	public function getSiswaNilai($id)
	{
		$mapel = Mapel::all();
		$siswa = \App\Siswa::where('id_kelas',$id)->get();
		return view('guru.nilai_tugas.formtugas',compact('siswa','mapel'));
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
			$absen->sekolah_id = Auth::user()->id_sekolah;
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
			$tugas->sekolah_id = Auth::user()->id_sekolah;
			$tugas->id_kelas = $req->id_kelas[$i];
			$tugas->user_id = Auth::id();

			$tugas->save();
		}
		return redirect()->route('gurudashboard');
	}
	public function DataNilaiSiswa($id)
	{

		$user = Auth::user()->id_sekolah;
		$kelas= \App\Kelas::find($id);
		$data = \App\Nilai::where('id_kelas', $id && 'id_sekolah', $user)->with('getSiswa')->get();
		return view('guru.nilai_tugas.datanilai',compact('data','kelas'));
	}
	public function ListNilaiPerkelas() {
		$user = Auth::user()->id_sekolah;
		$data = \App\Kelas::Where('sekolah_id', $user)->get();
		return view('guru.nilai_tugas.ListKelas', compact('data'));
	}
	public function ListBerita() {
		$user = Auth::user()->id_sekolah;
		$list = \App\Berita::where('sekolah_id', $user)->get();
		return view('guru.berita.listberita', compact('list'));
	}
	public function Berita($id) {
		$berita = \App\Berita::find($id);
		return view('guru.berita.berita', compact('berita'));
	}
	public function ListAbsenPerkelas() {
		$user = Auth::user()->id_sekolah;
		$data = \App\Kelas::Where('sekolah_id', $user)->get();
		return view('guru.absensi.absenperkelas', compact('data'));
	}

	
}
