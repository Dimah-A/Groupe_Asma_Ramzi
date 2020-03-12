@extends('layouts/master')
@section('content')


<form  action="{{route('updateA',$avatar->id)}}" method="POST" enctype="multipart/form-data" class="form-inline   ">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        
        {{-- BTN RETOUR --}}
        {{-- <div class="text-center my-5 ">
            <a href="{{route('home')}}"><button class="btn btn-warning text-white">Home</button></a>
        </div> --}}
        
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">    
            <label  class="sr-only">Nom</label>
            <input value="{{$avatar -> nom}}" type="text" value="@if($errors->first('nom'))
            @else{{old('nom')}}  @endif" class="form-control mb-3 @error('nom') is-invalid @enderror" name='nom'  placeholder="Nom"/>
            @error('nom')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
            
            
            {{-- INPUT IMG   --}}     
            {{-- STORAGE --}}
            <label for="">image</label>
            <input class="w-50 form-control @error('img') is-invalid @enderror" type="file" value="@if($errors->first('img'))@else{{old('img')}}@endif" name="img">
            @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            
        </div>
        <button  type='submit' class="btn btn-danger mb-5">SEND</button>
        
    </form>
    
    @endsection
    