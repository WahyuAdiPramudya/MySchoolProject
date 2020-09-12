<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use DataTables;
use App\Kelas;
use Illuminate\Support\Facades\File;
use UxWeb\SweetAlert\SweetAlert;
use Auth;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.siswa.index');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('staff.siswa.create',compact('kelas'));
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
             'nisn' => 'required|unique:tb_siswa|max:15',
             'nama' => 'required',
             'jenkel' => 'required',
             'agama' => 'required',
             'kelas_id' => 'required',
             'nama_ayah' => 'required',
             'nama_ibu' => 'required',
             'tanggal_lahir' => 'required',
             'alamat' => 'required',
             'image_siswa' => 'required',  
        ]);

        $siswa = new Siswa();
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->jenkel = $request->jenkel;
        $siswa->agama = $request->agama;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
         if ($request->hasFile('image_siswa')) {
            $file = $request->file('image_siswa');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/Siswa');
            $file->move($destinationPath, $fileName);
            $siswa->image_siswa = $fileName;
            } else {
              if ($request->hasFile('image_siswa')) {
            $file = $request->file('image_siswa');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/Siswa');
            $file->move($destinationPath, $fileName);
            $siswa->image_siswa = $fileName;
            }
        }
        $siswa->id_sekolah = Auth::user()->id_sekolah;
        if($siswa->save()){
            Alert()->success('success','Success');
            return redirect()->route('staff.siswa.index');
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
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('staff.siswa.show',compact('siswa','kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('staff.siswa.edit',compact('siswa','kelas'));
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
             'nisn' => 'required|max:15',
             'nama' => 'required',
             'jenkel' => 'required',
             'agama' => 'required',
             'kelas_id' => 'required',
             'nama_ayah' => 'required',
             'nama_ibu' => 'required',
             'tanggal_lahir' => 'required',
             'alamat' => 'required',
        ]);

        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->jenkel = $request->jenkel;
        $siswa->agama = $request->agama;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
         if ($request->hasFile('image_siswa')) {
            $file = $request->file('image_siswa');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/Siswa');
            $file->move($destinationPath, $fileName);
            $siswa->image_siswa = $fileName;
            } else {
              if ($request->hasFile('image_siswa')) {
            $file = $request->file('image_siswa');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/Siswa');
            $file->move($destinationPath, $fileName);
            $siswa->image_siswa = $fileName;
            }
        }
        $siswa->id_sekolah = Auth::user()->id_sekolah;
        if($siswa->save()){
            Alert()->success('success','Success');
            return redirect()->route('staff.siswa.index');
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
        $siswa = Siswa::where('nisn',$id)->first();
        File::delete('siswa/'.$siswa->image_siswa);
        // hapus data
        Siswa::where('nisn',$id)->delete();
        Alert()->success('success','Success');
        return redirect()->back();
    }

    public function datatables(){
        $siswa = Siswa::orderBy('nisn', 'nama','DESC')->get();

        return DataTables::of($siswa)
        ->addColumn('action', function($siswa){
            return view('staff.siswa.column',[
               'siswa'        => $siswa,
               'url_edit'    => route('staff.siswa.edit',$siswa->nisn),
               'url_destroy' => route('staff.siswa.destroy',$siswa->nisn),
               'url_show' => route('staff.siswa.show',$siswa->nisn)
        ]); 
          })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }
}
