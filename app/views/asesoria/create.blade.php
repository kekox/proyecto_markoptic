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
                  		
                  		<center><h3>Asesoría - Sección 10/10</h3></center>
                  		<div class="col-lg-7 col-lg-offset-3">
	                  		<div class="progress">
							  <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
							   90% Completo
							  </div>
							</div>
                  		</div>
                  		<br>
                  		<br>
						<center><span id="_mensaje" class="display-errors" ></span></center>

		                  	<!--Formulario-->
				            <div id="formularioasesoria" class="space">
		                		{{ Form::open(array(
								'route' => 'addseccion10',
								'class' => 'form-horizontal', 
								'role'  => 'form',
								'id'    =>'formasesoria',
		                		))}}

		                		<center><span class=" display-errors"  id="_campo0">  {{ $errors->first('campo0') }}</span></center>
		                		<div class="col-lg-12"> <!-- Empieza el cero campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo0" >Folio.<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               			@if($proyectos)
											@foreach($proyectos as $proyecto)
				               				<textarea type="text" class="form-control"  id="campo0" placeholder="Informacion acerca del campo..."name="campo0" row="2" value="{{$proyecto->folio}}" readonly>{{$proyecto->folio}}</textarea>
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
								</div> <!-- Termina cero campo -->
								
		               			<center><span class=" display-errors"  id="_campo1">  {{ $errors->first('campo1') }}</span></center>
		               			<div class="col-lg-12"> <!-- Empieza el primer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo1" >PREGUNTA 1: ¿En la formulación de su propuesta, recibió asesoría/consultoría de un tercero (Despacho, Oficina de Transferencia de Tecnología, Centro de Patentamiento, IES, CI)?</label></center>
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
				               				<center><label for="campo2" >PREGUNTA 2: Indique la entidad que la auxilió en el desarrollo y llenado de la propuesta; favor de seleccionarlo de acuerdo a su RENIECYT.</label></center>
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
				               				<center><label for="campo3" >PREGUNTA 3: Selecciones las etapas de las propuestas en las que participó o participará la entidad que brindó la asesoría.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo3" placeholder="Informacion acerca del campo..."name="campo3" row="2"></textarea> 
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
				               				<center><label for="campo4" >PREGUNTA 4: ¿La entidad que le auxilió en la preparación y llenado de la propuesta le cobrará honorarios?</label></center>
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

								<center><span class=" display-errors"  id="_campo5">  {{ $errors->first('campo4') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el quinto campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo5" >Responsables del Proyecto.<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo5" placeholder="Informacion acerca del campo..."name="campo5" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip5">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina quinto campo -->
					
								
								<div class="col-lg-7 col-lg-offset-2 col-lg-push-1">
								<!--  <button class="btn btn-primary btn-block roboto" id="btnproyecto" type="submit" value="Enviar">Siguiente</button>-->
								<input class="btn btn-primary btn-block roboto" id="btnasesoria" type="button" value="Finalizar">
								{{--{{ Form::submit('Siguiente', array('class' => 'btn btn-primary btn-block'))}}--}}
								<br>
				       			
				       			
		                        <!--Termina formulario-->
		                        {{ Form::close() }}
								</div> <!-- Botton de sig -->

		                	</div><!-- Termina id formulario -->
							
							
              		</div>

            	</div>
				@if(isset($proyectos))
					@foreach($proyectos as $proyecto)
            	<a value="{{$proyecto->folio}}" class="ProcessCancel">
					<span class="fa-stack fa-2x pull-right" style="margin-top:10px; margin-right:15px;" title="Cancelar Proceso">
					<i class="fa fa-square  fa-stack-2x fa-inverse"></i>
					<i class="fa fa-sign-out fa-stack-1x text-black"></i>
					</span>
					</a>
					@endforeach
				@endif		
            </div>
        </div>
            
    <!-- Modales-->
 	@include('includes.Modales.CancelarProceso') 
  </section>

<script>
	
$(document).ready(function(){

    $('input[type="button"]').attr('disabled','disabled');

     $('#formularioasesoria').on('keyup',function()
     {
        if(
        	$('#campo0').val() !=''
        	&&
          	$('#campo5').val() !=''
        ){
            $('input[type="button"]').removeAttr('disabled');
        	$('#campo0').removeAttr('disabled');
        }else{
         	$('input[type="button"]').attr('disabled','disabled');
         	$('#campo0').attr('disabled','disabled');
        }

     });

    $('#btnasesoria').on('click',function()
    {

    	var MyRegExp = /ya ha sido registrado/;
		var MyRegExp2 = /numerico/;
		var idproyecto = $('#campo0').attr('value');
		var idproyectoform = $('#campo0').val();

    	$.ajax({
          url: '10',
          dataType: 'json',
          type:'POST',
          data: $('#formasesoria').serialize(), //Se obtienen los datos del formulario
           
            success: function(datos)
            {
             
             
              //Donde se vana  mostrar los errores
              $('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4,#_campo5').text('');
                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#_mensaje').text(datos.message);

                  if(datos.errors.campo1==undefined && datos.errors.campo2==undefined&& datos.errors.campo3==undefined && datos.errors.campo4==undefined && datos.errors.campo5==undefined){
                		
                			if(idproyecto == idproyectoform && MyRegExp.test(value)){
	                  			result=confirm("Esta Sección ya ha sido llenada, Lo redireccionaremos a otra sección.\n\n ¿Desea ir a la sección?");
				                  	if(result == true){ 
										window.location = 'http://www.webapp.com/proyectos'; 
										}
										return false;
	                  		}else{
		                  			if(datos.errors.campo0!=datos.validation){
		                  				alert('Folio Incorrecto.\n\nFavor de seleccionar el folio del proyecto que puso al principio.');
				        				$('#_campo0').text('Seleccione el folio Correcto.');
		                  			}
	                  			
	                  		}
					}

                });
                }else{
                  alert(datos.message);
                  document.getElementById('formasesoria').reset();
                  window.location = 'http://www.webapp.com/proyectos';
                
                  
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            	if (XMLHttpRequest.status === 500) {
            		alert('Favor de seleccionar el folio del proyecto que puso al principio.')
			        $('#_campo0').text('Seleccione el folio Correcto');

			        //console.log(XMLHttpRequest);
			    }else{
            	 	alert("Algo esta mal");
				    //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
				    console.log(XMLHttpRequest.statusText);
				    console.log(textStatus);
				    console.log(errorThrown);;
		    	}
			}
            
            
        });

    });

});


</script>
<script>
  $(document).ready(function(){
    $('.ProcessCancel').on('click',function(){
       	var id= $(this).attr('value');
          $('#ProcessCancel').modal('show').on('click','#ProcesoCancel',function(){
          		window.location.href = '../../proyectos/stop/'+id; 
          });


    });

  });
</script>

@stop
