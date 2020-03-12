<?php

namespace App\Http\Controllers;

use App\Welcome;
use App\Image;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $Image = Image::all();
       
        return view('welcome', compact('Image'));

    }

}
