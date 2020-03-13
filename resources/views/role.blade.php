@extends('layouts/master')
@section('content')


<div class="p-3  bg-danger  text-white d-flex justify-content-center"><h1>ROLE</h1></div>
<form  action="{{asset('saveR')}}" method="post" class="form-inline   ">
    @csrf
    <div class="text-center mx-auto col-6 py-5 ">
        
        {{-- BTN RETOUR --}}
            <div class="text-center my-5 ">
                <a href="{{route('home')}}"><button class="btn btn-warning text-white">Home</button></a>
            </div>
        
        {{-- INPUT NOM --}}
        <div class="border border-warning p-5 bg-warning text-white rounded">    
              <label>Nom</label>
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
            
            {{-- INPUT EMAIL --}}
            <label>email</label>
            <input  type="email"  class="form-control mb-3 @error('email') is-invalid @enderror" name='email'  placeholder="Email" 
            value="@if($errors->first('email'))
            @else{{old('email')}}  @endif"/>
            
            @error('email')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror    
        </div>
        <button  type='submit' class="btn btn-danger mb-5">SEND</button>
    </form>
    
    {{---------------------------------------------------------------------------------------------------------}}
    
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">MEMBRE</th>
                <th scope="col"> EMPLOYÉ</th>
                <th scope="col">PDG</th>
                <th scope="col">ACTION</th>
                
            </tr>
        </thead>


        <tbody>  
            @foreach ($roles as $data)
            <tr>
                
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->nom}}</td>
                <td>{{$data->nbr_employé}}</td>
                <td>{{$data->logo}}</td>

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
            
            
