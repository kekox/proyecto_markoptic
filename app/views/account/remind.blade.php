<!DOCTYPE html>
<html class="schema-gray">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Password Reset</title> 
  {{ HTML::style('css/bootstrap.css') }}
  {{ HTML::style('css/style.css') }}
  {{ HTML::style('css/menu.css') }}
  {{ HTML::style('css/login.css') }}
  {{ HTML::script('js/jquery.js')}}
  {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}
  <!--Imagenes con fondo claro-->
  {{HTML::style('http://fonts.googleapis.com/css?family=Montserrat:400,700')}}
  <!--Imagenes con fondo medio oscuro-->
  {{HTML::style('http://fonts.googleapis.com/css?family=Bitter:400,700,400italic')}}
  <!-- Para texto de parrafo-->
  {{HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400')}}
</head>
<body>
	
	<!--Nav-->
    <nav class="navbar navbar-default navbartop ">
      <div class="container-fluid ">
        <div class="navbar-header hidden-xs">
        </div>
        <center><p class="text-muted menutop">Sistema de Integración de Proyectos</p></center>
      </div>
    </nav>

	<!--Content-->
	<div class="jumbotron" style="margin-bottom:-30px; margin-top:-20px; ">
		<div class="container" style="background-color:white; border: #e0e0e0 1px solid; ">
			<br>
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1"><center>
				<h3 class="alert alert-success "><span class="glyphicon glyphicon-wrench" ></span> Password Recovery</h3>
				</center></div>
				<hr>
			</div>	



			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">
					<div class="well" style="margin-top:-20px;">

							<center><p>Ingrese su Correo electronico </p></center>
						<div class="col-lg-12">
							<!--Formulario-->
							<div class="col-lg-8 col-lg-offset-2">
							@if(Session::has('message'))
							<center><p class="alert alert-warning">{{ Session::get('message') }}</p></center>
							@endif
							</div>
							 {{ Form::open(array(
			                	'url' => 'account/reset',
			                	'class' => 'form-horizontal', 
			                	'role' => 'form')) }}

							<!-- Email -->
							<div class="col-lg-8 col-lg-offset-2">
				                <div class="input-group" >
				                	<span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-envelope"></i></span>
				                	{{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico','aria-describedby'=>'sizing-addon2')) }}
								</div>
								<span class="bg-danger">  {{ $errors->first('email') }}</span>
							</div>
				                

			                <!-- Login button -->
			                <div class="col-sm-5 col-lg-6 col-lg-offset-3">
			                 	<br>
			                        {{ Form::submit('Recuperar Contraseña', array('class' => 'btn btn-primary btn-block col-lg-3'))}} 
			                    <br>
			                </div>
							{{ Form::close() }}

						</div>
						<br>
						<br>
						<br>
						<br>
						<br>
					</div><!-- /well -->
						<br>
				</div>
			</div>	


		</div>
		<br>
		<br>
		<footer class="text-muted "><center>© 2015 Markoptic</center></footer>
	</div>

	{{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/npm.js')}}
    {{ HTML::script('js/main.js') }}
</body>
</html>