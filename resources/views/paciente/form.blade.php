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
            </div>
            </div>
        </div>
        </nav>
        <br/>

    </head>
    <body>
    <div class="card abs-center" style="width: 20rem;">
        <div class="card-header text-center">
            <h4>Datos paciente</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nombre:
                <input type="text" name="nombre" id="nombre" value="{{ isset($paciente)?$paciente->nombre:'' }}" /><br />
                @error('nombre')
                    <div class="error-message">{{$message}}</di><br />
                @enderror</li>
            <li class="list-group-item">Edad:
                <input type="number" name="edad" id="edad" value="{{ isset($paciente)?$paciente->edad:'' }}" /><br />
                @error('edad')
                    <div class="error-message">{{$message}}</di><br />
                @enderror</li>
            <li class="list-group-item">Enfermedad:
                <input type="text" name="enfermedad" id="enfermedad" value="{{ isset($paciente)?$paciente->enfermedad:'' }}"><br />
                @error('enfermedad')
                    <div class="error-message">{{$message}}</di><br />
                @enderror</li>

            
            <li class="list-group-item text-center"><button class="btn btn-primary" type="submit">Guardar</button></li>
        </ul>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    </body>
    </html>

    <style>
        .error-message{
            color:red
        }
        .abs-center {
        margin: 100px;
        border: 3px solid #7877e6;
        background-color: #F0FFFF;
        position: absolute;
        top: 5%;
        left: 30%;}

    </style>