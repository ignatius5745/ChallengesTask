<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfoInsertController extends Controller
{
       public function insertform(){
            return view('createinfo');
        }
        public function insert(Request $request){
            $name = $request->input('name');
            $gender= $request->input('gender');
            $address = $request->input('address');
            $country = $request->input('country');
            $dob = $request->input('dob');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $school = $request->input('school');
        $data=array("name"=>$name,"gender"=>$gender,"address"=>$address,"country"=>$country, "dob"=>$dob, "phone"=>$phone, "email"=>$email, "school"=>$school);
        DB::table('personal_info')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/personalinfo">Click Here</a> to go back.';
    }
}
