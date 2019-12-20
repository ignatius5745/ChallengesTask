<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function createform1()
    {
        return view('form1');
    }
    
    public function createform2()
    {
        return view('form2');
    }
    
    public function createform3()
    {
        return view('form3');
    }
    
    public function selectform()
    {
        return view('create');
    }
    
    public function editform1()
    {
        return view('editform1');
    }
    
    public function editform2()
    {
        return view('editform2');
    }
    
    public function editform3()
    {
        return view('editform3');
    }
}
