<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use UxWeb\SweetAlert\SweetAlert;
use DataTables;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Sekolah;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('SuperAdmin.Staff.index',compact('sekolah'));
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
            'nama_lengkap' => 'required',
            'email' => 'required|unique:users',
            'no_telp' => 'required|unique:users',
            'password' => 'required',
        ]);

         $data = User::create([
            'nama_lengkap' => $request['nama_lengkap'],
            'email' => $request['email'],
            'no_telp' => $request['no_telp'],
            'password' => bcrypt($request['password']),
            'status' => 'enable',
            'role_id' => '2',
            'id_sekolah' => $request['id_sekolah'],
        ]);
        alert()->success('Sukses','Sukses');
        $data->save();
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
        $staff = User::find($id);
        return view('SuperAdmin.staff.edit',compact('staff'));
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
        $staff = User::find($id);
        $staff->status = $request->status;
        $staff->save();
        Alert()->success('success','Success');
        return redirect()->route('SuperAdmin.staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        alert()->success('Sukses','Sukses');
        return redirect()->back();
    }

     public function datatable(){
        $data = DB::table('users as a')
        ->join('tb_role as b','b.id_role','=','a.role_id')
        ->select('a.*','b.name as role')
        ->where('role_id','2')
        ->get();

        return Datatables::of($data)
        ->addColumn('action', function($data){
            return view('SuperAdmin.Staff.column',[
               'data'        => $data,
               'url_edit'    => route('SuperAdmin.staff.edit',$data->id),
               'url_destroy' => route('SuperAdmin.staff.destroy',$data->id)
        ]); 
          })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
           }
}
