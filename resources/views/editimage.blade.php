@extends('layouts/master')
@section('content')

<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>Editer Images</h1></div>
<div class="text-center my-5 ">
            <a href="{{route('home')}}"><button class="btn btn-warning text-white">Retour</button></a>
        </div>
<form  action="{{route('updateimg',$Image->id)}}" method="post" enctype="multipart/form-data" class="form-inline">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        {{-- BTN RETOUR --}}
       
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">
            <label for=""></label>
            <input type="text" class="form-control mb-3 @error('titre') is-invalid @enderror" name='titre'
            placeholder="titre"
            value="@if($errors->first('titre'))
            @else{{old('titre')}}  @endif"/>
            @error('titre')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            {{-- INPUT EMAIL --}}
            <div class="border border-warning p-5 bg-warning text-white rounded">
            <label for="">image</label>
    <input class="w-50 form-control @error('img') is-invalid @enderror" type="file" value="@if($errors->first('img'))@else{{old('img')}}@endif" name="img">
    @error('img')
    <div class="alert alert-danger">{{ $message }}</div>
    
@enderror
        </div>
        <button  type='submit' class="btn btn-danger mb-5">SEND</button>
        </div>
        @endsection