<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validatedData = $request->validate([
            'titre' => 'required|min:2',
            'img' => 'image',
            ]);
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $Image = new Image();
        $Image->titre = $request->input('titre');
        $Image->img = $newName;
        $Image->save();

        return redirect()->route('image');
    }
    public function edit($id){  
        $Image = Image::find($id);
        return view('editimage', compact('Image'));
    }
    public function update(Request $request, $id){
        $Image = Image::find($id);
        Storage::disk('public')->delete($Image->img);
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $Image->titre = $request->input('titre');
        $Image->img = $newName;

        $Image->save();

        return redirect()->route('image');
    }
    public function destroy($id){
        $Image = Image::find($id);
        Storage::disk('public')->delete($Image->img);
        $Image->delete();
        return redirect()->route('image');
    }
}
