<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;
class DashboardController extends Controller
{
	public function index(){
	$berita = Berita::all();
    return view('staff.dashboard',compact('berita'));
	}
}
