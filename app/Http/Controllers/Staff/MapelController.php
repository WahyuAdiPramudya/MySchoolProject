<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mapel;
use App\User;
use Session;
use Auth;
use DB;
use UxWeb\SweetAlert\SweetAlert;
use DataTables;
class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::all();
        $guru  = User::where('role_id',3)->get();
        return view('staff.mapel.index',compact('mapel','guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'mapel' => 'required|unique:tb_map',
            'user_id' => 'required'
        ]);
        $mapel = new Mapel();
        $mapel->mapel = $request->mapel;
        $mapel->user_id = $request->user_id;
        $mapel->sekolah_id = Auth::user()->id_sekolah;
        $mapel->save();
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

        $mapel = Mapel::find($id);
        $guru = User::where('role_id',3)->get();
        return view('staff.mapel.edit',compact('mapel','guru'));
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
            'mapel' => 'required',
            'user_id' => 'required'
        ]);

        $mapel = Mapel::find($id);
        $mapel->mapel = $request->mapel;
        $mapel->user_id = $request->user_id;
        $mapel->sekolah_id = Auth::user()->id_sekolah;
        $mapel->save();
        Alert()->success('success','Success');
        return redirect()->route('staff.mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mapel = Mapel::find($id)->delete();
        Alert()->success('success','Success');
        return redirect()->back();     
    }

    public function datatable(){
        $data = DB::table('tb_mapel as a')
        ->join('users as b','b.id','=','a.user_id')
        ->select('a.*','b.nama_lengkap as nama')
        ->get();

        return Datatables::of($data)
        ->addColumn('action', function($data){
            return view('staff.mapel.column',[
               'data'        => $data,
               'url_edit'    => route('staff.mapel.edit',$data->id),
               'url_destroy' => route('staff.mapel.destroy',$data->id)
        ]); 
          })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
           
    }
}
