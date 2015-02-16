@extends('layout.master')
 
@section('contenido')
@section('contenido')
    
    <div class="row ">
	    <div class="col-md-12">
	        <div class="panel panel-success">
	            <div class="panel-heading">
	                <div class="panel-title">Iniciar Sesion</div>
	                {{HTML::link('create','Crear usuario', array('style' =>'float:right; font-size: 90%; position: relative; top:-20px;','class' => 'text-success'))}}

	            </div>
	            <div class="panel-body ">
	            @if (Session::has('message'))
				    <div class="alert alert-danger">{{ Session::get('message') }}</div>
				@endif
	            {{ Form::open(array('url' => 'login','class' => 'form-horizontal', 'role' => 'form')) }}
	    <!-- Name -->
	    <div class="input-group" style="margin-bottom:10px">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
	            {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico')) }}
	    </div>{{ $errors->first('email') }}
	    <!-- Password -->
	    <div class="input-group" style="margin-bottom:10px">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
	           
	    </div>
				    {{ $errors->first('password') }}
				
	    
	           
	                
	    <!-- Login button -->

	            {{ Form::submit('Iniciar Sesion', array('class' => 'btn btn-primary btn-block'))}}
	            {{ Form::close() }}
	        </div>
	    </div>
	    </div>
    
    </div> 

@stop
@stop

