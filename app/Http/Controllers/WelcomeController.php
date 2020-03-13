<?php

namespace App\Http\Controllers;

use App\Welcome;
use App\Image;
use App\Categorie;
use App\Entreprise;
use App\Role;

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
        $Categorie = Categorie::all();
        $Entreprise = Entreprise::all();
        $Role = Role::all();

        return view('welcome', compact('Image','Categorie','Entreprise','Role'));

    }

}
