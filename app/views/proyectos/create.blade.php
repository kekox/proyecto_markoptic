@extends('layout.master')
@section('title')
:: Dashboard
@stop 

@section('contenido')
<script>
$(window).load(function() {
      $('.MessageStartProcess').modal('show').on('click','#StopProcess',function(){
          		window.location.href = '../../dashboard'; 
          })
          
});
	
	

</script>
  <section >
            <div class="container-fluid ">
              <div class="row">
                 
                <div id="formproyectos" >
                  	<div class="col-lg-10 col-lg-offset-1">
                  		
                  		<center><h3>Proyecto - Sección 1/10</h3></center>
                  		<div class="col-lg-7 col-lg-offset-3">
	                  		<div class="progress">
							  <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
							  0% Completo
							  </div>
							</div>
                  		</div>
                  		<br>
                  		<br>
						<center><span id="_mensaje" class="display-errors" ></span></center>

		                  	<!--Formulario-->
				            <div id="formularioproyecto" class="space">
		                		{{ Form::open(array(
								'route' => 'addseccion1',
								'class' => 'form-horizontal', 
								'role'  => 'form',
								'id'    =>'formproyectos1',
		                		))}}

		                		<center><span class=" display-errors"  id="_campo0">  {{ $errors->first('campo0') }}</span></center>
		                		<div class="col-lg-12"> <!-- Empieza el cero campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo0" >Titulo de Proyecto<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo0" placeholder="Informacion acerca del campo..."name="campo0" row="2"></textarea> 
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
				               				<center><label for="campo1" >Folio<i class="text-red">*</i></label></center>
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
				               				<center><label for="campo2" >Modalidad</label></center>
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
				               				<center><label for="campo3" >Tipo de propuesta</label></center>
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
				               				<center><label for="campo4" >Contextualización<i class="text-red">*</i></label></center>
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
				               				<center><label for="campo5" >Propuesta apoyada en otra convocatoria</label></center>
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
				               				<center><label for="campo6" >Area industrial del proyecto</label></center>
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
				               				<center><label for="campo7" >Área de conocimiento</label></center>
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

								<center><span class=" display-errors"  id="_campo8">  {{ $errors->first('campo8') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el octavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo8" >Palabras clave<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo8" placeholder="Informacion acerca del campo..."name="campo8" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip8">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el octavo campo -->

								<center><span class=" display-errors"  id="_campo9">  {{ $errors->first('campo9') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el noveno campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo9" >Descripción/ Tipo de innovación<i class="text-red">*</i></label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo9" placeholder="Informacion acerca del campo..."name="campo9" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip9">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el noveno campo -->

								<center><span class=" display-errors"  id="_campo10">  {{ $errors->first('campo10') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el decimo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo10" >¿Que tipo de innovación plantea el proyecto?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo10" placeholder="Informacion acerca del campo..."name="campo10" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip10">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el decimo campo -->	

								<center><span class=" display-errors"  id="_campo11">  {{ $errors->first('campo11') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el onceavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo11" >¿Cual es el grado de la innovacion planteada?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo11" placeholder="Informacion acerca del campo..."name="campo11" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip11">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el onceavo campo -->	

								<center><span class=" display-errors"  id="_campo12">  {{ $errors->first('campo12') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el doceavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo12" >¿Que tipo de mercado atenderá?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo12" placeholder="Informacion acerca del campo..."name="campo12" row="2"></textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip12">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el doceavo campo -->							
								
								<div class="col-lg-7 col-lg-offset-2 col-lg-push-1">
								<!--  <button class="btn btn-primary btn-block roboto" id="btnproyecto" type="submit" value="Enviar">Siguiente</button>-->
								<input class="btn btn-primary btn-block roboto" id="btnproyecto" type="button" value="Siguiente">
								{{--{{ Form::submit('Siguiente', array('class' => 'btn btn-primary btn-block'))}}--}}
								<br>
				       			
				       			
		                        <!--Termina formulario-->
		                        {{ Form::close() }}
								</div> <!-- Botton de sig -->

		                	</div><!-- Termina id formulario -->
							
							
              		</div>

            	</div>
					<a class="ProcessCancel">
					<span class="fa-stack fa-2x pull-right" style="margin-top:10px; margin-right:15px;" title="Cancelar Proceso">
					<i class="fa fa-square  fa-stack-2x fa-inverse"></i>
					<i class="fa fa-sign-out fa-stack-1x text-black"></i>
					</span>
					</a>	
            </div>
        </div>
            
    <!-- Modales-->
 	@include('includes.Modales.CancelarProceso')
 


  </section>
	
	<!-- Messages-->
 	@include('includes.Messages.MessageSeccionSuccess')
 	@include('includes.Messages.MessageError')
 	@include('includes.Messages.MessageStartProcess')
 	

<script>
	
$(document).ready(function(){

    $('input[type="button"]').attr('disabled','disabled');

     $('#formularioproyecto').on('keyup',function()
     {
        if(
            $('#campo0').val() !='' 
            &&  
            $('#campo1').val() !=''
          	&&
          	$('#campo4').val() !=''
          	&&
          	$('#campo8').val() !=''
          	&&
          	$('#campo9').val() !=''
        ){
            $('input[type="button"]').removeAttr('disabled');
        }else{
         	$('input[type="button"]').attr('disabled','disabled');
        }

     });

    $('#btnproyecto').on('click',function()
    {
    	var MyRegExp = /ya ha sido registrado/;
    	$.ajax({
          url: '1',
          dataType: 'json',
          type:'POST',
          data: $('#formproyectos1').serialize(), //Se obtienen los datos del formulario
           
            success: function(datos)
            {
             
             
              $('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4 ,#_campo5 ,#_campo6 ,#_campo7 ,#_campo8 ,#_campo9 ,#_campo10 ,#_campo11 ,#_campo12').text('');
                if(datos.success == false){
               
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#_mensaje').text(datos.message);
                  $('.MessageError').modal('show');	
                  

		                if(MyRegExp.test(value)){
		          			$('#_campo1').text(datos.message2);
		          			
		          		}

                });
                }else{
                  $('#_mensaje,#_campo1').text('');
                  document.getElementById('formproyectos1').reset();
                  $('.MessageSeccionSuccess').modal('show');
                  setTimeout(function(){window.location.href='2'} , 1500);  
                  
                
                  
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            	if (XMLHttpRequest.status === 500) {
            		alert('El folio que ha decidido tomar , ya existe. Favor de seleccionar otro # de Folio.')
			        $('#_campo1').text('Favor de cambiar el folio');
			    }else{
            	 	//console.log("Algo esta mal");
				    //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
				    //console.log(XMLHttpRequest.statusText);
				    //console.log(textStatus);
				    //console.log(errorThrown);
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
          		window.location.href = '../../proyectos'; 
          });


    });

  });
</script>

@stop
