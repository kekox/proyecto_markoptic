@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')
	<section>
            <div id="dashboard1">

                <div class="col-lg-8 col-lg-offset-2">
			          <div class="heading">
			                    <center><h3>Dashboard</h3></center>
			                      @if (Session::has('message_welcome'))
			                      <center><div class="alert alert-success"><span class="fa fa-smile-o"></span><a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_welcome') }}</div></center>
			                  @endif
			                  @if (Session::has('message'))
			                      <center><div class="alert alert-danger"><span class="fa fa-smile-o"></span><a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message') }}</div></center>
			                  @endif
			                  @if(Session::has('message_exito'))
			                         <center><div class="alert alert-success"><span class="fa fa-smile-o"></span><a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_exito') }}</div></center>
			                      @endif

			                    </div>
			    </div>

                <section>
        			<div class="col-sm-12 col-md-12 col-md-offset-2 col-lg-10 col-lg-offset-2">
          
				          <a href="proyectos">
				          <div class="col-sm-12 col-md-4 col-lg-3 box">   
				              <h3>Proyectos</h3>
				                <div class="content">
				                  <center>
				                  <span class="fa-stack fa-5x">
				                  <i class="fa fa-circle  fa-stack-2x text-brown" ></i>
				                  <i class="fa fa-briefcase  fa-stack-1x fa-inverse"></i>
				                  </span></center>
				                </div>
				                 <div class="ft">
				                  <p><small><a href="proyectos">Pública un proyecto »</a></small></p>
				                </div>        
				          </div>
				          </a>
				      

				          <a href="chat" >
				          <div class="col-sm-12 col-md-4 col-lg-3 box">
				              <h3>Ayuda en Línea</h3>
				                <div class="content">
				                  <center>
				                  <span class="fa-stack fa-5x">
				                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
				                  <i class="fa fa-weixin  fa-stack-1x fa-inverse"></i>
				                  </span></center>
				                </div>
				                <div class="ft">
				                  <p><small><a href="chat">¿Dudas?. Resuelvelas con nuestros asesores »</a></small></p>
				                </div>

				          </div>
				          </a>

				          <a href="contacto" >
				          <div class="col-sm-12 col-md-4 col-lg-3 box">
				              <h3>Sugerencias</h3>            
				                <div class="content">
				                  <center>
				                  <span class="fa-stack fa-5x">
				                  <i class="fa fa-circle  fa-stack-2x text-blue" ></i>
				                  <i class="fa fa-envelope  fa-stack-1x fa-inverse "></i>
				                  
				                  </span></center>
				                </div>    
				                <div class="ft">
				                  <p><small><a href="contacto">Envíanos tus ideas! »</a></small></p>
				                </div>
				          </div>
				          </a>

			        </div>
      
    			</section>

                <section>
				    <div class="col-sm-12 col-md-4 col-lg-10 col-lg-offset-2">

				          <a href="cms" >
				          <div class="col-sm-12 col-md-4 col-lg-3 box">
				              <h3>Managent System</h3>
				                <div class="content">
				                  <center>
				                  <span class="fa-stack fa-5x">
				                  <i class="fa fa-circle  fa-stack-2x text-black"></i>
				                  <i class="fa fa-cogs  fa-stack-1x fa-inverse"></i>
				                  
				                  </span></center>
				                </div>
				                <div class="ft">
				                  <p><small><a href="cms">algun mensaje bonito aqui »</a></small></p>
				                </div>
				          </div>
				          </a>
				          

				          

				    </div>
    			</section>

                  	
                  	
            	
			</div>
            
    
  </section>

@stop
