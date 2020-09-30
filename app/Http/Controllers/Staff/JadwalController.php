<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jadwal;
use App\Kelas;
use Auth;
class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::all();
        return view('staff.jadwal.index', compact('data'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('staff.jadwal.create', compact('kelas'));
    }

    public function store(Request $request)
    {  
        $jadwal = new Jadwal();
        $jadwal->nama_jadwal = $request->nama_jadwal;
        $jadwal->id_user = Auth::user()->id;
        $jadwal->id_sekolah = Auth::user()->id_sekolah;
        $jadwal->id_kelas = $request->id_kelas;
         if($request->hasFile('file_jadwal')){
            $request->file('file_jadwal')->move('File/',$request->file('file_jadwal')->getClientOriginalName());
            $jadwal->file_jadwal = $request->file('file_jadwal')->getClientOriginalName();
            $jadwal->save();
        }
        Alert()->success('success','Success');
        return redirect()->route('staff.jadwal.index');
    }
    public function show($id)
    {
        $jadwal = Jadwal::find($id);
        return view('staff.jadwal.show', compact('jadwal'));
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
    public function update(Request $request, $id)
    {
        //
    }

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
    public function download($id)
    {
        $jadwal = Jadwal::find($id);
        $file = public_path().'/File/'. $jadwal->file_jadwal;
        return response()->download($file, $jadwal->file_jadwal);

    }
}
