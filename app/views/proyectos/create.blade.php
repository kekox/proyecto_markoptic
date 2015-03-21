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
                  		
                  		<center><h3>Formulario - Sección 1/7</h3></center>

						

		                  	<!--Formulario-->
				            <div id="formulario" class="space">
		                		{{ Form::open(array('route' => 'addseccion1','class' => 'form-horizontal', 'role' => 'form')) }}
		               			
		               			<section  class="form-group">
		               			<div class="col-lg-4 justify">
		               				<center><label for="exampleInputEmail3" >Email address</label></center>
		               			</div>
		               			<div class="col-lg-8 ">
		               				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
		               			</div>
								</section> 

								<section class="form-group">
		               			<div class="col-lg-4 justify">
		               				<center><label for="exampleInputEmail3" >Email address</label></center>
		               			</div>
		               			<div class="col-lg-8 ">
		               				<textarea type="text" class="form-control"  placeholder="Enter email"name="exampleInputEmail3" row="4"></textarea> 
		               			</div>
								</section> 

								<section class="form-group">
		               			<div class="col-lg-4 justify">
		               				<center><label for="exampleInputEmail3" >Email address</label><center>
		               			</div>
		               			<div class="col-lg-8 ">
		               				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
		               			</div>
								</section>   
								
								{{ Form::submit('Siguiente', array('class' => 'btn btn-primary btn-block col-lg-3 col-md-push-'))}}
		                        <!--Termina formulario-->
		                        {{ Form::close() }}

				       
		                	</div>

              		</div>
            	</div>

            </div>
        </div>
            
    
  </section>
@stop
