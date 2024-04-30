@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')
    <div id="display"> 
        <h1>sono</h1>
        
            <form  action="{{route('user.sono.store',auth()->id())}}" method="POST"  class="container grayBox" style="min-height: 100%"enctype="multipart/form-data">
                @csrf
                
                <h3 class="m-4">inicio:</h3>
                <div class="col-md-6">
                    <input type="time" class="form-control" name="inicio"  >
                </div>
                
                <h3 class="m-4">fim:</h3>
                <div class="col-md-6">
                    <input  type="time" class="form-control " name="fim" >
                </div>

                <h3 class="m-4">avaliação:</h3>
                <div  class="form-inline" >
                    <div class="form-check form-check-inline " > <!-- Adicionando largura personalizada -->
                        <input class="form-check-input custom-checkbox " type="radio" id="inlineCheckbox1" name="avaliacao" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline " >
                        <input class="form-check-input custom-checkbox" type="radio" id="inlineCheckbox2" name="avaliacao" value="2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline " >
                        <input class="form-check-input custom-checkbox" type="radio" id="inlineCheckbox3" name="avaliacao" value="3">
                        <label class="form-check-label" for="inlineCheckbox3">3</label>
                    </div>  
                    <div class="form-check form-check-inline " >
                        <input class="form-check-input custom-checkbox" type="radio" id="inlineCheckbox4" name="avaliacao" value="4">
                        <label class="form-check-label" for="inlineCheckbox3">4</label>
                    </div> 
                    <div class="form-check form-check-inline " >
                        <input class="form-check-input custom-checkbox " type="radio" id="inlineCheckbox5" name="avaliacao" value="5">
                        <label class="form-check-label" for="inlineCheckbox3">5</label>
                    </div> 
                </div>
                         
                
                <button type="submit" class="btn btn-primary btn-lg OpButton col-md-1 align-self-center ">Enviar</button>
            </form>
        
    </div>

@endsection