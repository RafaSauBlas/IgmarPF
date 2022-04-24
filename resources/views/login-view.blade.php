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
    <title>Iniciar Sesión</title>
    <style>
        
        .box {
     background: #D84614       
  /* background: linear-gradient(to right, #000046, #1cb5e0);   */
}

body {
  
  margin: 0;
  padding: 0;
  height: 100vh;
}

#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;


}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
    </style>
</head>
<body>
<div class="box">
    @include('sweetalert::alert')
    <div id="login">
        <br>
        <br>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login" method="POST">
                        @csrf
                            <h3 class="text-center text-white">Bienvenido</h3>
                           <center> <img src="perfil.png" height="100" width="100" > </center>

                            <div class="form-group">
                               
                                    

                                <label for="username" class="text-white" >Correo Electronico:</label><br>
                                <input type="email" placeholder="Correo Electronico:" id="typeEmailX" class="form-control form-control-lg" name="email" required>
                            </div>
                            <span style="color:red;">@error('email')
                        {{$message}}
                        @enderror
                    </span>
                            <div class="form-group">
                                <label for="password" class="text-white">Contraseña:</label><br>
                                <input class="form-control" placeholder="Contraseña"  type="password" id="typePasswordX" name="password" required>
                            </div>
                            <span style="color:red;">@error('password')
                        {{$message}}
                        @enderror
                    </span>
                            <div class="form-group">
                                <br>
                                <button type="submit" name="submit" class="btn btn-white btn-md">Entrar</button>
                            </div>

                            <div id="register-link" class="text-right">
                                <a href="register" class="text-white">Registrate aquí</a>
                            </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<br><br><br>
      </section>

<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>
</body>
</html>
