@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')
	<section >
            <div id="dashboard">
                <div class="grid-dashboard">
					<div class="col-lg-8 col-lg-offset-2">
                  	<center><h3>Dashboard</h3></center>
                  		@if (Session::has('message_welcome'))
			                <center><div class="alert alert-success"><span class="fa fa-smile-o"></span><a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_welcome') }}</div></center>
			            @endif
			            @if (Session::has('message'))
			                <center><div class="alert alert-danger"><span class="fa fa-smile-o"></span><a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message') }}</div></center>
			            @endif

                  	</div>
                  <div class="col-sm-12 col-md-12 col-md-offset-2 col-lg-10 col-lg-offset-2">
                  		
 
		                  	<div id="proyectos" class="col-sm-12 col-md-4 col-lg-3 grid ">
		                  		<center style="margin-top:10px;"><img src="../img/dashboard/project1.png" alt="Proyectos" class="img-responsive" ></center>
		                  		<center><h3>{{HTML::link('proyectos','Proyectos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;')}}</h3></center>
		                  			
		                  	</div>

		                  	<div id="chat" class="col-sm-12 col-md-4 col-lg-3 grid ">
		                  		<center style="margin-top:10px;"><img src="../img/dashboard/chat.png" alt="Chat en linea" class="img-responsive"></center>
		                  		<center><h3>{{HTML::link('chat','Ayuda en Línea')}}</h3></center>
		                  		
		                  		
							</div>

		                  	<div id="sugerencias" class="col-sm-12 col-md-4 col-lg-3 grid ">
		                  		<center style="margin-top:10px;"><img src="../img/dashboard/email.png" alt="Dudas y Sugerencias" class="img-responsive"></center>
		                  		<center><h3>{{HTML::link('contacto','Sugerencias &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;')}}</h3></center>
		                  		
		                  	</div>
							
                  	</div>

                  	<div class="col-sm-12 col-md-12 col-md-offset-2 col-lg-10 col-lg-offset-2">
							<div id="preferences" class="col-sm-12 col-md-4 col-lg-3 grid ">
		                  		<center style="margin-top:10px;"><img src="../img/dashboard/cms.png" alt="Content Manangent System" class="img-responsive"></center>
		                  		<center><h3>{{HTML::link('cms','Managent System')}}</h3></center>
		                  		
		                  	</div>
                  	</div>
                  	
            	</div>
			</div>
            
    
  </section>

@stop
