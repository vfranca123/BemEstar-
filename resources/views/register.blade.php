@extends('layout.layout')

@section('content')
    @include('layout.nav')

    <div class="container d-flex justify-content-center align-items-center  mt-2 rounded-4"
        style="height: 80vh; background-color: #055b50;">
        <div class="container w-50  bg-white  d-flex justify-content-center rounded-4">
            <form enctype="multipart/form-data" class="w-100  " action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="container littleBox ">
                    <div class="row mb-3 mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="nome">
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
                        <div class="col-sm-10 ">
                            <input type="email" class="form-control" id="inputEmail3" name="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password"
                                placeholder="******">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary m-2 " value="Criar uma conta ">
                </div>
            </form>
            <div>
                <div>
                @endsection
