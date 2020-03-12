<?php

namespace App\Http\Controllers;

use App\Avatar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars= Avatar::all();
        
        return view('avatar',compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('avatar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $avatar = new Avatar();
        $avatar->nom = $request->input('nom');
        $avatar->img = $newName;
        $avatar->save();
        return redirect()->route('avatar');
        
        
        
    }
    
    
            
            
            
            /**
             * Display the specified resource.
             *
             * @param  \App\Avatar  $avatar
             * @return \Illuminate\Http\Response
             */
            public function show(Avatar $avatar)
            {
                //
            }
            
            /**
             * Show the form for editing the specified resource.
             *
             * @param  \App\Avatar  $avatar
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                
                $avatar= avatar::find($id);
                return view('editAvatar',compact('avatar'));
            }
            
            /**
             * Update the specified resource in storage.
             
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $avatar =Avatar::find($id);
        Storage::disk('public')->delete($avatar->img);

        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);

        $avatar->nom = $request->input('nom');
        $avatar->img = $newName;
        $avatar->save();

        return redirect()->route('avatar');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $avatar=Avatar::find($id);
        Storage::disk('public')->delete($avatar->img);
        $avatar->delete();
        return  redirect()->route('avatar');
    }
}
