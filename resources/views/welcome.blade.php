@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="card text-center">
    <div class="card-header">
        <br/>
        <h1 style="background-color: #67A4AC;">¡Bienvenidos!</h1>
    </div>
    <div class="card-body" style="background-color: #8ECACC;">
        <h5 class="card-title">Página web de registro de pacientes</h5>
        <p class="card-text">En esta aplicación se podrá encontrar el registro de los pacientes de la clínica, 
        esta tendrá acceso al listado de los pacientes que han sido registrados, así mismo se presenta la opción de 
        editar el registro, mostrarlo y de igual forma eliminarlo.</p>
        <a href="{{ url('paciente') }}" class="btn btn-danger">{{ __('Regitros de pacientes') }}</a>
    </div>
    <marquee><div class="card-footer text-body-secondary">
        <h6>Clínica</h6>
    </div>
    </marquee>
    </div>
    <br/>
    <center><img src="https://d100mj7v0l85u5.cloudfront.net/s3fs-public/Hospital-en-Estados-Unidos-reduce-tasas-de-reingreso-de-pacientes-gr1b.jpg"></center>
<br/>
<br/>
</body>
</html>
<style>
img{
    
    width: 550px;
    height:350px;
    top: 20%;
    left: -12%;
    }
    body {
    height: 800px;
    background-image: url("https://static.vecteezy.com/system/resources/previews/006/262/479/non_2x/white-and-blue-tone-abstract-background-backdrop-for-presentation-design-for-website-concept-of-beauty-and-health-business-brochure-free-photo.jpg");
    background-size: cover;
    background-repeat:no-repeat;
    background-position: center center;
    }
</style>
@endsection