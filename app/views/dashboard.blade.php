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

    			@if(isset($perfiles))
	    			@foreach($perfiles as $perfil)
	    				@if($perfil->id_perfil==3)
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
		    									<p><small><a href="cms">Manejador de usuarios »</a></small></p>
		    								</div>
									</div>
								</a>
							</div>
						</section>
						@endif
						@endforeach
				@endif
                  	
                  	
            	
			</div>
            
			    
  </section>
	
	@if(Session::has('message'))
  		{{ "<script>
			  $(document).ready(function()
			  {
			    $('.MessageDenegado').modal('show');
			  });
		   </script>"}}
      

    @elseif(Session::has('message_bienvenida'))
  		{{ "<script>
			  $(document).ready(function()
			  {
			    $('.MessageBienvenidaPersonal').modal('show');
			  });
		   </script>"}}
      

    @elseif(Session::has('message_perfil'))
  		{{ "<script>
			  $(document).ready(function()
			  {
			    $('.MessagePerfil').modal('show');
			  });
		   </script>"}}
	@elseif(Session::has('message_contrasena'))
  		{{ "<script>
			  $(document).ready(function()
			  {
			    $('.MessageContrasena').modal('show');
			  });
		   </script>"}}
	@endif

  <!--Mensajes-->
    @include('includes.Messages.MessageDenegado')
    @include('includes.Messages.MessageBienvenidaPersonal')
    @include('includes.Messages.MessagePerfil')
    @include('includes.Messages.MessageContrasena')
   
@stop
