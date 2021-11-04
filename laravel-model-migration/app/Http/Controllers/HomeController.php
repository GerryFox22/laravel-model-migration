<?php

namespace App\Http\Controllers;

use App\Viaggio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $viaggi = Viaggio::all();
        
        return view ('home', compact('viaggi') );
    }
}
