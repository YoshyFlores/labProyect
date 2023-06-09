<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <nav class="navbar bg-dark" data-bs-theme="dark">

        <div class="container">
            <a class="navbar-brand" href="{{URL::to('paciente')}}">{{ __('Pacientes') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opciones</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="btn btn-info" href="{{URL::to('paciente')}}">{{ __('Pacientes') }}</a>
                </li><br/>
                <li class="nav-item">
                <a style="float:justify" href="{{ url('paciente/create') }}" class="btn btn-warning">Nuevo Registro</a>
                </li><br/>
                
    
            </div>
            </div>
        </div>
        </nav>
        <br/>
    </head>
    
    <body>

    <div class="container-fluid text-center margin: 100px"  >
    <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" >
        <h3 style="color:#008B8B"> Datos del paciente {{$paciente->nombre}}</h3>
    </div>
    <br/>
    <table class=" table " style=" border: 1px solid #7877e6; text-align:center"">
                <thead >
                <tr class = "mi-clase">
                <h4>Detalles del paciente</h4><br/><br/><br/>
                <td ><h6># {{ $paciente->id }}</h6></td><br/></tr>
                <tr><td><h6>Nombre: {{$paciente->nombre}}</h6></td><br/></tr>
                <tr><td><h6>Edad: {{$paciente->edad}}</h6></td></tr>
                <tr><td><h6>Peso: {{$paciente->enfermedad}}</h6></td></tr>

    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>

<style>
    table{
        margin: 80px;
        border: 1px solid #7877e6;
        background-color: #87CEFA;
        
    /* centrar vertical y horizontalmente */
    position: absolute;
    top: 20%;
    left: -12%;
    }
    .container-fluid {
    width: 700px;

    /* centrar vertical y horizontalmente */
    position: absolute;
    top: 20%;
    left: 20%;
    
    }
    body {
    height: 600px;
    background-image: url("https://static.vecteezy.com/system/resources/previews/006/262/479/non_2x/white-and-blue-tone-abstract-background-backdrop-for-presentation-design-for-website-concept-of-beauty-and-health-business-brochure-free-photo.jpg");
    background-size: cover;
    background-repeat:no-repeat;
    background-position: center center;
    }

</style>
<style>
    tr.mi-clase{
        border-bottom: 1px solid #7877e6;
        
    }
</style>