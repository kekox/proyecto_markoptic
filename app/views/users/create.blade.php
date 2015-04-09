<!DOCTYPE html>
<html>
<!--Head-->
@include('includes.head')

  <body>   

  <!--Nav-->
  @include('includes.headerStatic')

  <!-- Main body -->
  <div class="container" id="CreatePage">
    <div class="row">
        <div id="panel-left">
          <div class="col-lg-6 col-md-6 col-sm-12 ">
            <div class="media-left">
              <img src="img/investigacion2.jpg" alt="Investigacion"class="img-responsive portadalogo hidden-xs hidden-sm" >
                <div class="panel-footer">
                  <h3 >Ven y forma parte de nuestro equipo!</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, doloremque.</p>
                </div>
            </div>
          </div><!--Acaba la primera (1/2) division de grid-->
        </div>

        <div id="panel-right">
        <div class="col-sm-10 col-md-5  col-md-offset-1 col-lg-4 col-lg-offset-1">

          <img src="img/logo-fundacion.png" alt="Logo" class="img-responsive pull-right">            
            <div class="panel-heading">
                <h3>Crear una cuenta</h3>
                {{HTML::link('login','Volver al login', array('class' => 'formheading2 text-success'))}}
            </div>


            <div class="panel-body ">
                
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
                <span class="display-errors">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      {{ Form::text('apellidoP', Input::old('apellidoP'), array('class' => 'form-control', 'placeholder' => 'Apellido Paterno')) }}
                </div>
                 <!--Errores-->
                <span class="display-errors">  {{ $errors->first('apellidoP') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      {{ Form::text('apellidoM', Input::old('apellidoM'), array('class' => 'form-control', 'placeholder' => 'Apellido Materno')) }}
                </div>
                 <!--Errores-->
                <span class="display-errors">  {{ $errors->first('apellidoM') }}</span>
                
       
                <!-- Email -->
                <div class="input-group separetedinput" >
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico')) }}
                </div>
                <!--Errores-->
                <span class="display-errors">  {{ $errors->first('email') }}</span>

                <!-- Perfil -->
                <div class="input-group separetedinput" >
    
                {{ Form::select('perfil',array(
                  '1' =>'Usuario',
                  '2' => 'Investigador',
                  '3' => 'Administrador'
                  ),'Usuario') }}
                </div>
                <span class="display-errors">  {{ $errors->first('perfil') }}</span>
                

                <!-- Password -->
                <div class="input-group separetedinput" >
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
                       
                </div>
                <span class="display-errors">  {{ $errors->first('password') }}</span>

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
        </div>
                     
    </div><!--Termina el row-->
  </div> <!--Termina el container-->
    
  <!--Footer-->
  @include('includes.footerStatic')
     
  <!--Modal-->
  @include('includes.Modales.create')
        
  <!--Scrips-->
  @include('includes.script')
  
  </body>
</html>