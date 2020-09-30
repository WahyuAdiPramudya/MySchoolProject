<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Update;
class DashboardController extends Controller
{
    public function index(){
    	$slider = Update::all();
    	return view('SuperAdmin.dashboard', compact('slider'));
    }
}
