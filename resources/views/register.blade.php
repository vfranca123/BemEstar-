@extends('layout.layout')

@section('content')

    <div id="bigBox">
        <form enctype="multipart/form-data"  class="container-xxl mt-3 vh-100 bigBox" action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="container littleBox " >
              <div class="row mb-3 mt-1">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="nome" >
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Data de nascimento</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword3" name="date">
                  </div>
              </div>
              
              <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="email">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="******">
                  </div>
                </div>

              <input type="submit" class="container-fluid  blackBox" style="font-size: x-large" value="Criar uma conta ">
            </div> 
        </form>
    </div>
    
@endsection


