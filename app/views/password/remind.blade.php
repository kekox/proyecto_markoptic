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
							<small>{{HTML::link('/',' ',array('class' => 'fa fa-arrow-circle-left fa-2x color-black pull-left' ))}}</small>

							  <h3 class="panel-title">Recuperar contraseña 
							    <i class="fa fa-wrench"></i>
							  </h3>

						  </div>

						  <div class="panel-body">
						   <h3 class="text-muted">Ingrese su correo electrónico:</h3>

						    @if(Session::has('message'))
							<center><p class="alert alert-warning">{{ Session::get('message') }}</p></center>
							@endif
							
							 {{ Form::open(array(
			                	'route' => 'account.reset',
			                	'class' => 'form-horizontal', 
			                	'role' => 'form')) }}

							<!-- Email -->
							<div class="col-lg-8 col-lg-offset-2">
				                <div class="input-group" >
				                	<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-envelope"></i></span>
				                	{{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico','aria-describedby'=>'sizing-addon2')) }}
								</div>
								<span class="bg-errors display-errors">  {{ $errors->first('email') }}</span>
							</div>
				                

			                <!-- Login button -->
			                <div class="col-sm-5 col-lg-6 col-lg-offset-3">
			                 	<br>
			                        {{ Form::submit('Recuperar Contraseña', array('class' => 'btn btn-primary btn-block col-lg-3'))}} 
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

	<!--Footer-->
	@include('includes.footerStatic')

	<!--Scripts-->
	@include('includes.script')
</body>
</html>