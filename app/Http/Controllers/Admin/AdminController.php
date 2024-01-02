<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Upazila;

use App\Models\Programs;
use App\Models\LocationDate;

class AdminController extends Controller
{
    //dashboard controller
    public function Dashboard(){
        $program = Programs::get();
        // dd($program);
        return view('dashboard',compact('program'));
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

    // store program
    public function StoreProgram(Request $request){
        $json_array = $request->location_date;
        $php_array = json_decode($json_array,true);

        // foreach($php_array as $item){
        //     echo($item['district']);
        //     echo('');
        // }

        Programs::insert([
            'program_title' => $request->program_title,
            'quantity' => $request->quantity,
            'outreach' => $request->outreach,
            'created_at' => Carbon::now(),
        ]);

        $program_id = Programs::where('program_title',$request->program_title)->latest()->get();
        // dd($program_id[0]->id);
        foreach($php_array as $data){
            LocationDate::insert([
                'program_id' =>$program_id[0]->id,
                'district'=> $data['district'],
                'date' => $data['date'],

            ]);
            
        }

        return Redirect()->back()->with('success','Program Data Added');

    }


    //filter by title and return json
    public function FilterByTitle($title){
        $program = Programs::where('program_title',$title)->latest()->get();
        $location_date = LocationDate::where('program_id',$program[0]->id)->get();
        // dd($program[0]->id);
        


        return response()->json(['program'=>$program,'location_date'=>$location_date]);
    }

}
