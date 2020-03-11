<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        $Images = Image::all();
        return view('images', compact('Images'));
    }
  
    public function create(){
        // $Images = new Image();
        // return view('create/creformu', compact('Images'));
    }
    
    public function store(Request $request){

            //  $request->validate([
            // 'pseudo' => 'required|min:4',
            // 'email' => 'required|email:rfc,dns',
            // 'motdepasse' => 'required|max:15',
            //  'img' => 'image'
            // ]);
            // Storage::put('public',$request->file('img'));
        $Image = new Image();
        $Image->titre = $request->input('titre');
        $Image->img = $request->input('img');
        $Image->save();

        return redirect()->route('home');
    }
    public function edit($id){  
        $Image = Image::find($id);
        return view('editimage', compact('Image'));
    }
    public function update(Request $request, $id){
        $Image = Image::find($id);
        $Image->titre = $request->input('titre');
        $Image->img = $request->input('img');

        $Image->save();

        return redirect()->route('home');
    }
    public function destroy($id){
        $Image = Image::find($id);
        $Image->delete();
        return redirect()->route('home');
    }
}
