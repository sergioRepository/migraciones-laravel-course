<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Primercontroller extends Controller
{
    function index() {
        $data = ['name' =>  'Daniel' ];
        return  view('contact',$data);
    }
    function index2() {
        $data = ['name' =>  'sergio' ];
        return  view('contact',$data);
    }

    function post($var1,$var2) {
       echo $var1;
       echo $var2;
    }
    
    
}
