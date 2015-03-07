@extends('layout.master')
@section('title')
:: Dashboard
@stop 
@section('contenido')

  <section >
            <div class="container-fluid">
              <div class="row">
                 
                <div id="formproyectos" class="grid-form-1-proyecto">
                  	<div class="col-lg-8 col-lg-offset-2">
                  		
                  		<center><h3>Contacto</h3></center>
                      <small>{{HTML::link('dashboard',' ',array('class' => 'glyphicon glyphicon-arrow-left color-black' ))}}</small>
                      {{-- Se despliegan los errores de acuerdo a su situacion--}}
                      
                      <center><div id="mensaje"></div></center>
                    
                         {{ Form::open(array(
                        'url' => 'contacto',
                        'class' => 'form-horizontal', 
                        'role' => 'form' , 
                        'id' =>'formcontacto'
                        ))}}

                      <div class="form-group">
                          {{form::label('Nombre:')}}
                          {{Form::input('text','name',Input::old('name'),array('class' => 'form-control' , 'placeholder' =>'Nombre'))}}
                          <span class="bg-danger" id="_name"> {{ $errors->first('name') }} </span>
                      </div>
                     
                
                      <div class="form-group">
                          {{form::label('Email:')}}
                          {{Form::input('email','email',Input::old('email'),array('class' => 'form-control' , 'placeholder' =>'Corre Electronico'))}}
                           <span class="bg-danger" id="_email">{{ $errors->first('email') }}</span>

                      </div>
                     
                      <div class="form-group">
                          {{form::label('Asunto:')}}
                          {{Form::input('text','subject',null,array('class' => 'form-control' , 'placeholder' =>'Asunto del Mensaje'))
                          }}
                          <span class="bg-danger" id="_subject">{{ $errors->first('subject') }}</span>
                      </div>
                      

                      <div class="form-group">
                          {{form::label('Mensaje:')}}
                          {{Form::textarea('msg',null,array('class' => 'form-control' , 'placeholder' =>'Cuerpo del mensaje'))}}
                          <span class="bg-danger" id="_msg">{{ $errors->first('msg') }}</span>
                      </div>
                      
                      

                   
                      {{Form::input('button',null,'Enviar',array('class' =>'btn btn-primary','id'=> 'btncontact'))}}



                      {{ Form::close() }}

						

		                  <div class="load" align="center" style="display:none"><img src="img/gif/enviando.gif" alt=""></div>
                      <div class="load2" align="center" style="display:none"><img src="img/gif/ok.png" alt=""></div>	

              		</div>
            	</div>

            </div>
        </div>
            
    
  </section>

  <script>

  $(function(){
    
      function send_ajax()
      {
        $.ajax({
          url: 'contacto',
          cache: false,
          dataType: 'json',
          type:'POST',
          data: $('#formcontacto').serialize(), //Se obtienen los datos del formulario

            beforeSend: function(){
              $('.load').show();
              $('.load2').hide();
            },

            success: function(datos)
            {
              $('.load').hide();
               $('.load2').hide();
              //Donde se vana  mostrar los errores
              $('#_name , #_email , #_subject , #_msg').text('');

                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#mensaje').text("Favor de revisar los campos*");
                 
                  //window.location='dashboard'; Redirije a otro Lugar
                });
                }
                //Si la respuesta del ajax es verdadero se hace esto
                else
                {
                  document.getElementById('formcontacto').reset();
                  $('#mensaje').text("Mensaje enviado con Exito");
                  $('.load2').show();
                  setTimeout("window.location = 'contacto'",3000);
                  
                }
            },

            
            
        });
      }

        //Se manda a llamar la funcion
        $('#btncontact').on('click',function()
        {
            send_ajax();
            
        });
  });
</script>

@stop
