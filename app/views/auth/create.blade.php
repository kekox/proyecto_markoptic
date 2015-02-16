@extends('layout.master')
 
@section('contenido')
@section('contenido')
    
    <div class="row ">
	    <div class="col-md-12">
	        <div class="panel panel-success">
	            <div class="panel-heading">
	                <div class="panel-title">Crear Usuario</div>
	                 <div style="float:right; font-size: 90%; position: relative; top:-20px"><a class="text-success"  href="#">¿Olvide mi contraseña?</a></div>
	            </div>
	            <div class="panel-body ">
				@if (Session::has('message'))
				    <div class="alert alert-info">{{ Session::get('message') }}</div>
				@endif

	            {{ Form::open(array('url' => 'create','class' => 'form-horizontal', 'role' => 'form')) }}
		 <!-- Email -->
	    <div class="input-group" style="margin-bottom:10px">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
	    </div>{{ $errors->first('nombre') }}
	   
	    <!-- Email -->
	    <div class="input-group" style="margin-bottom:10px">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
	            {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico')) }}
	    </div>{{ $errors->first('email') }}

	    <!-- Password -->
	    <div class="input-group" style="margin-bottom:10px">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
	           
	    </div>{{ $errors->first('password') }}
	            
	                
	    <!-- Login button -->

	            {{ Form::submit('Iniciar Sesion', array('class' => 'btn btn-primary btn-block'))}}
	            {{ Form::close() }}

	        </div>
	    </div>
	    </div>
    
    </div> 

@stop
@stop