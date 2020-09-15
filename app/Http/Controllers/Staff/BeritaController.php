<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;
use Auth;
use Storage;
use UxWeb\SweetAlert\SweetAlert;
use DataTables;
use App\Sekolah;
use Illuminate\Support\Facades\File;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('staff.berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:5',
            'desc' => 'required',
            'tanggal_upload' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
            $berita = new Berita();
            $berita->judul = $request->judul;
            $berita->desc  = $request->desc;
            $berita->tanggal_upload = $request->tanggal_upload;
           if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            $berita->image = $fileName;
            } else {
              if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            $berita->image = $fileName;
            }
        }
            $berita->role_id = Auth::user()->id;
            $berita->sekolah_id = Auth::user()->id_sekolah;
            
            Alert()->success('success','Success');
            $berita->save();
            return redirect()->route('staff.berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sekolah = Sekolah::where('id_sekolah',$id)->get();
        return view('layouts.backend.partial.topbar',compact('sekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('staff.berita.edit',compact('berita'));
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
        $request->validate([
            'judul' => 'required|min:5',
            'desc' => 'required',
            'tanggal_upload' => 'required',
        ]);
        
            $berita = Berita::find($id);
            $berita->judul = $request->judul;
            $berita->desc  = $request->desc;
            $berita->tanggal_upload = $request->tanggal_upload;
           if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            $oldfilename = $berita->image;
            \File::delete($oldfilename);
            $berita->image = $fileName;
            }else {
               if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            $oldfilename = $berita->image;
            \File::delete($oldfilename);
            $berita->image = $fileName;
            }
        }
            $berita->role_id = Auth::user()->id;
            $berita->sekolah_id = Auth::user()->id_sekolah;
            
            Alert()->success('success','Success');
            $berita->save();
            return redirect()->route('staff.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::where('id_berita',$id)->first();
        File::delete('images/'.$berita->image);
        // hapus data
        Berita::where('id_berita',$id)->delete();
        Alert()->success('success','Success');
        return redirect()->back();
    }
}
