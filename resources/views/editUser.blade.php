@extends('layouts/master')
@section('content')

<form  action="{{route('update',$user->id)}}" method="POST" enctype="multipart/form-data" class="form-inline   ">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        
        {{-- BTN RETOUR --}}
            {{-- <div class="text-center my-5 ">
                <a href="{{route('home')}}"><button class="btn btn-warning text-white">Home</button></a>
            </div> --}}
        
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">    
              <label  class="sr-only">Nom</label>
              <input value="{{$user -> nom}}" type="text" value="@if($errors->first('nom'))
              @else{{old('nom')}}  @endif" class="form-control mb-3 @error('nom') is-invalid @enderror" name='nom'  placeholder="Nom"/>
              @error('nom')
              <div class="text-danger">{{ $message }}
              </div>
              @enderror

            {{-- INPUT AGE   --}}     
            <label  class="sr-only">age</label>
            <input value="{{$user -> age}}" type="number" value="@if($errors->first('age'))
            @else{{old('age')}}  @endif" class="form-control mb-3 @error('age') is-invalid @enderror" name='age'  placeholder="Age"/>
            @error('age')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
            
            {{-- INPUT EMAIL --}}
            <label  class="sr-only">email</label>
            <input value="{{$user -> email}}"  type="email"  class="form-control mb-3 @error('email') is-invalid @enderror" name='email'  placeholder="Email" 
            value="@if($errors->first('email'))
            @else{{old('email')}}  @endif"/>
            
            @error('email')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
            
            
            
            {{-- STORAGE --}}
            {{-- <div class="custom-file mb-3">
                <input type="file" name='url' class="custom-file-input mb-3" >
                <label class="custom-file-label"  for="inputGroupFile02">Choose file</label>
                <div class="input-group-append">
                </div>
            </div> --}}
            
            
            
            {{-- UPLAOD --}}
            {{-- <label for="web">Télécharger à partir de l'URL</label>
            <input type="text" id='web' value="@if($errors->first('url'))
            @else{{old('url')}}  @endif"
            class="form-control @error('url') is-invalid @enderror" name="web"/>
            
            @error('url')
            <div class="text-danger">{{ $message }}</div>
            @enderror --}}
            
            
        </div>
        <button  type='submit' class="btn btn-danger mb-5">SEND</button>
        
    </form>

    @endsection