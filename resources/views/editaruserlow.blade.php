<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('css/login.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"/>
  <!-- MDB -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"/>
  <title>Token de validación</title>
  <style>
    .box {
      background: #D84614; 
    }
    body{
      margin: 0;
      padding: 0;
      height: 100vh;
    }
  </style>
</head>

<body>

<div class="box">
  <section class="vh-100 gradient-custom">
        <div id="login">
        <h3 class="text-center text-white pt-5">Inserta tu token de validación</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/tokenUserLow" method="POST" class="d-none">
                        @csrf
                          <input type="hidden" id="typeEmailX" class="form-control form-control-lg" value="{{$ido}}" name="id">
                            <h3 class="text-center text-white">Token de validación</h3>
                            <div class="form-group">
                                <label for="username" class="text-white">Inserta tu token de validación:</label><br>
								<input type="text" id="message" class="form-control form-control-lg" name="editarUserLowData" required/>
                            </div>
                            <span style="color:red;">@error('code')
                              {{$message}}
                              @enderror
                            </span><br>
                    <button type="submit" class="btn btn-white btn-md">Confirmar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>
</body>
</html>
