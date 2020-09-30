<?php

namespace App\Http\Controllers\Orangtua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;
use Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id_sekolah;
        $data = Berita::where('sekolah_id', $user)->get();
        return view('orangtua.berita.listberita', compact('data'));

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
        $data = Berita::find($id);
        return view('orangtua.berita.berita', compact('data'));
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
