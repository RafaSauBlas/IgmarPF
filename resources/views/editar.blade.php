<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/login.css') }}">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
  rel="stylesheet"
/>


<style>

    body{
        background: #D84614;
        color: #FFFFFF;

    }

</style>

<body>

@include('sweetalert::alert')

<form id="login-form" class="form" action="/Editar" method="POST">
@method("PUT")
@csrf

    <div id="login">

<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
    <div id="login-column" class="col-md-6">
    <div id="login-box" class="col-md-12">
        <center>
<br>
<br>

        <div class="form-group">
            <label for="nombre" class="text">Nombre:</label><br>
            <input type="hidden" id="typeEmailX" class="form-control form-control-lg" value="{{$ido}}" name="id">
            <input type="text" id="typeEmailX" class="form-control form-control-lg" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="username" class="text">Correo Electronico:</label><br>
            <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" required>
        </div>
        <span style="color:red;">@error('email')
        {{$message}}
        @enderror
    </span>
        <div class="form-group">
            <label for="password" class="text">Contraseña:</label><br>
            <input class="form-control" type="password" id="typePasswordX" name="password" required>
        </div>
        <span style="color:red;">@error('password')
        {{$message}}
        @enderror
    </span>
        <div class="form-group">
            <label for="password" class="text">Confirmar contraseña:</label><br>
            <input type="password" id="typePasswordX" class="form-control" name="password_confirmation" required/>
        </div>
<br>
        <div class="form-group">
        <!-- The second value will be selected initially -->
        <select name="select" class="form-control form-control-lg" aria-label=".form-select-lg example">
            <option selected>Eligue un privilegio</option>
            <option value="1">Bajo privilegio</option>
            <option value="2">Medio Privilegio</option>
            <option value="3">Alto Privilegio</option>
          </select>
</div>


        <span style="color:red;">@error('password')
        {{$message}}
        @enderror
    </span>

    <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>

</div>


    </form>
    </center>
</body>