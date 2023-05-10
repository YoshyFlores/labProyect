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
            <a class="navbar-brand" href="{{URL::to('/')}}">{{ __('Información-Página') }}</a>
            <a class="navbar-brand" href="{{URL::to('paciente')}}">{{ __('Pacientes') }}</a>
            
            
            
        </div>
        </nav>
        <br/>
    </head>
    
    <body>

    <div class="container-fluid text-center margin: 100px"  >
    <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" >
        <h3 style="color:#008B8B">Listado de pacientes</h3>
    </div>
    <div style="text-align:center;">
            <table class=" table " style=" border: 3px solid #7877e6; text-align:center"">
                <thead >
                <tr class = "mi-clase">

                    <th >#</th>
                    <th >Nombre</th>
                    <th></th>
                    <th >Edad</th>
                    <th></th>
                    <th >Enfermedad</th>
                    <th></th>

                    <th><a style="float:justify" href="{{ url('paciente/create') }}" class="btn btn-info">Nuevo Paciente</a></th>
                </tr>
                </thead>
                <tbody>
                @foreach($pacientes as $paciente)
                <tr class = "mi-clase">
                    <td >{{ $paciente->id }}</td>
                    <td >{{ $paciente->nombre }}</td>
                    <td></td>
                    <td >{{ $paciente->edad}}</td>
                    <td></td>
                    <td >{{ $paciente->enfermedad }}</td>
                    <td></td>

                    <td class="container-sm text-center" >
                        <form method="POST" action="{{ url('/paciente/'. $paciente->id) }}">
                        <a href="{{ url('/paciente/'. $paciente->id ) }}" class="btn btn-outline-success">Mostrar</a>
                        @csrf
                
                        <a href="{{ url('/paciente/'. $paciente->id . '/edit') }}" class="btn btn-outline-info">Editar</a>
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')" class="btn btn-outline-danger">
                        </form>
                    </td>
                </tr>
                
                @endforeach
                
                    </tr>
                    
                </tbody>
            </table>
            
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>

<style>
    table{
        margin: 100px;
        border: 3px solid #7877e6;
        background-color: #F0FFFF;
        
    /* centrar vertical y horizontalmente */
    position: absolute;
    top: 20%;
    left: -12%;
    }
    .container-fluid {
    width: 800px;

    /* centrar vertical y horizontalmente */
    position: absolute;
    top: 20%;
    left: 20%;
    
    }


</style>
<style>
    tr.mi-clase{
        border-bottom: 2px solid #7877e6;
        
    }
    body {
    height: 600px;
    background-image: url("https://static.vecteezy.com/system/resources/previews/006/262/479/non_2x/white-and-blue-tone-abstract-background-backdrop-for-presentation-design-for-website-concept-of-beauty-and-health-business-brochure-free-photo.jpg");
    background-size: cover;
    background-repeat:no-repeat;
    background-position: center center;
    }
</style>