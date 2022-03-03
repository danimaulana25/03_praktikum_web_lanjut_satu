<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view ('contact-us')
        ->with ('nama','Ahmad Dani Maulana')
        ->with('nim','2041720052')
        ->with('facebook','https://www.facebook.com/profile.php?id=100009132333264')
        ->with('instagram','https://www.instagram.com/ahmaddani_25/');
    }
}