<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs(){
        return view ('about-us')
        ->with ('nama','Ahmad Dani Maulana')
        ->with('nim','2041720052');
    } 
}