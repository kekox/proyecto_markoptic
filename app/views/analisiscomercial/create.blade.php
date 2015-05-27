@extends('layout.master')
@section('title')
:: Dashboard
@stop 

@section('contenido')

  <section >
            <div class="container-fluid ">
              <div class="row">
                 
                <div id="formproyectos" >
                  	<div class="col-lg-10 col-lg-offset-1">
                  		
                  		<center><h3>Análisis Comerciales - Sección 4/10</h3></center>
                  		<div class="col-lg-7 col-lg-offset-3">
	                  		<div class="progress">
							  <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
							   30% Completo
							  </div>
							</div>
                  		</div>
                  		<br>
                  		<br>
						<center><span id="_mensaje" class="display-errors" ></span></center>

		                  	<!--Formulario-->
				            <div id="formulariocomercial" class="space">
		                		{{ Form::open(array(
								'route' => 'addseccion4',
								'class' => 'form-horizontal', 
								'role'  => 'form',
								'id'    => 'formcomercial',
		                		))}}

		                		 <center><span class=" display-errors"  id="_campo0">  {{ $errors->first('campo0') }}</span></center>
		                		<div class="col-lg-12"> <!-- Empieza el primer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo1" >Folio.<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               			@if($proyectos)
											@foreach($proyectos as $proyecto)
				               				<textarea type="text" class="form-control"  id="campo0" placeholder="Informacion acerca del campo..."name="campo0" row="2" value="{{$proyecto->folio}}" disabled>{{$proyecto->folio}}</textarea>
				               				@endforeach
										@endif 
				               			</div>
				               			<div class="col-lg-1">
				               				  <a href="#" data-toggle="tooltip" id="myTooltip0" >
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina primer campo -->
								
		               			<center><span class=" display-errors"  id="_campo1">  {{ $errors->first('campo1') }}</span></center>
		               			<div class="col-lg-12"> <!-- Empieza el primer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo1" >Características de la empresa.<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo1" placeholder="Informacion acerca del campo..."name="campo1" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
				               				  <a href="#" data-toggle="tooltip" id="myTooltip1" >
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina primer campo -->


								<center><span class=" display-errors"  id="_campo2">  {{ $errors->first('campo2') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el segundo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo2" >Funciones críticas de administración.<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo2" placeholder="Informacion acerca del campo..." name="campo2" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip2">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina segundo campo -->

								<center><span class=" display-errors"  id="_campo3">  {{ $errors->first('campo3') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el tercer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo3" >Experiencia del personal.<i class="text-red">*</i> </label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="_campo3" placeholder="Informacion acerca del campo..."name="campo3" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip3">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina tercer campo -->

								<center><span class=" display-errors"  id="_campo4">  {{ $errors->first('campo4') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el cuarto campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo4" >Récord de éxito en comercialización de proyectos y otras investigaciones.<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo4" placeholder="Informacion acerca del campo..."name="campo4" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip4">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina cuarto campo -->

								

								<div class="col-lg-7 col-lg-offset-2 col-lg-push-1">
								<!--  <button class="btn btn-primary btn-block roboto" id="btnproyecto" type="submit" value="Enviar">Siguiente</button>-->
								<input class="btn btn-primary btn-block roboto" id="btncomercial" type="button" value="Siguiente">
								{{--{{ Form::submit('Siguiente', array('class' => 'btn btn-primary btn-block'))}}--}}
								<br>
				       			
				       			
		                        <!--Termina formulario-->
		                        {{ Form::close() }}
								</div> <!-- Botton de sig -->

		                	</div><!-- Termina id formulario -->
							
							
              		</div>

            	</div>
						
            </div>
        </div>
            
    
  </section>

<script>
	
$(document).ready(function(){

    $('input[type="button"]').attr('disabled','disabled');

     $('#formulariocomercial').on('keyup',function()
     {
        if( 
            $('#campo1').val() !=''
          	&&
          	$('#campo2').val() !=''
          	&&
          	$('#campo3').val() !=''
          	&&
          	$('#campo4').val() !=''
        ){
            $('input[type="button"]').removeAttr('disabled');
        	$('#campo0').removeAttr('disabled');
        }else{
         	$('input[type="button"]').attr('disabled','disabled');
         	$('#campo0').attr('disabled','disabled');
        }

     });

    $('#btncomercial').on('click',function()
    {
    	var MyRegExp = /ya ha sido registrado/;
    	var MyRegExp2 = /numerico/;
    	var idproyecto = $('#campo0').attr('value');
    	var idproyectoform = $('#campo0').val();

    	
    	$.ajax({
          url: '4',
          dataType: 'json',
          type:'POST',
          data: $('#formcomercial').serialize(), //Se obtienen los datos del formulario
           
            success: function(datos)
            {
             
             
              //Donde se vana  mostrar los errores
              $('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4').text('');
                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#_mensaje').text(datos.message);
                  

	                  if(datos.errors.campo1==undefined && datos.errors.campo2==undefined&& datos.errors.campo3==undefined && datos.errors.campo4==undefined)
	                  {
	                  		if(idproyecto == idproyectoform && MyRegExp.test(value)){
	                  			result=confirm("Esta Sección ya ha sido llenada, Le segurimos pasar a la siguiente sección.\n\n ¿Desea ir a la siguiente sección?");
				                  	if(result == true){ 
										window.location = '5'; 
										}
										return false;
	                  		}else{
		                  			if(datos.errors.campo0!="El campo debe ser numérico"){
		                  				alert('Folio Incorrecto.\n\nFavor de seleccionar el folio del proyecto que puso al principio.');
				        				$('#_campo0').text('Seleccione el folio Correcto.');
		                  			}
	                  			
	                  		}
	                		
					  }

                });
                }else{
                  alert('El registro de esta sección fue todo un éxito');
                  document.getElementById('formcomercial').reset();
                  window.location = '5';
                
                  
                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) {
            	if (XMLHttpRequest.status === 500) {
            		
            		alert('Folio Incorrecto.\n\nFavor de seleccionar el folio del proyecto que puso al principio.');
			        $('#_campo0').text('Seleccione el folio Correcto.');
			        
			        
			        //console.log(XMLHttpRequest);
			    }else{
            	 	alert("Algo esta mal");
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
