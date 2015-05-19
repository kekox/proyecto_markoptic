@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')
	<section>
            <div id="dashboard1">

                <div class="col-lg-8 col-lg-offset-2">
			          <div class="heading">
			                    <center><h3>Proyectos</h3></center>

			          </div>
			    </div>

                <section>
        			<div class="col-sm-12 col-md-12 col-md-offset-2 col-lg-10 col-lg-offset-2">
          
				        @if(isset($proyectos))
				           @foreach($proyectos as $proyecto)
				          <div class="col-sm-12 col-md-4 col-lg-3 box">   
				              <div class="panel panel-success">

								  <div class="panel-heading">
								    <h5 class="panel-title text-center">Folio: <strong>{{{$proyecto->folio}}}</strong></h5>
								  </div>

								  <div class="panel-body">
									    <center>
					                  <span class="fa-stack fa-5x">
					                  <i class="fa fa-circle  fa-stack-2x fa-inverse"></i>
					                  <i class="fa fa-file-pdf-o  fa-stack-1x text-red"></i>
					                  
					                  </span></center>
									
									<center>Nombre del proyecto:<br>{{{$proyecto->nombre_proyecto}}}</center>
								  </div>
									
									@if(isset($perfiles))
										@foreach($perfiles as $perfil)
											@if($perfil->id_perfil!=1)
								   <center>
								   <div class="panel-footer">
								   	
								  {{HTML::link('','Editar',array('class'=>'btn btn-success btn-sm fa fa-pencil t'))}}
                                  &nbsp;
                                  				@if($perfil->id_perfil==3)
                                  {{HTML::link('','Eliminar',array('class'=>'btn btn-danger btn-sm fa fa-trash-o '))}}</td> 
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

				          
      				</div>
    			</section>

				
              
                  	
                  	
            	
			</div>
            
    
  </section>

@stop
