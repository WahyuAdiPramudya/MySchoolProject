<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Update;
use Auth;
use Illuminate\Support\Facades\File;
class UpdateController extends Controller
{
    public function index()
    {
    	$data = Update::all();
    	return view('superadmin.Update.index', compact('data'));
    }

    public function create()
    {
    	return view('SuperAdmin.Update.create');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'description' => 'required',
    		'created_at' => 'required',
    		'image' => 'required',
    	]);

    	 $data = Update::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('images/',$request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
    	Alert()->success('success','Success');
    	return redirect()->route('SuperAdmin.Update.index');

    }
    public function destroy($id)
    {
    	$info =Update::find($id);
    	$info->delete();
    	return back();
    }
}
