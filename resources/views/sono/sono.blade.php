@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')
    <div id="display"> 
        <h1>sono</h1>
        
            <form  action="{{route('user.sono.store',auth()->id())}}" method="POST" id="grayBox" enctype="multipart/form-data">
                @csrf
                
                <h3>inicio:</h3>
                <input type="time" name="inicio"  >
                                
                <h3>fim:</h3>
                <input  type="time" name="fim" >

                <h3>avaliação:</h3>
                <div  id="avaliacao" >
                    <div class="form-check form-check-inline " style="width: 100px; height: 400px"> <!-- Adicionando largura personalizada -->
                        <input class="form-check-input custom-checkbox" type="radio" id="inlineCheckbox1" name="avaliacao" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline " style="width: 100px; height: 400px">
                        <input class="form-check-input custom-checkbox" type="radio" id="inlineCheckbox2" name="avaliacao" value="2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline " style="width: 100px; height: 400px">
                        <input class="form-check-input custom-checkbox" type="radio" id="inlineCheckbox3" name="avaliacao" value="3">
                        <label class="form-check-label" for="inlineCheckbox3">3</label>
                    </div>  
                    <div class="form-check form-check-inline " style="width: 100px; height: 400px">
                        <input class="form-check-input custom-checkbox" type="radio" id="inlineCheckbox4" name="avaliacao" value="4">
                        <label class="form-check-label" for="inlineCheckbox3">4</label>
                    </div> 
                    <div class="form-check form-check-inline " style="width: 100px; height: 400px">
                        <input class="form-check-input custom-checkbox" type="radio" id="inlineCheckbox5" name="avaliacao" value="5">
                        <label class="form-check-label" for="inlineCheckbox3">5</label>
                    </div> 
                </div>
                         
                <input type="submit"  id="OpButton" value="enviar">
            
            </form>
        
    </div>

@endsection