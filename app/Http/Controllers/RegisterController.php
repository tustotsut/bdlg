<?php

namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('form.contact');
    }

    public function registration(Request $request){
        // dd($request->all());
        RegisterUser::insert([
            'name'=>$request->input('f_name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            't_shirt_size'=>$request->input('t_shirt_size'),
            'lg_level'=>$request->input('lg_level'),
            'gender'=>$request->input('gender'),
            'dob'=>$request->input('dob'),
            'profession'=>$request->input('profession'),
            'organization'=>$request->input('organization'),
            'fb_link'=>$request->input('fb_link'),
            'connect_profile'=>$request->input('connect_profile'),
            'map_profile'=>$request->input('map_profile'),
            'present_address'=>$request->input('present_address'),
            'present_division'=>$request->input('present_division'),
            'present_district'=>$request->input('present_district'),
            'present_upazila'=>$request->input('present_upazila'),
            'permanent_address'=>$request->input('permanent_address'),
            'permanent_division'=>$request->input('permanent_division'),
            'permanent_district'=>$request->input('permanent_district'),
            'permanent_upazila'=>$request->input('permanent_upazila'),
        ]);
        return back();
       
    }
}
