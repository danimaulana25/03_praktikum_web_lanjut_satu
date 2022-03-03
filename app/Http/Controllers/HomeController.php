<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view ('home')
        ->with ('nama','Ahmad Dani Maulana')
        ->with('nim','2041720052');
    } 
}