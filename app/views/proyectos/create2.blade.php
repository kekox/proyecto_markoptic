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
                  		
                  		<center><h3>Formulario - Sección 2/7</h3></center>

						          <!--Formulario-->
                    <div id="formulario" class="space">
                        {{ Form::open(array('url' => 'proyectos/agregar2','class' => 'form-horizontal', 'role' => 'form')) }}
                        
                         
                
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
