<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use UxWeb\SweetAlert\SweetAlert;
use DataTables;
use App\User;
use Auth;
use App\Sekolah;
use Illuminate\Support\Facades\Input;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('SuperAdmin.Orangtua.index',compact('sekolah'));
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
        //
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
        
    }

    public function datatable(){
        $data = DB::table('users as a')
        ->join('tb_role as b','b.id_role','=','a.role_id')
        ->select('a.*','b.name as role')
        ->where('role_id','4')
        ->get();

        return Datatables::of($data)
        ->addColumn('action', function($data){
            return view('SuperAdmin.Orangtua.column',[
               'data'        => $data,
               'url_edit'    => route('SuperAdmin.Orangtua.edit',$data->id),
               'url_destroy' => route('SuperAdmin.Orangtua.destroy',$data->id)
        ]); 
          })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }
    
}
