<!DOCTYPE html>
<html>
<!--Head-->
@include('includes.head')
<body>
	
	<!--Nav-->
    @include('includes.headerStatic')

	<!--Content-->
	<div id="resetpass">
	
			<div class="container">
				<div class="row">
					<div class="content col-lg-8 col-lg-offset-2">
						<div class="panel panel-success ">

						  <div class="panel-heading">
							<a href="../" class="fa fa-arrow-left fa-2x color-black pull-left" style="text-decoration:none; color:#3C763D;"></a>
							  <h3 class="panel-title montserrat">Recuperar contraseña 
							    <i class="fa fa-wrench"></i>
							  </h3>

						  </div>

						  <div class="panel-body">
						   <h3 class="roboto">Ingrese su correo electrónico:</h3>

						    @if(Session::has('message_invalid'))
							<center><p class="display-errors">{{ Session::get('message_invalid') }}</p></center>
							@endif
							
							 {{ Form::open(array(
			                	'route' => 'account.reset',
			                	'class' => 'form-horizontal', 
			                	'role' => 'form')) }}

							<!-- Email -->
							<div class="col-lg-8 col-lg-offset-2">
				                <div class="input-group" >
				                	<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-envelope"></i></span>
				                	<input class="form-control" placeholder="Correo Electronico" aria-describedby="sizing-addon2" name="email" type="email"/>
								</div>
								<span class="bg-errors display-errors">  {{ $errors->first('email') }}</span>
							</div>
				                

			                <!-- Login button -->
			                <div class="col-sm-5 col-lg-6 col-lg-offset-3">
			                 	<br>
			                 	<input class="btn btn-primary btn-block col-lg-3 montserrat-btn" type="submit" value="Recuperar Contraseña"/>
			                 	<a href="/" class="btn btn-success  btn-block col-lg-3 montserrat-btn">Inicio</a>
			                        
			                    <br>
			                </div>

							{{ Form::close() }}

						  </div>
						   <br>
						   <br>
						   
						</div>
					</div>
				</div>
			</div>
		
		
			


		
		
	

	</div><!--Termina el content-->
	@if(Session::has('message_invalid'))            
      {{ "<script>
        $(document).ready(function()
        {
          $('.MessageInvalid').modal('show');
        });
       </script>"}}
    @elseif(Session::has('message_fail'))            
      {{ "<script>
        $(document).ready(function()
        {
          $('.MessageError').modal('show');
        });
       </script>"}}
    @endif

	<!--Mensajes-->
    @include('includes.Messages.MessageInvalid')
    @include('includes.Messages.MessageError')
	
	<!--Footer-->
	@include('includes.footerStatic')

	<!--Scripts-->
	@include('includes.script')
</body>
</html>