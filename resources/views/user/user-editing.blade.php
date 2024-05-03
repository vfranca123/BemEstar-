@extends('layout.layout')

@section('content')
    @include('layout.nav')
    <form class="container-sm col-md-6 mt-3"  action="{{route('user.update',$user)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="input-group mb-3">
            
            <input type="file" class="form-control" id="inputGroupFile01" name='imag'>
            <label class="input-group-text" for="inputGroupFile01">Enviar</label>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <input type="text" class="form-control bg-body-secondary " id="nome" aria-describedby="emailHelp" name='name' placeholder="{{$user->name}}">
        </div>

        
        
        <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Senha:</label>
            <input type="password" class="form-control bg-body-secondary" id="exampleInputPassword1" name="senha" placeholder="**********">
        </div>
        
        
        
        <button type="submit" class="btn btn-primary">enviar</button>
    </form>

@endsection