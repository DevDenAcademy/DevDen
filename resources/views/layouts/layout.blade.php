<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devden Academy</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/scripts.js'])
    
</head>
<body>
    <!-- aqui se inicia el menú-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(68, 15, 99);">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}" style="color: #FFDB58; font-weight: bold; font-size: 35px;">DevDen Academy</a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="bootcampsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 22px;">
                            Bootcamps
                        </a>
                        <div class="dropdown-menu" aria-labelledby="bootcampsDropdown">
                            <a class="dropdown-item" href="#bootcamplink">Full Stack Developer</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('precios.mostrar') }}" style="font-size: 22px;">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contacto.mostrar') }}" style="font-size: 22px;">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://instagram.com/devden_academy?igshid=MzRlODBiNWFlZA==" class="nav-link text-white" style="font-size: 22px;"><img src="{{ asset('IMG/Post/Iconos/instagram.png') }}" alt="Instagram" style="width: 24px;"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/profile.php?id=61550068195611&sk=followers" class="nav-link text-white" style="font-size: 22px;"><img src="{{ asset('IMG/Post/Iconos/facebook.png') }}" alt="Facebook" style="width: 24px;"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.linkedin.com/company/devden-academy/" class="nav-link text-white" style="font-size: 22px;"><img src="{{ asset('IMG/Post/Iconos/linkedin.png') }}" alt="LinkedIn" style="width: 28px;"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

      <!-- Icono flotante con imagen personalizada -->
  <div class="floating-icon">
    <a href="https://wa.me/64162727" target="_blank">
      <img src="{{ asset('IMG/post/Iconos/whatsapp.png') }}" alt="">
    </a>
  </div>

    @yield('content')
    <footer class="text-white text-center py-3" style="background-color: rgb(68, 15, 99);">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-6 col-lg-4">
                    <h6 style="color: #FFDB58;">Bootcamps</h6>
                    <p>Full stack developers</p>
                    <p>© 2023 Devden Academy San José, Costa Rica</p>
                </div>
                <div class="col-md-6 col-lg-4 mt-4 mt-md-0">
                    <h6 style="color: #FFDB58;">Compañía</h6>
                    <a href="#seccion-info1" style="color: #ffffff; text-decoration: none;">¿Por qué DevDen Academy?</a>
                    <a href="{{ route('contacto.mostrar') }}" style="color: #ffffff; text-decoration: none;">Contacto</a>
                    <a href="" style="color: #ffffff; text-decoration: none;">Inicio</a>
                </div>
            </div>
        </div>
    </footer>
    
    
    <!-- Include Bootstrap JS (jQuery and Popper.js required) -->
    <script hrf="{{ asset('js/scripts.js') }}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




