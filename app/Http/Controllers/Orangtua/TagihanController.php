<?php

namespace App\Http\Controllers\Orangtua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tagihan;
use App\Siswa;
use Auth;
class TagihanController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('no_telp_wali', Auth::user()->no_telp)->get();
        $data = Tagihan::all();
        return view('orangtua.tagihan.index', compact('siswa','data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
