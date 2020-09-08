<?php

namespace App\Http\Controllers\Orangtua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;

        $data = Siswa::all();

        foreach ($data as $a) {
            if ($a->user_id == $user) {
                dd($a->nama);
            }
        }

        
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
