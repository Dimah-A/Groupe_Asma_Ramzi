@extends('layouts/master')
@section('content')


<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>ENTREPRISE</h1></div>
<form  action="{{asset('saveE')}}" method="post" class="form-inline   ">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        
        {{-- BTN RETOUR --}}
            <div class="text-center my-5 ">
                <a href="{{route('home')}}"><button class="btn btn-warning text-white">Home</button></a>
            </div>
        
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">    
              <label >Nom</label>
              <input type="text" value="@if($errors->first('nom'))
              @else{{old('nom')}}  @endif" class="form-control mb-3 @error('nom') is-invalid @enderror" name='nom'  placeholder="Nom"/>
              @error('nom')
              <div class="text-danger">{{ $message }}
              </div>
              @enderror

            {{-- INPUT nbr_employe   --}}     
            <label  >nbr_employe</label>
            <input type="number" value="@if($errors->first('nbr_employe'))
            @else{{old('nbr_employe')}}  @endif" class="form-control mb-3 @error('nbr_employe') is-invalid @enderror" name='nbr_employe'  placeholder="nbr_employe"/>
            @error('nbr_employe')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
            
            {{-- INPUT LOGO   --}}     
        {{-- STORAGE --}}
        <label for="">LOGO</label>
        <input class="w-50 form-control @error('logo') is-invalid @enderror" type="file" value="@if($errors->first('logo'))@else{{old('logo')}}@endif" name="logo">
        @error('logo')
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
                <th scope="col">NOMBRE D'EMPLOYÉ</th>
                <th scope="col">LOGO</th>
                <th scope="col">ACTION</th>
                
            </tr>
        </thead>


        <tbody>  
            @foreach ($entreprises as $data)
            <tr>
                
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->nom}}</td>
                <td>{{$data->nbr_employe}}</td>
                <td><img class="img-fluid w-25" src="{{asset('storage/'.$data->logo)}}" alt=""></td>
                <td>
                    <a class="btn btn-danger" href="{{route('delete',$data->id)}}">
                         Delete
                    </a>
                    
                    <a class="btn btn-secondary mr-1" href="{{route('edit',$data->id)}}">                    
                        edit
                    </a>
                </td>
                
            </tr>
            @endforeach
        <tbody>
    </table>
            
            @endsection
            
            
