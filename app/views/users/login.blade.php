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
                    <div class="col-lg-6 col-md-6 col-sm-12 -moz-col-lg-6 col-md-6 col-sm-12">
                      <div class="media-left">
                        <img src="img/investigacion.jpg" alt="Investigacion" class="img-responsive hidden-xs hidden-sm" >
                          <div class="panelfooter">
                            <h3>¡Bienvenido!</h3>
                              <p> El centro de investigación y fundación Markoptic les da la más cordial bienvenida a su sistema de integración de proyectos, con el fin de brindarles el mejor servicio.</p>
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
                              <a href="http://www.webapp.com/create" class="formheading text-success" style="color:white;">Crear usuario</a>
                          </div>


                      <div class="panel-body ">

                          <center><span id="_mensajefail" class="display-errors" ></span></center>
                          <!-- <center><span id="_mensajesuccess" class="display-success" ></span></center> -->

                            
                            {{ Form::open(array(
                              'route' => 'account.login',
                              'class' => 'form-horizontal', 
                              'role' => 'form',
                              'id' => 'formlogin'
                               ))}}

                                                  
                            <div class="input-group separetedinput">
                                <span class="input-group-addon schema-light-teal"><i class="fa fa-envelope "></i></span>
                                <input class="form-control" placeholder="Correo Electrónico" id="username" name="email" type="email">
                            </div>
                            <span class=" display-errors"  id="_email">  {{ $errors->first('email') }}</span>
                            
                       
                            <div class="input-group separetedinput">
                                <span class="input-group-addon schema-light-teal"><i class="glyphicon glyphicon-lock"></i></span>
                                <input class="form-control" placeholder="Contraseña" id="password" name="password" type="password" value="">     
                            </div>
                            <span class=" display-errors text-justify" id="_password">  {{ $errors->first('password') }}</span>
                             

                            <div class="form-group">
                              &nbsp;&nbsp;&nbsp;&nbsp;<input name="remember" type="checkbox" /> Recordar mi sesión                
                            </div>     
                                          
                            <!-- Login button -->
                                <div class="col-sm-5 col-lg-6">
                                  <div class="row">
                                    <button class="btn btn-primary btn-block col-lg-3 montserrat-btn" id="btnlogin" type="button">Iniciar Sesion</button>
                                    {{ Form::close() }}
                                  </div>
                                </div>
                                  <div class="load" align="center" style="display:none"><img src="img/gif/enviando.gif" alt=""></div>
                                <br>
                                <br>
                                <br>
                         

                            <p>¿Se te olvido tu contraseña? <a href="http://www.webapp.com/password/reset" class="">Recuperar Contraseña</a></p>
                            <br>
                            
                      </div><!--Termina el panel body-->
                    </div><!--Acaba la segunda (2/2)division de grid-->
                  </div><!--Termina el panel derecho-->   
                        
              </div><!--Termina el row-->
    </div> <!--Termina el container-->
    </div>

    <!--Mensajes-->
    @include('includes.Messages.MessageError')
    @include('includes.Messages.MessageBienvenida')
      

      
    <!--Footer-->
    @include('includes.footerStatic')
    


      
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

                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){

                    $('#_mensajefail').text(datos.message);
                    $('.ModalError').modal('show')

                     $.each(datos.errors, function(index, value)
                      {
                        $('#_mensajefail').text('');
                        $('#_'+index).text(value);
                        $('.ModalError').modal('show');
                      });
                }
                else
                {      
                      $('.ModalBienvenida').modal('show');
                      $('#_mensajefail').text('');
                      document.getElementById('formlogin').reset();
                      $('#_mensajesuccess').text(datos.message);
                      setTimeout(function(){window.location.href="dashboard"} , 1000);  
                      
                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) {
              if (XMLHttpRequest.status === 500) {
      
              }else{
                    
                //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
                console.log(XMLHttpRequest.statusText);
                console.log(textStatus);
                console.log(errorThrown);;
          }
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