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
    <nav class="navbar navbar-default navbartop">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand hidden-xs" href="#">
            <img alt="Brand" src="...">
          </a>
        </div>
        <center><p class="text-muted menutop">Sistema de Integración de Proyectos</p></center>
      </div>
    </nav>

    <!-- Main body -->
<div class="container">
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="media-left">
            <img src="img/investigacion2.jpg " alt="Investigacion"class="img-responsive portadalogo hidden-xs hidden-sm" >
              <div class="panelfooter">
                <center><h3 class="center">Ven y forma parte de nuestro equipo!</h3></center>
                  <p style="padding-bottom:50px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, doloremque.</p>
              </div>
          </div>
        </div><!--Acaba la primera (1/2) division de grid-->


        <div class="col-sm-10 col-md-5  col-md-offset-1 col-lg-4 col-lg-offset-1 pull-top">

          <img src="img/logo-fundacion.png" alt="Logo" class="img-responsive pull-right">
            
              
            <div class="panel-heading">
                <div class="panel-title formheadingtitle" >Crear una cuenta</div>
                {{HTML::link('login','Volver al login', array('class' => 'formheading2 text-success'))}}
            </div>


            <div class="panel-body ">
                <br>
              @if (Session::has('message_fail'))
                <div class="alert alert-danger"><span class="fa fa-exclamation-triangle"></span>{{ Session::get('message_fail') }}</div>
              @endif

                <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'account.create',
                  'class' => 'form-horizontal', 
                  'role' => 'form')) }}

                <!-- nombre -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder' => 'Nombre(s)')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellidoP', Input::old('apellidoP'), array('class' => 'form-control', 'placeholder' => 'Apellido Paterno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger">  {{ $errors->first('apellidoP') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellidoM', Input::old('apellidoM'), array('class' => 'form-control', 'placeholder' => 'Apellido Materno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger">  {{ $errors->first('apellidoM') }}</span>
                
       
                <!-- Email -->
                <div class="input-group separetedinput" >
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico')) }}
                </div>
                <span class="bg-danger">  {{ $errors->first('email') }}</span>

                <!-- Perfil -->
                <div class="input-group separetedinput" >
    
                {{ Form::select('perfil',array(
                  '1' =>'Usuario',
                  '2' => 'Investigador',
                  '3' => 'Administrador'
                  ),'Usuario') }}
                </div>
                <span class="bg-danger">  {{ $errors->first('perfil') }}</span>
                

                <!-- Password -->
                <div class="input-group separetedinput" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
                       
                </div>
                <span class="bg-danger">  {{ $errors->first('password') }}</span>

                <br>
                <p>Acepto los <a href="" class="" data-toggle="modal" data-target="#myModal">Términos y Condiciones</a>*</p> 
                    

                <!-- Login button -->
                <div class="col-sm-5 col-lg-6 col-lg-offset-3">
                    <div class="row">
                        {{ Form::submit('Crear una cuenta', array('class' => 'btn btn-primary btn-block col-lg-3'))}}
                        {{ Form::close() }}
                    </div>
                </div>
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
    
      
      <!--Modal-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header modal-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Terminos y Condiciones</h4>
              </div>
              <div class="modal-body">
                
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi illum, illo ad nobis beatae quisquam tempore iusto quaerat autem voluptate deleniti facilis rem magnam, itaque vero accusantium, esse ut, ratione animi. Sint iusto, voluptate! Maiores consequuntur magni reprehenderit eligendi reiciendis autem, molestiae culpa temporibus velit aliquid, esse quisquam qui nobis?


              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
              </div>
             
            </div>
          </div>
        </div>
        
      
    
    
       

    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/npm.js')}}
    {{ HTML::script('js/main.js') }}

  </body>
</html>