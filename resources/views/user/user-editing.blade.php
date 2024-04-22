@extends('layout.layout')

@section('content')
    
    <form style="width: 40%;margin:10%"  action="#" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <label class="form-control bg-body-secondary " id="exampleInputEmail1" aria-describedby="emailHelp" name='nome'>{{$user->name}}</label>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" class="form-control bg-body-secondary" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="{{$user->email}}">
        <div id="emailHelp" class="form-text"></div>
        </div>
        
        <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Senha:</label>
            <input type="password" class="form-control bg-body-secondary" id="exampleInputPassword1" name="senha" placeholder="**********">
        </div>
        
        
        
        <button type="submit" class="btn btn-primary">enviar</button>
    </form>

@endsection