@extends('layouts/master')
@section('content')


<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>USER</h1></div>
<form  action="{{asset('save')}}" method="post" class="form-inline   ">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        
        {{-- BTN RETOUR --}}
            {{-- <div class="text-center my-5 ">
                <a href="{{route('home')}}"><button class="btn btn-warning text-white">Home</button></a>
            </div> --}}
        
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">    
              <label  class="sr-only">Nom</label>
              <input type="text" value="@if($errors->first('nom'))
              @else{{old('nom')}}  @endif" class="form-control mb-3 @error('nom') is-invalid @enderror" name='nom'  placeholder="Nom"/>
              @error('nom')
              <div class="text-danger">{{ $message }}
              </div>
              @enderror

            {{-- INPUT AGE   --}}     
            <label  class="sr-only">age</label>
            <input type="number" value="@if($errors->first('age'))
            @else{{old('age')}}  @endif" class="form-control mb-3 @error('age') is-invalid @enderror" name='age'  placeholder="Age"/>
            @error('age')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
            
            {{-- INPUT EMAIL --}}
            <label  class="sr-only">email</label>
            <input  type="email"  class="form-control mb-3 @error('email') is-invalid @enderror" name='email'  placeholder="Email" 
            value="@if($errors->first('email'))
            @else{{old('email')}}  @endif"/>
            
            @error('email')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror    
        </div>
        <button  type='submit' class="btn btn-danger mb-5">SEND</button>
    </form>
    
    {{---------------------------------------------------------------------------------------------------------}}
    
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">AGE</th>
                <th scope="col">EMAIL</th>
                <th scope="col">ACTION</th>
                
            </tr>
        </thead>

        <tbody>  
            @foreach ($users as $user)
            <tr>
                
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->nom}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->email}}</td>

                <td>
                    <a href="{{route('delete',$user->id)}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                    
                    <a href="{{route('edit',$user->id)}}">                    
                        <button class="btn btn-secondary mr-1">edit</button>
                    </a>
                </td>
                
            </tr>
            @endforeach
        <tbody>
    </table>
            
            @endsection
            
            
            