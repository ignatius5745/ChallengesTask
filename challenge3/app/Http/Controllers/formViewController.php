<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class formViewController extends Controller
{
    public function index(){
    $forms = DB::select('select * from forms');
    return view('home',['forms'=>$forms]);
}
}
