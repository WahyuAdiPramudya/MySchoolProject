<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\kelas;
use Auth;
use UxWeb\SweetAlert\SweetAlert;
use DataTables;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('staff.kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama_kelas' => 'required|unique:tb_kelas'
        ]);
        $kelas = new Kelas();
        
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->sekolah_id = Auth::user()->id_sekolah;
        $kelas->save();
        Alert()->success('success','Success');
        return redirect()->back();
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
        $kelas = Kelas::find($id);
        return view('staff.kelas.edit',compact('kelas'));  
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
            'nama_kelas' => 'required|unique:tb_kelas'
        ]);
        $kelas = Kelas::find($id);
        
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->sekolah_id = Auth::user()->id_sekolah;
        $kelas->save();
        Alert()->success('success','Success');
        return redirect()->route('staff.kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id)->delete();
        Alert()->success('success','Success');
        return redirect()->back();
    }

    public function datatables(){
        $kelas = Kelas::all();
        return Datatables::of($kelas)
        ->addColumn('action', function($kelas){
            return view('staff.kelas.column',[
               'kelas'        => $kelas,
               'url_edit'    => route('staff.kelas.edit',$kelas->id),
               'url_destroy' => route('staff.kelas.destroy',$kelas->id)
        ]); 
          })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }
}
