<!DOCTYPE html>
<html>

<!--Head-->
  @include('includes.head')

  <body>   

    <!--Nav-->
    @include('includes.headerStatic')

    <!-- Main body -->
    <div id="LoginPage" >
    <div class="container " >
              <div class="row">
                <div id="panel-left">
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                  <div class="media-left">
                    <img src="img/investigacion.jpg" alt="Investigacion" class="img-responsive hidden-xs hidden-sm" >
                      <div class="panelfooter">
                        <h3>Ven y forma parte de nuestro equipo!</h3>
                          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, doloremque.</p>
                      </div>
                  </div>
                </div><!--Acaba la primera (1/2) division de grid-->
                </div> <!--Termina Panel left-->

                <div id="panel-right">
                <div class="col-sm-10 col-md-5  col-md-offset-1 col-lg-4 col-lg-offset-1">
                  <img src="img/logo-fundacion.png" alt="Logo" class="img-responsive pull-right">
                    <h4>Cuenta Markoptic </h4>
                    <a href="" data-toggle="modal" data-target="#myModal">¿De que trata?</a>
                      
                      <div class="panel-heading">
                        <div class=" formheadingtitle" >Iniciar Sesión</div>
                          {{HTML::link('create','Crear usuario', array('class' => 'formheading text-success', 'style'=>'color:white;'))}}
                      </div>


                  <div class="panel-body ">

                      <center><span id="_mensaje" class="display-errors" ></span></center>
                      <center><span id="errores" class="display-errors" ></span></center>
                      @if(Session::has('message_remind'))
                      <center><span class="display-info">{{ Session::get('message_remind') }}</span></center>
                      <br>
                      @endif
                      
                    

                        <!--Formulario-->
                        {{ Form::open(array(
                          'route' => 'account.login',
                          'class' => 'form-horizontal', 
                          'role' => 'form',
                          'id' => 'formlogin'
                           ))}}

                        <!-- Name -->
                        
                        <div class="input-group separetedinput">
                            <span class="input-group-addon schema-light-teal"><i class="fa fa-envelope"></i></span>
                              {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico', 'id' => 'username' )) }}
                             
                        </div>
                        <span class=" display-errors"  id="_email">  {{ $errors->first('email') }}</span>
                        
                        <!-- Password -->
                        <div class="input-group separetedinput">
                            <span class="input-group-addon schema-light-teal"><i class="glyphicon glyphicon-lock"></i></span>
                              {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña','id'=>'password')) }}        
                        </div>
                        <span class=" display-errors" id="_password">  {{ $errors->first('password') }}</span>
                         
                        <div class="form-group">
                          &nbsp;&nbsp;&nbsp;&nbsp;<input name="remember" type="checkbox" /> Recordar mi sesión                
                        </div>     
                                      
                        <!-- Login button -->
                            <div class="col-sm-5 col-lg-6">
                              <div class="row">
                                {{ Form::button('Iniciar Sesion', array('class' => 'btn btn-primary btn-block col-lg-3 ' , 'id' => 'btnlogin'))}}
                                {{ Form::close() }}
                              </div>
                            </div>
                              <div class="load" align="center" style="display:none"><img src="img/gif/enviando.gif" alt=""></div>
                            <br>
                            <br>
                            <br>
                        

                        <p>¿Se te olvido tu contraseña? {{HTML::link('password/reset','Recuperar Contraseña', array('class' => ''))}}</p>
                        <br>
                        
                  </div><!--Termina el panel body-->
                </div><!--Acaba la segunda (2/2)division de grid-->
                </div><!--Termina el panel derecho-->   
                        
              </div><!--Termina el row-->
    </div> <!--Termina el container-->
    </div>
    
    <!--Footer-->
    @include('includes.footerStatic')
    
    <!--Modal-->
    @include('includes.Modales.login')
      
    <!--Scripts-->
    @include('includes.script')

  <script>

  $(function()
  {
    
      function send_ajax()
      {
        $.ajax({
          url: 'login',
          dataType: 'json',
          type:'POST',
          data: $('#formlogin').serialize(), //Se obtienen los datos del formulario


            success: function(datos)
            {
              
              //Donde se vana  mostrar los errores
              $('#_email , #_password ').text('');
              var dom = document.getElementById('#formlogin');

                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                  $('#_mensaje').text('Username/Password Invalid');
                     $.each(datos.errors, function(index, value)
                      {
                        
                        $('#_'+index).text(value);
                      });
                }
                //Si la respuesta del ajax es verdadero se hace esto
                else
                {

                      $('#mensaje').text("Bienvenido al Sistema");
                       window.location = 'bienvenida';
                }
            },

            errors: function(errors){
              $('#errores').html("");
              $('#errores').html(errors);
            }
        });
      }

        //Se manda a llamar la funcion
        $('#btnlogin').on('click',function()
        {
            send_ajax();
            
        });
  });
</script>


  </body>
</html>