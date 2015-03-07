<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Test</title> 
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

    <!-- Main body -->
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="media-left">
            <img src="http://placehold.it/752x480" alt="Investigacion"class="img-responsive portadalogo hidden-xs hidden-sm" >
              <div class="panelfooter">
                <center><h3 class="center">Ven y forma parte de nuestro equipo!</h3></center>
                  <p style="padding-bottom:50px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, doloremque.</p>
              </div>
          </div>
        </div><!--Acaba la primera (1/2) division de grid-->


        <div class="col-sm-10 col-md-5  col-md-offset-1 col-lg-4 col-lg-offset-1 pull-top">

          <img src="img/logo-fundacion.png" alt="Logo" class="img-responsive pull-right">
            <h4 class="formtitle">Cuenta Markoptic </h4>
           
              
              <div class="panel-heading">
                <div class="panel-title formheadingtitle" >Recuperar Contraseña</div>
              </div>


          <div class="panel-body ">

              <center><div id="mensaje"></div></center>
              @if(Session::has('message'))
              <p class="alert alert-info">{{ Session::get('message') }}</p>
              @endif
              
            

                <!--Formulario-->
                {{ Form::open(array('route' => array('account.update', $token))) }}

                <!-- Name -->

                <p>{{ Form::label('email', 'email') }}
                {{ Form::email('email',Input::old('email')) }}</p>
                <span class="bg-danger" >  {{ $errors->first('email') }}</span>
               
                <p>{{ Form::label('password', 'password') }}
                {{ Form::password('password') }}</p>
                <span class="bg-danger" id="_password">  {{ $errors->first('password') }}</span>
               
                <p>{{ Form::label('password_confirmation', 'password confirm') }}
                {{ Form::password('password_confirmation') }}</p>
                 <span class="bg-danger" id="_password">  {{ $errors->first('password_confirmation') }}</span>
               
                {{ Form::hidden('token', $token) }}
               
                <p>{{ Form::submit('Submit') }}</p>

                {{ Form::close() }}
                              
               
                   
                

               
               
                
          </div><!--Termina el panel body-->
        </div><!--Acaba la segunda (2/2)division de grid-->
           
                
      </div><!--Termina el row-->
    </div> <!--Termina el container-->
    
  
    
    <nav class="navbar navbar-default nospace " style="margin-top:115px;">
      <footer>
        <div class="well-sm space-sm  ">
          <center class="text-muted">
          <a href="">Privacidad </a>
          / 
          <a href="">Contáctanos </a>
          / 
          <a href="">Avisos y Condiciones</a>
          <span class="pull-right text-muted hidden-xs">©Markoptic 2015</span>
          </center>
          
        </div>
      </footer>
    </nav>
  
      
        
     
    
    
       

    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/npm.js')}}
    {{ HTML::script('js/main.js') }}




  </body>
</html>