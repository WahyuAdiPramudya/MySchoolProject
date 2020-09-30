<?php

namespace App\Http\Controllers\Orangtua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Siswa;
use App\Sekolah;
use App\Kelas;
use App\Update;
use App\absensi;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Update::all();
        $izin = absensi::where('status', 'izin')->get();
        $sakit = absensi::where('status','sakit')->get();
        $alpa = absensi::where('status','alpa')->get();
        $col1 = count($izin);
        $col2 = count($sakit);
        $col3 = count($alpa);
        
       return view('orangtua.dashboard', compact('slider','col1','col2','col3'));
    }

    public function profile()
    {
        $data = Siswa::all();
        $user = Auth::user()->no_telp;
        $sekolah =  Sekolah::all();
        $kelas = Kelas::all();
        foreach ($data as $a ) {
            if ($a->no_telp_wali == $user) {
            return view('orangtua.profile', compact('a','sekolah','kelas'));
            }
        }
       
    }
   public function listprofile()
       {
        $data =Siswa::all();
        $user = Auth::user()->no_telp;
            foreach ($data as $a ) {
            if ($a->no_telp_wali == $user) {
            return view('orangtua.listprofile', compact('a'));
            }
       }
   }
    public function profileorangtua()
    {
        $data =Siswa::all();
        $user = Auth::user()->no_telp;
            foreach ($data as $a ) {
            if ($a->no_telp_wali == $user) {
            return view('orangtua.profile.profileorangtua', compact('a'));
            }
       }
        
    }
    public function profilesiswa()
    {
         $data =Siswa::all();
        $user = Auth::user()->no_telp;
            foreach ($data as $a ) {
            if ($a->no_telp_wali == $user) {
            return view('orangtua.profile.profilesiswa', compact('a'));
            }
       }
    }
    public function absenrumah()
    {
        $data =Siswa::where('no_telp_wali',Auth::user()->no_telp)->get();
        return view('orangtua.absensi.absendirumah', compact('data'));
    }

    public function postabsen(Request $request)
    {
        $absen = new absensi();
        $absen->id_siswa = $request->id_siswa;
        $absen->id_kelas = $request->id_kelas;
        $absen->masuk = $request->tanggal_masuk;
        $absen->status = $request->status;
        $absen->sekolah_id = Auth::user()->id_sekolah;
        $absen->id_user = Auth::id();
        $absen->save();
        // $messege = "Absen Dari Rumah Tela terkirim";
        return redirect('/orangtua/success')->with('success','Absen Dari Rumah Berhasil!');
    }
    public function listupdate()
    {
        $data = Update::all();
        return view('orangtua.update.listupdate',compact('data'));
    }

    public function update($id)
    {
        $data = Update::where('id_update', $id)->get();
        foreach ($data as $row) {
            return view('orangtua.update.update', compact('row'));
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
