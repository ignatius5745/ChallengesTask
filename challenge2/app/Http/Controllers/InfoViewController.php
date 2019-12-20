<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfoViewController extends Controller
{
   public function index(){
$personalinfo = DB::select('select * from personal_info');
return view('personalinfo',['personalinfo'=>$personalinfo]);
}
}
