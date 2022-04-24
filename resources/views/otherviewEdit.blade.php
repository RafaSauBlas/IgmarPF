<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
   

<style>

body {
    
		
	}
    .form-inline {
        display: inline-block;
    }
    
	.user{
		width: 46px;
		color: #FDFDFD;

	}

	.nav img {
		border-radius: 50%;
		width: 46px;
		height: 46px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
		color: #FDFDFD;

	}

	.navbar .navbar-brand {
		color: #FDFDFD;
		padding-left: 0;
		padding-right: 50px;
		font-family: 'Merienda One', sans-serif;

	}
	.navbar .navbar-brand i {
		font-size: 30px;
		margin-right: 5px;
	}
	.search-box {
        position: relative;
    }
    .search-box input {
		box-shadow: none;
        padding-right: 35px;
        border-radius: 3px !important;
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }

#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 950px;
  height: 515px;
  
 
}
/* #div{
  
		padding-left: 0;
		padding-right: 50px;
		font-family: 'Merienda One', sans-serif;

    background: #0E0F11;
} */

#login .container #login-row #login-column #login-box #login-form {
  padding: 40px;
}
#login .container #login-row #login-column #login-box #login-form  {
  margin-top: -15px;
}
@media (min-width: 1200px){
		.form-inline .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.form-inline {
			display: block;
			margin-bottom: 10px;
		}
		.input-group {
			width: 100%;
		}
	} 
    </style>
</head>
<body>
<!--     
<div id="div">
<h1>.</h1>

</div> -->

<nav class="navbar navbar-default">
	<div class="navbar-header ">
		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

    
    <!-- Collection of nav links, forms, and other content for toggling -->

    <div id="navbarCollapse" class="collapse navbar-collapse">
		{{-- <ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Services <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Web Development</a></li>
					<li><a href="#">Graphic Design</a></li>
					<li><a href="#">Digital Marketing</a></li>
				</ul>
			</li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul> --}}
       
<section class="vh-100 gradient-custom">


<div id="login">

<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
    <div id="login-column" class="col-md-6">
    <div id="login-box" class="col-md-12">
        <center>


@include('sweetalert::alert')

<form id="login-form" class="form" action="/EliminarToken" method="POST" class="d-none">

@csrf

@include('sweetalert::alert')


<div id="login">

<div class="container">
    <div class="row mt-3">
        <div class="col-6 offset-3">
            <div class="card">
            <h1> INGRESA TU TOCKEN</h1>
            <input type="hidden" id="typeEmailX" class="form-control form-control-lg" value="{{$ido}}" name="id">


                <div class="card-body">
				  {{-- <div class="form-group">
                       <input type="text" class="form-control" placeholder="token" id="name" name="user">
                  </div> --}}
                    <div class="form-group">
                        <textarea rows="5" cols="10" id="message" class="form-control" placeholder="Message" name="TokTok"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Editar</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




    </form>
