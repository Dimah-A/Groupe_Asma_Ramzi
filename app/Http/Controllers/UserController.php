<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= User::all();
        
        return view('user',compact('users'));
        

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([  
            'nom' => 'required|min:3',  
            'age' => 'required|integer',  
            'email' => 'required|email',  
           
            ]);


        $user = new User();
        $user->age = $request->input('age');
        $user->nom = $request->input('nom');
        $user->email = $request->email; 

        $user->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
        return view('editUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user =User::find($id);

        $user->nom = $request->input('nom');
        $user->age = $request->input('age');
        $user->email = $request->input('email');

        $user->save();
        // dd($user);

        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($portfolio->delete());
        $user=User::find($id);
        $user->delete();

        return  redirect()->route('user');
        
    }
}
