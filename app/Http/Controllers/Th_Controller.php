<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Th_Controller extends Controller
{
    public function IndexThProduct($parameter_language){
        return view('Thai.th-product',compact('parameter_language'));
    }
    public function IndexHome(){
        return view('home.home-th');
    }
    public function GetArgumentIndexHome($parameter_language){
        return view('Thai.th-home',compact('parameter_language'));
    }
    public function IndexThContract($parameter_language){
        return view('Thai.th-contact-us',compact('parameter_language'));
    }

    public function IndexThAbout($parameter_language){
        return view('Thai.th-about-us',compact('parameter_language'));
    }

    public function IndexThDurian($parameter_language){
        return view('Thai.th-durian-story',compact('parameter_language'));
    }
    public function Indexjob($parameter_language){
        return view('Thai.job.index',compact('parameter_language'));
    }
   

    
}
