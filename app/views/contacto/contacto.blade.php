@extends('layout.master')
@section('title')
:: Dashboard
@stop 
@section('contenido')

  <section >
  <div id="contacto" >
            <div class="container-fluid ">
              <div class="row">

                  	<div class="col-lg-8 col-lg-offset-2 ">

                      <!--<center><ol class="breadcrumb roboto-slab" style="background-color:#eee;">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li class="active">contacto</li>
                      </ol>
                      </center>
                      -->
                  		
                  		<h3><a href="dashboard" class="fa fa-arrow-left color-black pull-left" style="text-decoration:none;"></a>        Contacto</h3>
                     
                      {{-- Se despliegan los errores de acuerdo a su situacion--}}

                      <center><span id="mensaje_exito" class="display-success"></span></center>
                      <br>
                    
                         {{ Form::open(array(
                        'route' => 'contacto.sent',
                        'class' => 'form-horizontal', 
                        'role' => 'form' , 
                        'id' =>'formcontacto'
                        ))}}

                      <div class="form-group">
                          <label for="name" >Nombre:</label>
                          <input type="text" name="name" class="form-control" placeholder="Nombre">
                          <span class="display-errors" id="_name"> {{ $errors->first('name') }} </span>
                      </div>
                     

                      <div class="form-group">
                           <label for="email:" >Email:</label>
                           <input type="email" name="correo" class="form-control" placeholder="Correo Electronico">
                           <span class="display-errors" id="_correo">{{ $errors->first('correo') }}</span>

                      </div>

                      <div class="form-group">
                          <label for="subject">Asunto:</label>
                          <input type="text" name="subject" class="form-control" placeholder= "Asunto del Mensaje">
                          <span class="display-errors" id="_subject">{{ $errors->first('subject') }}</span>
                      </div>
                      

                      <div class="form-group">
                          <label for="msg">Mensaje:</label>
                          <textarea name="msg" id="" class="form-control" placeholder="Cuerpo del mensaje " cols="50" rows="10"></textarea>

                          <span class="display-errors" id="_msg">{{ $errors->first('msg') }}</span>
                      </div>
                      
                      
                      <input type="button" value="Enviar" class="btn btn-primary roboto" id="btncontact"  >



                      {{ Form::close() }}

						
                      
                      <div id="progressTimer" class="enviando" style="display:none">Enviando...</div>
                      <div class="load2" align="center" style="display:none"><img src="img/gif/ok.png" alt=""><p class="alert alert-success">Mensaje enviado con Éxito! Gracias.</p></div>
                      <div class="load3" align="center" style="display:none"><img src="img/gif/error.png" alt=""><p class="alert alert-danger">Error al Intentar enviar el mensaje</p></div>	

              		</div>
            	
              </div>
            </div>
            <br>
            
                    

        </div>
            
        
  </section>

    <!--Mensajes-->
    @include('includes.Messages.MessageError')
    @include('includes.Messages.MessageContactoSuccess')


{{ HTML::script('js/progressbar.js') }}
<script>
  $("#progressTimer").progressTimer({

    timeLimit: 9,
    warningThreshold: 10,
    baseStyle: 'progress-bar-success',
    warningStyle: 'progress-bar-success',
    completeStyle: 'progress-bar-success',
    onFinish: function() {
        console.log("Terminado.");
    }

});
</script>
<script>

$(document).ready(function(){

  
    $('#btncontact').on('click',function()
    {
      
      $.ajax({
          url: 'contacto',
          dataType: 'json',
          type:'POST',
          data: $('#formcontacto').serialize(), 
            beforeSend: function(){
              $('.enviando').show();
              
            },
            success: function(datos)
            {
           
             
              
              $('#_name , #_correo , #_subject , #_msg').text('');
                if(datos.success == false){
                  $.each(datos.errors, function(index, value)
                  {

                    $('#_'+index).text(value);
                    $('.enviando').hide();
                    $('.ModalError').modal('show');
                    
                    
                  
                  });
                }else{
                    $('.enviando').show();
                    document.getElementById('formcontacto').reset();
                    $('.ModalEnviado').modal('show');
                    setTimeout(function(){window.location.href="contacto"} , 2000);  
                  
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              if (XMLHttpRequest.status === 500) {
                    $('load3').show();
              }else{
                  //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
                  console.log(XMLHttpRequest.statusText);
                  console.log(textStatus);
                  console.log(errorThrown);
              }
            }
            
            
        });

    });

});

</script>

@stop
