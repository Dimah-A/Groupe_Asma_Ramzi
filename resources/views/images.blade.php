@extends('layouts/master')
@section('content')
<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>Images</h1></div>
<<<<<<< HEAD

{{-- BTN RETOUR --}}
<div class="text-center my-5 ">
    <a href="{{route('home')}}"><button class="btn btn-warning text-white">Retour</button></a>
</div>

<form  action="{{asset('save')}}" method="post" enctype="multipart/form-data" class="form-inline">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
=======
<div class="text-center my-5 ">
            <a href="{{route('home')}}"><button class="btn btn-warning text-white">Retour</button></a>
        </div>
<form  action="{{route('saveimg')}}" method="post" enctype="multipart/form-data" class="form-inline">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        {{-- BTN RETOUR --}}
       
>>>>>>> b6388aec72e189f684e44f744236979b58c8a0da
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">
            <label for=""></label>
            <input type="text" class="form-control mb-3 @error('titre') is-invalid @enderror" name='titre'
            placeholder="titre"
            value="@if($errors->first('nom'))
            @else{{old('titre')}}  @endif"/>
            @error('titre')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            {{-- INPUT EMAIL --}}
            <label for="">image</label>
    <input class="w-50 form-control @error('img') is-invalid @enderror" type="file" value="@if($errors->first('img'))@else{{old('img')}}@endif" name="img">
    @error('img')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div> <button  type='submit' class="btn btn-danger mb-5">SEND</button>
        </form>

    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Editer/Delete</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($Images as $item)
                <th scope="row">{{$item->titre}}</th>
                <td><img class="img-fluid w-25" src="{{asset("storage/".$item->img)}}"alt="">
                </td>
                <td colspan="">
                    {{-- <a href="{{route('show',$item->id)}}" class="btn btn-primary scrollto">Show</a> --}}
                    <a href="{{route('editimg',$item->id)}}" class="btn btn-warning scrollto">Edit</a>
                    <a href="{{route('deleteimg',$item->id)}}" class="btn btn-danger scrollto">Delete</a>
    
                </td>
            </tr>
            @endforeach
            @endsection