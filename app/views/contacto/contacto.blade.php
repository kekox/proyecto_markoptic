@extends('layout.master')
@section('title')
:: Dashboard
@stop 
@section('head')

@stop
 
@section('contenido')

  <section >
            <div class="container-fluid">
              <div class="row">
                 
                <div id="formproyectos" class="grid-form-1-proyecto">
                  	<div class="col-lg-8 col-lg-offset-2">
                  		
                  		<center><h3>Contacto</h3></center>
                      <small>{{HTML::link('dashboard',' ',array('class' => 'glyphicon glyphicon-arrow-left color-black' , 'id' =>'formcontacto'))}}</small>
                      {{-- Se despliegan los errores de acuerdo a su situacion--}}
                      @if (Session::has('message_alert'))
                        <div class="alert alert-danger"><span class="fa fa-exclamation-triangle"></span>{{ Session::get('message_alert') }}</div>
                        @elseif(Session::has('message_exito'))
                         <div class="alert alert-success" ><span class="fa fa-check-circle"></span>{{ Session::get('message_exito') }}</div>
                      @endif


                      {{ Form::open(array('url' => 'contacto','class' => 'form-horizontal', 'role' => 'form')) }}
                      <div class="form-group">
                          {{form::label('Nombre:')}}
                          {{Form::input('text','name',Input::old('name'),array('class' => 'form-control' , 'placeholder' =>'Nombre'))}}
                          <span class="bg-danger" id="_name"> {{ $errors->first('name') }} </span>
                      </div>
                     
                
                      <div class="form-group">
                          {{form::label('Email:')}}
                          {{Form::input('email','email',Input::old('email'),array('class' => 'form-control' , 'placeholder' =>'Corre Electronico'))}}
                           <span class="bg-danger" id="_email">{{ $errors->first('email') }}</span>

                      </div>
                     
                      <div class="form-group">
                          {{form::label('Asunto:')}}
                          {{Form::input('text','subject',null,array('class' => 'form-control' , 'placeholder' =>'Asunto del Mensaje'))
                          }}
                          <span class="bg-danger" id="_subject">{{ $errors->first('subject') }}</span>
                      </div>
                      

                      <div class="form-group">
                          {{form::label('Mensaje:')}}
                          {{Form::textarea('msg',null,array('class' => 'form-control' , 'placeholder' =>'Cuerpo del mensaje'))}}
                          <span class="bg-danger" id="_msg">{{ $errors->first('msg') }}</span>
                      </div>
                      
                      

            
                      {{Form::input('submit',null,'Enviar',array('class' =>'btn btn-primary','id'=> 'btncontact'))}}



                      {{ Form::close() }}

						

		                  	

              		</div>
            	</div>

            </div>
        </div>
            
    
  </section>
@stop
