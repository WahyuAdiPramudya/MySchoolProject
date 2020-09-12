<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use UxWeb\SweetAlert\SweetAlert;
use DataTables;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.guru.index');
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
            'email' => 'required',
            'no_telp' => 'required|unique:users',
            'password' => 'required',
        ]);

         $user = User::create([
            'nama_lengkap' => $request['nama_lengkap'],
            'email' => $request['email'],
            'no_telp' => $request['no_telp'],
            'password' => bcrypt($request['password']),
             
            'status' => 'enable',
            'role_id' => '3',
            'id_sekolah' => Auth::user()->id_sekolah,
        ]);
         Alert()->success('success','Success');
        DB::table('users')->insert($user);
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
        $guru = User::find($id);
        return view('staff.guru.edit',compact('guru'));
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
        $guru = User::find($id);
        $guru->status = $request->status;
        $guru->save();
        Alert()->success('success','Success');
        return redirect()->route('staff.guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = User::find($id)->delete();
        Alert()->success('success','Success');
        return redirect()->back();
    }

    public function datatable(){
        $data = DB::table('users as a')
        ->join('tb_role as b','b.id_role','=','a.role_id')
        ->select('a.*','b.name as role')
        ->where('role_id','3')
        ->get();

        return Datatables::of($data)
        ->addColumn('action', function($data){
            return view('staff.guru.column',[
               'data'        => $data,
               'url_edit'    => route('staff.guru.edit',$data->id),
               'url_destroy' => route('staff.guru.destroy',$data->id)
        ]); 
          })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
           
    }
}
