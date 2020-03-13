<?php

namespace App\Http\Controllers;


use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view('categorie', compact('categories'));
    }
    public function create(){
        // $Categories = new Categorie();
        // return view('create/creformu', compact('Categories'));
    }
    
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'categorie' => 'required|min:5',
            ]);

            $categorie = new Categorie();
            $categorie->categorie = $request->input('categorie');
            $categorie->save();
            return redirect()->route('categorie');
            
        }
        public function edit($id){  
            $categorie = Categorie::find($id);
            return view('editcategorie', compact('categorie'));
        }
        public function update(Request $request, $id){
            $categorie = Categorie::find($id);
            $categorie->categorie = $request->input('categorie');
            
            $categorie->save();
            
            return redirect()->route('categorie');
        }
        public function destroy($id){
            $categorie = Categorie::find($id);
            $categorie->delete();
            return redirect()->route('categorie');
        }
    }
    