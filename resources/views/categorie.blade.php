@extends('layouts/master')
@section('content')


<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>CATEGORIE</h1></div>
<div class="text-center my-5 ">
    <a href="{{route('home')}}"><button class="btn btn-warning text-white">Home</button></a>
</div>
<form  action="{{asset('savecategorie')}}" method="post" class="form-inline   ">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        
        {{-- BTN RETOUR --}}
        
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">    
              <label>Categorie</label>
              <input type="text" value="@if($errors->first('categorie'))
              @else{{old('categorie')}}  @endif" class="form-control mb-3 @error('categorie') is-invalid @enderror" name='categorie'  placeholder="Categorie"/>
              @error('categorie')
              <div class="text-danger">{{ $message }}
              </div>
              @enderror

            {{-- INPUT AGE   --}}    
            
            {{-- INPUT EMAIL --}}   
        </div>
        <button  type='submit' class="btn btn-danger mb-5">SEND</button>
    
    {{---------------------------------------------------------------------------------------------------------}}
    
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CATEGORIE</th>
                
            </tr>
        </thead>

        <tbody>  
            @foreach ($categories as $item)
            <tr>
                
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->categorie}}</td>

                <td colspan="">
                    {{-- <a href="{{route('show',$item->id)}}" class="btn btn-primary scrollto">Show</a> --}}
                    <a href="{{route('editcategorie',$item->id)}}" class="btn btn-warning scrollto">Edit</a>
                    <a href="{{route('deletecategorie',$item->id)}}" class="btn btn-danger scrollto">Delete</a>
    
                </td>
                
            </tr>
            @endforeach
        <tbody>
    </table>
            
            @endsection