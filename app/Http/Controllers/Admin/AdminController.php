<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Upazila;

class AdminController extends Controller
{
    //dashboard controller
    public function Dashboard(){
        return view('dashboard');
    }


    //control panel
    public function ControlPanel(){
        return view('control-panel');
    }

    //add new program 
    public function AddProgram(){
        $districts = District::all()->sortDesc();
        return view('add-program',compact('districts'));
    }

}
