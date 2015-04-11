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
                  		
                  		<h3>Contacto</h3>
                      <small>{{HTML::link('dashboard',' ',array('class' => 'fa fa-arrow-circle-left color-black fa-3x ' ))}}</small>
                      {{-- Se despliegan los errores de acuerdo a su situacion--}}
                      
                      <center><span id="mensaje" class="bg-errors display-errors"></span></center>
                      <center><span id="mensaje_exito" class="bg-errors display-errors"></span></center>
                      <br>
                    
                         {{ Form::open(array(
                        'route' => 'contacto.sent',
                        'class' => 'form-horizontal', 
                        'role' => 'form' , 
                        'id' =>'formcontacto'
                        ))}}

                      <div class="form-group">
                          {{form::label('Nombre:')}}
                          {{Form::input('text','name',Input::old('name'),array('class' => 'form-control' , 'placeholder' =>'Nombre'))}}
                          <span class="bg-errors display-errors" id="_name"> {{ $errors->first('name') }} </span>
                      </div>

                      <div class="form-group">
                          {{form::label('Email:')}}
                          {{Form::input('email','correo',Input::old('correo'),array('class' => 'form-control' , 'placeholder' =>'Corre Electronico'))}}
                           <span class="bg-errors display-errors" id="_correo">{{ $errors->first('correo') }}</span>

                      </div>

                      <div class="form-group">
                          {{form::label('Asunto:')}}
                          {{Form::input('text','subject',null,array('class' => 'form-control' , 'placeholder' =>'Asunto del Mensaje'))
                          }}
                          <span class="bg-errors display-errors" id="_subject">{{ $errors->first('subject') }}</span>
                      </div>
                      

                      <div class="form-group">
                          {{form::label('Mensaje:')}}
                          {{Form::textarea('msg',null,array('class' => 'form-control' , 'placeholder' =>'Cuerpo del mensaje'))}}
                          <span class="bg-errors display-errors" id="_msg">{{ $errors->first('msg') }}</span>
                      </div>
                      

                      
                      

                   
                      {{Form::input('button',null,'Enviar',array('class' =>'btn btn-primary roboto','id'=> 'btncontact'))}}



                      {{ Form::close() }}

						
                      <br>
                      <div id="progressTimer" class="enviando" style="display:none">Enviando...</div>
		                  <div class="load" align="center" style="display:none"><img src="img/gif/enviando.gif" alt=""></div>
                      <div class="load2" align="center" style="display:none"><img src="img/gif/ok.png" alt=""><p class="alert alert-success">Mensaje enviado con Éxito! Gracias.</p></div>
                      <div class="load3" align="center" style="display:none"><img src="img/gif/error.png" alt=""><p class="alert alert-danger">Error al Intentar enviar el mensaje</p></div>	

              		</div>
            	
              </div>
            </div>
            <br>
            
                    


             <p style="color:transparent;">a</p> 
        </div>
            
        
  </section>

{{ HTML::script('js/jquery.progressTimer.js') }}
<script>
  $("#progressTimer").progressTimer({

    timeLimit: 9,
    warningThreshold: 10,
    baseStyle: 'progress-bar-success',
    warningStyle: 'progress-bar-success',
    completeStyle: 'progress-bar-success',
    onFinish: function() {
        console.log("I'm done");
    }

});
</script>
<script>
  $(function(){
    
      function send_ajax_contacto()
      {
        $.ajax({
          url: 'contacto',
          dataType: 'json',
          type:'POST',
          data: $('#formcontacto').serialize(), //Se obtienen los datos del formulario
            beforeSend: function(){
              $('.enviando').show();
              $('.load').hide();
              $('.load2').hide();
              $('.load3').hide();
            },
            success: function(datos)
            {
              $('.enviando').hide();
              $('.load').hide();
              $('.load2').hide();
              $('.load3').hide();
             
              //Donde se vana  mostrar los errores
              $('#_name , #_correo , #_subject , #_msg').text('');
                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#mensaje').text("Revisa los campos porfavor*");
                  $('.load3').show();
                  setTimeout(function(){
                  $('.load3').hide();
                  },3000);
                  
                  //window.location='dashboard'; Redirije a otro Lugar
                });
                }
                //Si la respuesta del ajax es verdadero se hace esto
                else
                {
                 
                  $('.enviando').show();
                  document.getElementById('formcontacto').reset();
                  $('#mensaje').text("Mensaje enviado con Éxito");
                  $('.enviando').hide();
                  $('.load2').show();
                  setTimeout("window.location = 'contacto'",3000);
                  
                }
            }
            
            
        });
      }
        //Se manda a llamar la funcion
        $('#btncontact').on('click',function()
        {
            send_ajax_contacto();
            
        });
  });
</script>

@stop
