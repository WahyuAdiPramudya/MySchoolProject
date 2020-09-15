<?php

namespace App\Http\Controllers\SuperAdmin;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sekolah;
use Illuminate\Support\Facades\File;
class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('SuperAdmin.Sekolah.index',compact('sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SuperAdmin.Sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nis' => 'required|max:16',
            'nama_sekolah' => 'required|unique:tb_sekolah|max:50,',
            'kepala_sekolah' => 'required|max:35',
            'no_telp' => 'required',
            'alamat_sekolah' => 'required',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $sekolah = new Sekolah();
        $sekolah->nis = $request->nis;
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->kepala_sekolah = $request->kepala_sekolah;
        $sekolah->no_telp = $request->no_telp;
        $sekolah->alamat_sekolah = $request->alamat_sekolah;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/logo');
            $file->move($destinationPath, $fileName);
            $sekolah->logo = $fileName;
            } else {
            $sekolah->logo = "none";
        }
        Alert()->success('success','Success');
        if($sekolah->save()){    
        return redirect()->route('SuperAdmin.Sekolah.index');
        } else {
            return redirect()->back();
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sekolah = Sekolah::find($id);
        return view('SuperAdmin.Sekolah.edit',compact('sekolah'));
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
          $this->validate($request,[
            'nis' => 'required|max:16',
            'nama_sekolah' => 'required|max:50,',
            'kepala_sekolah' => 'required|max:35',
            'no_telp' => 'required',
            'alamat_sekolah' => 'required',
            
        ]);

        $sekolah = Sekolah::find($id);
        $sekolah->nis = $request->nis;
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->kepala_sekolah = $request->kepala_sekolah;
        $sekolah->no_telp = $request->no_telp;
        $sekolah->alamat_sekolah = $request->alamat_sekolah;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/logo');
            $file->move($destinationPath, $fileName);
            $sekolah->logo = $fileName;
            } else {
            $sekolah->logo = "none";
        }
        Alert()->success('success','Success');
        if($sekolah->save()){    
        return redirect()->route('SuperAdmin.Sekolah.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sekolah = Sekolah::where('id_sekolah',$id)->first();
        File::delete('logo/'.$sekolah->logo);
        // hapus data
        Sekolah::where('id_sekolah',$id)->delete();
        Alert()->success('success','Success');
        return redirect()->back();
    }
}
