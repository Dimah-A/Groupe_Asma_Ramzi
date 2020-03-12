@extends('layouts/master')
@section('content')

<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>AVATAR</h1></div>
<form  action="{{asset('saveA')}}" method="post" class="form-inline" enctype="multipart/form-data">
@csrf
<div class="text-center mx-auto col-6 py-5 ">
    
    {{-- BTN RETOUR --}}
    {{-- <div class="text-center my-5 ">
        <a href="{{route('home')}}"><button class="btn btn-warning text-white">Home</button></a>
    </div> --}}
    
    {{-- INPUT NOM --}}
    <div class="border border-warning p-5 bg-warning text-white rounded">    
        <label>Nom</label>
        <input type="text" value="@if($errors->first('nom'))
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

{{---------------------------------------------------------------------------------------------------------}}

<table class="table table-striped ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOM</th>
            <th scope="col">IMAGE</th>
            
            
        </tr>
    </thead>
    
    <tbody>  
        @foreach ($avatars as $avatar)
        <tr>
            
            <th scope="row">{{$avatar->id}}</th>
            <td>{{$avatar->nom}}</td>
            <td><img class="img-fluid w-25" src="{{asset('storage/'.$avatar->img)}}" alt="">
                {{-- <td> <img src="{{$avatar->img}}" alt=""/> </td> --}}
                
                <td>
                    <a class="btn btn-danger" href="{{route('deleteA',$avatar->id)}}">
                        Delete
                    </a>
                    
                    <a href="{{route('edit',$avatar->id)}}">                    
                        <button class="btn btn-secondary mr-1">edit</button>
                    </a>
                </td>
                
            </tr>
            @endforeach
            <tbody>
            </table>
            
            @endsection
            
            
            
            