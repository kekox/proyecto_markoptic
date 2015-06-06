<!DOCTYPE html>
<html>
<!--Head-->
@include('includes.head')
<body>
  
  <!--Nav-->
    @include('includes.headerStatic')

  <!--Content-->
  <div id="resetpasslast">
  
      <div class="container">
        <div class="row">
          <div class="content col-lg-8 col-lg-offset-2">
            <div class="panel panel-success ">

              <div class="panel-heading">
                <h3 class="panel-title montserrat">Cambiar Contraseña<i class="fa fa-exchange"></i></h3>

              </div>

              <div class="panel-body">
                    <center><span class="display-errors"id="mensaje"></span></center>
                     @if(Session::has('message_error'))            
                       <span class="display-errors" id="mensaje">{{ Session::get('message_error') }}</span>
                     @endif
                  
                    <!--Formulario-->
                    {{ Form::open(array('route' => array('password.update', $token))) }}
  
                  
                     <!-- Email -->
                    <div class="col-lg-12">
                          <section  class="form-group space">
                            <div class="col-lg-3 ">
                              <center class="roboto-slab"><label for="email" >Correo electrónico</label></center>
                            </div>
                            <div class="col-lg-8">
                              <input type="email" class="form-control" placeholder="Correo Electrónico..."name="email"></input> 
                            </div>
                          </section>
                   </div>
                   <!-- Termina Email --> 
                    <center><span class="display-errors"  id="email">  {{ $errors->first('email') }}</span></center>

                    <!-- password -->
                    <div class="col-lg-12">
                          <section  class="form-group space">
                            <div class="col-lg-3 ">
                              <center class="roboto-slab"><label for="password" >Contraña nueva</label></center>
                            </div>
                            <div class="col-lg-8">
                              <input type="password" class="form-control" placeholder="Contraseña Nueva..."name="password"></input> 
                            </div>
                          </section>
                   </div>
                   <!-- password --> 
                    <center><span class="display-errors"  id="password">  {{ $errors->first('password') }}</span></center>
                  

                    <!-- password confirmation-->
                    <div class="col-lg-12">
                          <section  class="form-group space">
                            <div class="col-lg-3 ">
                              <center class="roboto-slab"><label for="password_confirmation" >Confirmar contraseña</label></center>
                            </div>
                            <div class="col-lg-8">
                              <input type="password" class="form-control" placeholder="Repetir contraseña nueva..."name="password_confirmation"></input> 
                            </div>
                          </section>
                   </div>
                   <!-- password confirmation--> 
                    <center><span class="display-errors"  id="password">  {{ $errors->first('password_confirmation') }}</span></center>

                   
                    {{ Form::hidden('token', $token) }}

                    <div class="col-lg-8 col-lg-offset-2">
                    <br>
                     <input type="submit" class="btn btn-primary btn-block"value="Guardar">  
                    </div>
                   

                    {{ Form::close() }}

              </div>
               <br>
               <br>
               
            </div>
          </div>
        </div>
      </div>
    
    
      


    
    
  

  </div><!--Termina el content-->

  @if(Session::has('message_error'))            
      {{ "<script>
        $(document).ready(function()
        {
          $('.MessageError').modal('show');
        });
       </script>"}}
  @endif

  <!--Mensajes-->
  @include('includes.Messages.MessageError')
  
  <!--Footer-->
  @include('includes.footerStatic')

  <!--Scripts-->
  @include('includes.script')
</body>
</html>