@extends('layouts.layout')

@section('content')

<div>
    <div style="display: flex; justify-content: center; align-items: center;font-family: 'Bitter'">
        <h1>¿Cuál es el precio?</h1>
    </div>
    <div >
        <hr>
        
        <div class="shadow p-3 mb-5 bg-white rounded mx-auto" style="max-width: 400px;">
            <img src="{{ asset('IMG/post/Iconos/programador.png') }}" alt="Descripción de la imagen" class="d-block mx-auto" style="width: 80px;">
            <h4 class="text-center">Full Stack Developer</h4>
            <img src="{{ asset('IMG/post/Imagenes/imagess.png') }}" alt="Descripción de la imagen" class="d-block mx-auto" style="width: 150px;">
            <p style="font-family: 'Bitter'; color: #94928b; font-size: 18px;">
                -Prebootcamp (Asincrónico) <br>
                -Bootcamp (Sincrónico) <br>
                Clases extras  de inglés 
                para reforzar el idioma <br>
                -Orientación y acompañamiento
                en la búsqueda laboral <br>
                -Charlas de habilidades blandas 
                y Personal Branding
            </p>
            <hr>
            <p style="text-align: center; font-family: 'Bitter'; font-size: 17px; color: #94928b; padding-right: 10px; line-height: 40px;">
                100% Remoto - Duración: 5 meses
            </p>
            <hr>
            <div style="text-align: center;">
                <a href="https://ig.me/m/devden_academy" target="_blank" class="btn btn-primary" style="font-size: 18px; background-color: rgb(68, 15, 99);">Comprar</a>

            </div>
        </div>
        
    </div>

    
</div>




@endsection