@extends('layout.layout')

@section('content')
    @include('layout.nav2')
    @include('shared.flashError ')

    <div class="container d-flex justify-content-center align-items-center  mt-2 rounded-4"
        style="height: 80vh; background-color: #055b50;">
        <div class="container w-50 h-50 bg-white  d-flex justify-content-center rounded-4">
            <form class="w-100  " action="{{ route('login.authenticate') }}" method="post">
                @csrf

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label mt-1">Email</label>
                    <div class="col-sm-10 m-2">
                        <input type="email" class="form-control mt-1" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10  m-2">
                        <input type="password" class="form-control" name="password" placeholder="******">
                    </div>
                </div>
                <input type="submit" class="btn btn-primary " value="entrar">

            </form>
        </div>
    </div>
@endsection
