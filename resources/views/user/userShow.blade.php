@extends('layout.layout')

@section('content')
    @include('shared.flash ')
    <div  class="container-sm col-md-6 mt-3">
        
        <div class="mb-3 d-flex ">
        @if($user->ftPerfil)
            <img src="{{$user->getImageURL()}}" style="width:100px ; border-radius: 5px;" alt="ft de perfil">
        @endif    
            <h1>{{$user->name}}</h1>
        </div>
        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address:</label>
            <label class="form-control bg-body-secondary " id="exampleInputEmail1" aria-describedby="emailHelp">{{$user->email}}</label>
        </div>
        
        <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <label class="form-control bg-body-secondary " id="exampleInputEmail1" aria-describedby="emailHelp">*********</label>
        </div>

        <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Data de nascimento:</label>
            <label class="form-control bg-body-secondary " id="exampleInputEmail1" aria-describedby="emailHelp">{{$user->data_coluna}}</label>
        </div>
        
        <a href="{{route('userEdit.index',$user)}}" >Editar</a>
    </div>
        

@endsection