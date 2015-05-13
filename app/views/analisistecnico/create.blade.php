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
                  		
                  		<center><h3>Analisis Tecnicos - Sección 3/7</h3></center>
						<center><span id="_mensaje" class="display-errors" ></span></center>

		                  	<!--Formulario-->
				            <div id="formulariotecnico" class="space">
		                		{{ Form::open(array(
								'route' => 'addseccion3',
								'class' => 'form-horizontal', 
								'role'  => 'form',
								'id'    =>'formtecnico',
		                		))}}

		                		 <center><span class=" display-errors"  id="_campo0">  {{ $errors->first('campo0') }}</span></center>
		                		<div class="col-lg-12"> <!-- Empieza el primer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo1" >Folio</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               			@if($proyectos)
											@foreach($proyectos as $proyecto)
				               				<textarea type="text" class="form-control"  id="campo0" placeholder="Informacion acerca del campo..."name="campo0" row="2" disabled>{{$proyecto->folio}}</textarea>
				               				@endforeach
										@endif 
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
								
		               			<center><span class=" display-errors"  id="_campo1">  {{ $errors->first('campo1') }}</span></center>
		               			<div class="col-lg-12"> <!-- Empieza el primer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo1" >Antecedentes</label></center>
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
				               				<center><label for="campo2" >Estado de la Técnica 1</label></center>
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
				               				<center><label for="campo3" >Estado de la Técnica 2</label></center>
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
				               				<center><label for="campo4" >Estado de la Técnica 3</label></center>
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

								<center><span class=" display-errors"  id="_campo5">  {{ $errors->first('campo5') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el quinto campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo5" >Estado de la Técnica 4</label></center>
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
								</div> <!-- Termina el quinto campo -->

								<center><span class=" display-errors"  id="_campo6">  {{ $errors->first('campo6') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el sexto campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo6" >Estado de la Técnica 5</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo6" placeholder="Informacion acerca del campo..."name="campo6" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip6">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el sexto campo -->

								<center><span class=" display-errors"  id="_campo7">  {{ $errors->first('campo7') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el septimo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo7" >Especificar cuál es la fuente de origen de la tecnología (p.e desarrollo interno, adquisición, transferencia de otra empresa o institución académica)</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo7" placeholder="Informacion acerca del campo..."name="campo7" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip7">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el septimo campo -->

														
								
								<div class="col-lg-7 col-lg-offset-2 col-lg-push-1">
								<!--  <button class="btn btn-primary btn-block roboto" id="btnproyecto" type="submit" value="Enviar">Siguiente</button>-->
								<input class="btn btn-primary btn-block roboto" id="btntecnico" type="button" value="Siguiente">
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
            
    @if($proyectoss)
					@foreach($proyectoss as $proyectosss)
				              Nombrel del proyecto: <strong>{{$proyectosss->nombre_proyecto}}</strong>, folio: <strong>{{$proyectosss->folio}}</strong> <br> 				
				    @endforeach
			@endif 
  </section>

<script>
	
$(document).ready(function(){

    $('input[type="button"]').attr('disabled','disabled');

     $('#formulariotecnico').on('keyup',function()
     {
        if(
            $('#campo0').val() !='' 
            &&  
            $('#campo1').val() !=''
          	&&
          	$('#campo2').val() !=''
          	&&
          	$('#campo3').val() !=''
          	&&
          	$('#campo4').val() !=''
          	&&
          	$('#campo5').val() !=''
          	&&
          	$('#campo6').val() !=''
          	&&
          	$('#campo7').val() !=''
        ){
            $('input[type="button"]').removeAttr('disabled');
        	$('#campo0').removeAttr('disabled');
        }else{
         	$('input[type="button"]').attr('disabled','disabled');
         	$('#campo0').attr('disabled','disabled');
        }

     });

    $('#btntecnico').on('click',function()
    {
    	$.ajax({
          url: '3',
          dataType: 'json',
          type:'POST',
          data: $('#formtecnico').serialize(), //Se obtienen los datos del formulario
           
            success: function(datos)
            {
             
             
              //Donde se vana  mostrar los errores
              $('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4 ,#_campo5 ,#_campo6 ,#_campo7').text('');
                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#_mensaje').text("Revise los campos porfavor*");
                });
                }else{
                  document.getElementById('formtecnico').reset();
                  window.location = 'http://www.webapp.com/proyectos/seccion/4';
                
                  
                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) {
            	if (XMLHttpRequest.status === 500) {
            		alert('Favor de seleccionar el folio del proyecto que puso al principio.')
			        $('#_campo0').text('Seleccione el folio Correcto');

			        console.log(XMLHttpRequest);
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
@stop
