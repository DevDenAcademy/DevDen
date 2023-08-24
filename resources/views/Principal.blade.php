@extends('layouts.layout')

@section('content')

    <!-- Primera parte incio-->
    <div class="d-flex justify-content-center align-items-center bg bg-image" style="background-image: url('{{ asset('IMG/Post/Imagenes/fondo4.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center center; min-height: 100vh; margin-bottom: 100px;">
        <div class="text-center" style="position: relative; z-index: 1;">
            <h1 class="animated-heading" style="font-family: 'Bitter', serif; color: #FFDB58;">“Getting you ready for the hunt”</h1>
            <button id="boton-saber-mas" style="background-color: rgba(230, 189, 55, 0.5); color: white; border: none; padding: 10px 20px; border-radius: 5px; font-family: 'Bitter', serif; font-size: 18px; margin-top: 20px;">
                <a href="#seccion-info1" style="text-decoration: none; color: white;">Saber más</a>
            </button>
            
        </div>
    </div>

    <!-- Segunda parte-->
    <div id="segunda-parte" class="hola" style="position: relative; background-color: white; margin-bottom: 100px;">
        <h1 id="seccion-info1" style="font-family: 'Bitter', serif; color: #969288; text-align: center;">¿Por qué Devden Academy?</h1>
    </div>


    <div class="d-flex justify-content-between flex-wrap" style="margin-bottom: 100px;">
      <div class="col-md-4" style="text-align: center;">
          <img src="{{ asset('IMG/post/Iconos/gente-junta.png') }}" alt="Descripción de la imagen" class="img-fluid">
          <p class="falling-text" style="font-family: 'Bitter', serif; font-size: 18px; color: #94928b; text-align: left;">
              En Deven Academy, tiene la oportunidad de participar en el aprendizaje junto a compañeros apasionados y de ideas afines dentro de un entorno inmersivo. Únase a una clase dinámica de estudiantes que comparten su entusiasmo por aprender.
          </p>
      </div>
      
      <div class="col-md-4" style="text-align: center;">
          <img src="{{ asset('IMG/post/Iconos/gorra.png') }}" alt="Descripción de la imagen" class="img-fluid">
          <p class="falling-text" style="font-family: 'Bitter', serif; font-size: 18px; color: #94928b; text-align: left;">
              Si bien reconocemos la conveniencia del aprendizaje remoto, hay algo realmente especial en tenerlo aquí con nosotros. En nuestro compromiso de enseñar a los estudiantes del programa de forma remota, hemos introducido nuestras tarifas de matrícula de Bootcamps más asequibles para cursos totalmente remotos.
          </p>
      </div>
      
      <div class="col-md-4" style="text-align: center;">
          <img src="{{ asset('IMG/post/Iconos/trabajar-desde-casa.png') }}" alt="Descripción de la imagen" class="img-fluid">
          <p class="falling-text" style="font-family: 'Bitter', serif; font-size: 18px; color: #94928b; text-align: left;">
              Embárquese en su viaje por la industria tecnológica equipado con conocimientos esenciales a través del plan de estudios de Devden Academy diseñado para el avance profesional. Nuestro plan de estudios no solo imparte habilidades relevantes, sino que también lo ayuda a forjar conexiones valiosas dentro de la industria.
          </p>
      </div>
  </div>

    <div style="text-align: center;" id="">
        <a href="{{ route('contacto.mostrar') }}" style="font-family: 'Bitter'; display: inline-block; width: 180px; text-decoration: none; background-color: rgb(68, 15, 99); color: white; padding: 5px 10px; border-radius: 3px; font-size: 18px; margin-bottom: 100px;">Pedir información</a>
    </div>

        <!-- Tercera parte mostrar Bootcamps-->
    <div class="text-center" style="font-family: 'Bitter', serif; color: #000000; margin-bottom: 100px;">
        <h1 id="bootcamplink">Bootcamps</h1>
    </div>
    
    <div class="d-md-flex justify-content-center" style="margin-bottom: 250px;">
        <div class="shadow p-3 mb-5 bg-white rounded mx-2 mx-md-4" style="max-width: 450px; width: 100%;">
            <img src="{{ asset('IMG/post/Iconos/programador.png') }}" alt="Descripción de la imagen" class="d-block mx-auto" style="width: 80px;">
            <h4 class="text-center" style="font-family: 'Bitter'; color: #000000";>Full Stack Developer</h4>
            <p style="font-family: 'Bitter'; color: #94928b; font-size: 18px;">
                La carrera de Desarrollador Web Full Stack de DevDen Bootcamp te brindará las bases para ingresar al mundo laboral. Algunas de las tecnologías que aprenderás incluyen: JavaScript, CSS, ReactJS, NodeJS, SQL, Sequelize, TypeScript y Git.
            </p>
            <hr>
            <p style="text-align: center; font-family: 'Bitter'; font-size: 17px; color: #94928b; padding-right: 10px; line-height: 40px;">
                100% Remoto - Duración: 5 meses
            </p>
            <hr>
            <div style="text-align: center;">
                <a href="URL_DE_LA_PAGINA_DESTINO" class="btn btn-primary" style="font-size: 16px; background-color: rgb(68, 15, 99);">Descargar información</a>

                <a href="{{ route('precios.mostrar') }}" class="btn btn-primary" style="font-size: 18px; background-color: rgb(68, 15, 99);">Iniciar</a>

            </div>
        </div>
    
        <div class="shadow p-3 mb-5 bg-white rounded mx-2 mx-md-4 mt-4" style="max-width: 450px; width: 100%;">
            <h4>¿Por qué impartimos esta carrera?</h4>
            <p style="color: #94928b; font-family: 'Bitter'; font-size: 18px;">Este curso aspira a inspirar a nuevos desarrolladores, brindándoles conocimientos para generar ideas creativas y sólidas soluciones técnicas en un mundo digital cambiante. Permite a los estudiantes construir sobre una base sólida y liberar su potencial en un entorno tecnológico en constante evolución.</p>
        </div>
    </div>
    
    <!-- Esta es la seccion (iconos de las tecnologias) -->
    <div class="container2">
        <h2>Aprende las mejores tecnologías con nosotros</h2>
        <p>Para una buena introducción al mundo de la programación.</p>
        <div class="icon-container">
            <img src="{{ asset('IMG/post/Iconos/html-5.png') }}" alt="Descripción de la imagen">
            <img src="{{ asset('IMG/post/Iconos/css-3.png') }}" alt="Descripción de la imagen">
            <img src="{{ asset('IMG/post/Iconos/js.png') }}" alt="Descripción de la imagen">
            <img src="{{ asset('IMG/post/Iconos/nodejs.png') }}" alt="Descripción de la imagen">
            <img src="{{ asset('IMG/post/Iconos/react.png') }}" alt="Descripción de la imagen">
            <img src="{{ asset('IMG/post/Iconos/typescript.png') }}" alt="Descripción de la imagen">
            <img src="{{ asset('IMG/post/Iconos/servidor-sql.png') }}" alt="Descripción de la imagen">
            <img src="{{ asset('IMG/post/Iconos/git.png') }}" alt="Descripción de la imagen">
        </div>
        <hr>
    </div>
    
    <!-- seccion donde se habla sobre construyendo la mentalidad de un desarrollador -->
    <div class="bg bg-image" style="background-image: url('{{ asset('IMG/Post/Imagenes/image.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center center; min-height: 130vh;">
        <br>
        <h2 style="text-align: center; font-family: 'Bitter'; margin-bottom: 40px;">Construyendo la mentalidad de un desarrollador</h2>

        <div class="d-md-flex justify-content-center" style="margin-bottom: 60px;">
            <div class="mx-auto mx-md-0 mb-4 mb-md-0" style="max-width: 600px; padding: 20px; background-color: #f5f5f5; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
              <p style="font-family: 'Bitter'; font-size: 18px; text-align: center;">
                Además de dominar las habilidades técnicas, nuestros estudiantes están equipados con la capacidad de abordar y resolver problemas como lo hacen los desarrolladores. Esto incluye dividir problemas complejos en componentes más pequeños. Al finalizar el curso, los estudiantes adquieren la confianza y las habilidades para aprender de forma independiente nuevos lenguajes o marcos de programación, una competencia vital en el vertiginoso mundo del desarrollo web. Dominar las habilidades de resolución de problemas de un desarrollador, nuestros estudiantes no solo aprenden habilidades técnicas, sino que también desarrollan la capacidad de abordar desafíos como un desarrollador, deconstruyendo problemas complejos en partes manejables.
              </p>
              <div class="mx-auto" style="max-width: 500px; margin-top: 20px;">
                <img src="{{ asset('IMG/post/Imagenes/fondo-desarrollo.jpg') }}" alt="Descripción de la imagen" style="width: 100%; border-radius: 10px;">
              </div>
            </div>
          </div>
          
          
          
        
        <!-- Se realizan las preguntas frecuentes -->
        <div style="text-align: center;  ">
            <br>
            <div class="d-flex justify-content-center align-items-center ">
                <div class="accordion-container">
                  <h2 style="text-align: center;">Preguntas Frecuentes</h2>
              
                  <button class="accordion">
                    ¿Qué habilidades específicas puedo aprender en este Bootcamp? <img src="{{ asset('IMG/post/Iconos/flecha-hacia-abajo.png') }}" alt="Flecha hacia abajo" style="width: 20px; height: 20px;">
                  </button>
                  <div class="panel">
                    <p>Respuesta </p>
                  </div>
              
                  <button class="accordion">
                    ¿Qué tipo de apoyo y recursos brinda el bootcamp, como mentores, tutores o recursos de aprendizaje? <img src="{{ asset('IMG/post/Iconos/flecha-hacia-abajo.png') }}" alt="Flecha hacia abajo" style="width: 20px; height: 20px;">
                  </button>
                  <div class="panel">
                    <p>Respuesta </p>
                  </div>

                  <button class="accordion">
                    ¿Hay opciones de financiamiento, becas o planes de pago disponibles?<img src="{{ asset('IMG/post/Iconos/flecha-hacia-abajo.png') }}" alt="Flecha hacia abajo" style="width: 20px; height: 20px;">
                  </button>
                  <div class="panel">
                    <p>Respuesta </p>
                  </div>

                  <button class="accordion">
                    ¿Qué tecnologías o herramientas se utilizan en el bootcamp? ¿Son relevantes en el mercado laboral? <img src="{{ asset('IMG/post/Iconos/flecha-hacia-abajo.png') }}" alt="Flecha hacia abajo" style="width: 20px; height: 20px;">
                  </button>
                  <div class="panel">
                    <p>Respuesta </p>
                  </div>
                </div>
              </div>
        </div>    
    </div>
    
    
    
@endsection









