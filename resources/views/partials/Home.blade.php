@extends('layouts/master')
@section('content')

<div class="p-3  bg-danger text-white d-flex justify-content-center"><h1>HOME</h1></div>


<table class="table table-striped  text-center mx-auto col-10 mt-5 ">
    <thead>
        <tr class="bg-light">
            <th scope="col">USER</th>
            <th scope="col">AVATAR</th>
            <th scope="col">CATEGORIE</th>
            <th scope="col">IMAGES</th>
            <th scope="col">ACTION</th>
            
        </tr>
    </thead>

    <tbody>  
        {{-- @foreach ($users as $user)
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
        @endforeach --}}
    <tbody>
</table>

@endsection