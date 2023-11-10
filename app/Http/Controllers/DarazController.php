<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarazController extends Controller
{
   public function HomePage(){

    return view('index');   }

    public function about(){

        return view('about');
    }

    public function service(){
        
        return view('service');
    }
    public function contact(){
        
        return view('contact');
    }
}
