<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class form2insert extends Controller
{
    public function insertform(){
        return view('form2');
    }
    public function insert(Request $request){
        $full_name = $request->input('full_name');
        $gender = $request->input('gender');
        $date = date('Y-m-d H:i:s');
        $version = $request->input('version');
        $dob = $request->input('dob');
        $address = $request->input('address');
        $email = $request->input('email');
        $phone = $request->input('phone');
    
$data=array('full_name'=>$full_name,"gender"=>$gender,"date"=>$date,"email"=>$email,"version"=>$version,"phone"=>$phone,"address"=>$address ,"dob"=>$dob);
        
DB::table('forms')->insert($data);
echo "Record inserted successfully.<br/>";
echo '<a href = "/home">Click Here</a> to go back.';
}
}
