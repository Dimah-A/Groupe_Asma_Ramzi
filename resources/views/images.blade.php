@extends('layouts/master')
@section('content')
<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>Images</h1></div>

{{-- BTN RETOUR --}}
<div class="text-center my-5 ">
    <a href="{{route('home')}}"><button class="btn btn-warning text-white">Retour</button></a>
</div>

<form  action="{{asset('save')}}" method="post" enctype="multipart/form-data" class="form-inline">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">
            <label  class="sr-only">Titre</label>
            <input type="text" class="form-control mb-3 @error('titre') is-invalid @enderror" name='titre'
            placeholder="titre" placeholder="titre"
            value="@if($errors->first('nom'))
            @else{{old('titre')}}  @endif"/>
            @error('titre')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            {{-- INPUT EMAIL --}}
            <label  class="sr-only">Image</label>
            <input  type="text"  class="form-control mb-3 @error('email') is-invalid @enderror" name='img'  placeholder="chemin"
            value="@if($errors->first('email'))
            @else{{old('img')}}  @endif"/>
            @error('img')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
        </div>
        </form>
    <button  type='submit' class="btn btn-danger mb-5">SEND</button>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($Images as $item)
                <th scope="row">{{$item->titre}}</th>
                <td><img class="img-fluid w-25" src="{{asset($item->img)}}" alt="">
                </td>
            </tr>
            @endforeach
            @endsection