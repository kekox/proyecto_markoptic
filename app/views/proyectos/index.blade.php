@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

  <section >
            <div class="container-fluid">
              <div class="row">
                  <div id="dashboardproyectos" class="grid-dashboard-proyecto">
                  		<center><h3>Proyectos</h3></center>
                  		@if(Session::has('message_exito'))
	                      <center><span class="display-info">{{ Session::get('message_exito') }}</span></center>
	                      <br>
	                      @endif
                  		<center><span id="_mensaje" class="display-info" ></span></center>
                  	
                  	<div class="col-sm-9 col-sm-offset-2 col-md-9 col-md-offset-2 col-lg-9 col-lg-offset-2 ">
                  		

		                  	<div  class="col-sm-5 col-md-5 col-lg-5 gridproyectos" >
		                  		<center><img id="agregar" style="margin-top:10px;" src="img/add.png" alt=""></center>
		                  		<center><h3>{{HTML::link('proyectos/seccion/1','Agregar')}}</h3></center>             		
		                  	</div>

		                  	<div class="col-sm-5 col-md-5 col-lg-5 gridproyectos">
		                  		<center><img id="ver" style="margin-top:10px;" src="img/ver.png" alt=""></center>
		                  		<center><h3>{{HTML::link('proyectos','Ver')}}</h3></center> 
		                  	</div>
						

		                  	<div class="col-sm-5 col-md-5 col-lg-5 gridproyectos" >
		                  		<center><img id="buscar" style="margin-top:10px;" src="img/buscar.png" alt=""></center>
		                  		<center><h3>{{HTML::link('proyectos','Buscar')}}</h3></center> 
		                  	</div>

		                  	<div class="col-sm-5 col-md-5 col-lg-5 gridproyectos">
		                  		<center><img id="eliminar" style="margin-top:10px;" src="img/delete.png" alt=""></center>
		                  		<center><h3>{{HTML::link('proyectos/delete','Eliminar')}}</h3></center> 
		                  	</div>
						
				    </div>
                
                      

            	</div>
            </div>
        </div>
            
    
  </section>
@stop
