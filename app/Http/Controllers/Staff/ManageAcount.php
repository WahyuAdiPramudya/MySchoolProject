<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use UxWeb\SweetAlert\SweetAlert;
use DataTables;
use App\User;
class ManageAcount extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.kelola_akun.index');
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
        $kelola_akun = User::find($id);
        return view('staff.kelola_akun.edit',compact('kelola_akun'));
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
        $kelola_akun = User::find($id);
        $kelola_akun->status = $request->status;
        $kelola_akun->save();
        Alert()->success('success','Success');
        return redirect()->route('staff.kelola_akun.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $akun = User::find($id)->delete();
        Alert()->success('success','Success');
        return redirect()->back();

    }

     public function datatable(){
        $data = DB::table('users as a')
        ->join('tb_role as b','b.id_role','=','a.role_id')
        ->select('a.*','b.name as role')
        ->get();

        return Datatables::of($data)
        ->addColumn('action', function($data){
            return view('staff.kelola_akun.column',[
               'data'        => $data,
               'url_edit'    => route('staff.kelola_akun.edit',$data->id),
               'url_destroy' => route('staff.kelola_akun.destroy',$data->id)
        ]); 
          })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
           
    }

     public function enableall(Request $request)
    {
        $a = 'cek';
         dd($a);

    }
}
