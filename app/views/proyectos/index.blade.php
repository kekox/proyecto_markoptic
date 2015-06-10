@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

  <section>
            <div id="dashboard1">	
							

                <div class="col-lg-8 col-lg-offset-2">
			          <div class="heading">

			                    <center><h3>Proyectos</h3><small><a href="proyectos/seccion/1">(Agregar Proyecto)</a></small></center>

								<br>
			                    <div class="col-lg-8 col-lg-offset-2" >
	
			                    <!--Formulario-->
		                        {{ Form::open(array(
									'route'  => 'proyectosindex',
									'method' => 'GET',
									'class'  => 'form-horizontal', 
									'role'   => 'form',
		                           ))}}
		                        <center>
		                           <div class="input-group">
		                          	  <span class="input-group-btn">
								        <button class="btn btn-default" id="back" ><i class="fa fa-arrow-circle-left fa-1x color-black"></i></button>
								      </span>
								      <input type="text" class="form-control" placeholder="Indique el nombre o folio del proyecto a buscar..." name="buscar">
								      <span class="input-group-btn">
								        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
								      </span>
								    </div>
								</center>
							
                      			
                             	{{ Form::close() }}
								</div>
								
			          </div>
			    </div>
				
				

                <section>
        			<div class="col-sm-12 col-md-12 col-md-offset-2 col-lg-10 col-lg-offset-2">
          			<br>
				    @if(isset($proyectos))
				        @foreach($proyectos as $proyecto)
				          <div class="col-sm-12 col-md-4 col-lg-3 box">   
				              <div class="panel panel-success">

								  <div class="panel-heading " style="background-color:#159049;">
								    <h5 class="panel-title text-center text-white ">Folio: <strong>{{{$proyecto->folio}}}</strong></h5>
								  </div>

								  <div class="panel-body" style="margin-top:-20px;">
										<center>
										<span class="fa-stack fa-5x">
										<i class="fa fa-circle  fa-stack-2x fa-inverse"></i>
										<i class="fa fa-file-pdf-o  fa-stack-1x text-red"></i>
										
										</span></center>
										
										<center><strong>Nombre del proyecto:</strong><br>{{{$proyecto->nombre_proyecto}}}</center>
										<br>
										<center><strong>Agregado por:</strong><br>{{{$proyecto->nombre.' '.$proyecto->apellido_Paterno.' '.$proyecto->apellido_Materno}}} <br>{{date("d/m/Y",strtotime($proyecto->created_at))}}</center><br>

										<center><strong>Modalidad:</strong><br>{{{$proyecto->modalidad}}}</center>
										
									

								  </div>
											
											@if(isset($perfiles))
												@foreach($perfiles as $perfil)
													@if($perfil->id_perfil!=1)
								   <center>
								   <div class="panel-footer">
								   	 
								 {{-- {{HTML::link('','Editar',array('class'=>'btn btn-success btn-sm fa fa-pencil color-white','style'=>'color:white;'))}}--}}
											&nbsp;
											@if($perfil->id_perfil==3)
											<a href="proyectos/delete/{{$proyecto->folio}}" class="btn btn-danger btn-sm fa fa-trash-o hidden-xs text-white" data-toggle="modal" style="color:white;" onclick="myFunction()">Eliminar</a>
											@endif
                          				
                                  		
								   </div>
								   </center>
								  					 @endif
						    					@endforeach
											@endif
									
							  </div>     
				          </div>
							 
				        @endforeach
				    @endif
						
				          
      				</div><!-- Termina el box -->

			<div class="container">
				<center>{{$proyectos->appends(array("buscar"=> Input::get('buscar')))->links()}}</center>
			</div>
    			</section>

			</div>

  @if(Session::has('message_delete'))
      {{ "<script>
          $(document).ready(function()
          {
            $('.MessageDelete2').modal('show');
          });
         </script>"
      }}        
  @endif         
    	
    <!--Mensajes-->
  @include('includes.Messages.MessageDelete2')
  
  </section>

 								
@if(isset($perfiles))
									@foreach($perfiles as $perfil)
										@if($perfil->id_perfil==3)
									<a href="proyectos/list">
									<span class="fa-stack fa-2x pull-right" style="margin-top:10px; margin-right:15px; ">
									<i class="fa fa-square  fa-stack-2x fa-inverse"></i>
									<i class="fa fa-list fa-stack-1x text-black"></i>
									</span>
									</a>
										@endif
									@endforeach
								@endif	

<script>
	
$(document).ready(function(){

     $('#back').on('click',function()
     {
       window.history.back();

     });

});


</script>				  
@stop
