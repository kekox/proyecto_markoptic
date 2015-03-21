@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

	<section>



			<div class="jumbotron schema-white" style="margin-bottom:-30px;">
				<div class="container " >

					
						<span>
							<img src="img/bienvenida.jpg" alt="" class="img-responsive">
						</span>
						<br>
					
						<span>
							<center><button type="btn" class="btn btn-primary btn-lg">{{ HTML::link('dashboard', ' ir al Dashboard',array('class' => 'welcome')); }}</button></center>
						</span>
				
					
					<br>
				</div>	
			</div>

				
            	
  	</section>

@stop
