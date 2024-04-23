@extends('layout.layout')

@section('content')
    @include('shared.flashError ')

    <form id="bigBox" action="{{route('login.authenticate')}}" method="post">
        @csrf
        <div id="littleBox" style="height: 35%;">
           
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label mt-1 ">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control mt-1"  name="email" >
                </div>
              </div>
            
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control"  name="password" placeholder="******">
                </div>
              </div>
            
            <input type="submit" id="blackBox" style="font-size: x-large;height: 30%;" value="entrar "> 
        </div>
    </form>
@endsection


