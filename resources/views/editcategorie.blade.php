@extends('layouts/master')
@section('content')

<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>Editer Categorie</h1></div>
<div class="text-center my-5 ">
            <a href="{{route('home')}}"><button class="btn btn-warning text-white">Retour</button></a>
        </div>
<form  action="{{route('updatecategorie',$categorie->id)}}" method="post" enctype="multipart/form-data" class="form-inline">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        {{-- BTN RETOUR --}}
    

            {{-- INPUT EMAIL --}}
            <div class="border border-warning p-5 bg-warning text-white rounded"> 
            <label for="">categorie</label>
    <input class="w-50 form-control @error('categorie') is-invalid @enderror" type="texte" value="@if($errors->first('categorie'))@else{{old('categorie')}}@endif" name="categorie">
    @error('categorie')
    <div class="alert alert-danger">{{ $message }}</div>
    
@enderror    


        </div>
    <button  type='submit' class="btn btn-danger mb-5">SEND</button>
    </div>
        @endsection