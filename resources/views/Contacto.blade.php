@extends('layouts.layout')


@section('content')

<!-- se realiza el form de contacto -->
<div class="d-flex justify-content-center align-items-center bg bg-image" style="background-image: url('{{ asset('IMG/Post/Imagenes/fondo_contacto.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center center; min-height: 100vh;">
    <div class="container" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="text-center text-white">
            <h1>Comuníquese con nosotros.</h1>
            <p>
                Recuerde que también pueden hacerlo por medio de nuestras redes sociales.
            </p>
        </div>
        <hr>
        
        <form class="text-center" action="https://formsubmit.co/devden.academy@gmail.com" method="POST" id="miFormulario">

            @csrf
        
            <div class="form-group d-flex justify-content-center mb-4">
                <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Ingresa tu nombre" required>
            </div>
        
            <div class="form-group d-flex justify-content-center mb-4">
                <input type="email" class="form-control" id="Gmail" name="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
        
            <div class="form-group d-flex justify-content-center mb-4">
                <textarea class="form-control" id="Mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí." required></textarea>
            </div>
        
            <div class="d-flex justify-content-center">
                <button id="enviar-boton" type="button" class="btn btn-purple">Enviar</button>
            </div>
            
            <input type="hidden" name="_next" value="{{ route('contacto.mostrar') }}">
            <input type="hidden" name="_captcha" value="false">
        </form>
    </div>
    
</div>


@endsection