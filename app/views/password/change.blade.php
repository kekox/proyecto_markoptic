@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

  <section>

      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-8 col-lg-offset-2 space">

                <div class="panel panel-success">

                  <div class="panel-heading">
                    <center><h2 class="panel-title">Cambiar Contraseña</h2></center>
                     {{ Form::Open(array(
                      'class' => 'form-horizontal', 
                      'role' => 'form',
                      
                     ))}}
                  </div>

                  <div class="panel-body">
                    <div class="col-lg-8 col-lg-offset-2">

                        <div class="input-group separetedinput">

                          <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>

                          {{Form::password('password_anterior',array('class'=>'form-control','placeholder'=>'Contraseña Anterior','aria-describedby'=>'basic-addon1'))}}
                          
                          <span class="input-group-addon" ><i class="fa fa-info-circle"data-toggle="tooltip" data-placement="left" title="Tooltip on left" ></i></span>
                          
                        </div>


                        <div class="input-group separetedinput">
                          <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>

                          {{Form::password('password_nuevo',array('class'=>'form-control','placeholder'=>'Contraseña Nueva','aria-describedby'=>'basic-addon1'))}}

                          <span class="input-group-addon"><i class="fa fa-info-circle" ></i></span>

                        </div>

                        <div class="input-group separetedinput">
                          <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                          {{Form::password('password_nuevo_repeat',array('class'=>'form-control','placeholder'=>'Repetir Contraseña Nueva','aria-describedby'=>'basic-addon1'))}}
                          <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                        </div>

                        <div>
                          <center>{{ Form::submit('Cambiar contraseña', array('class' => 'btn btn-primary btn-sm  '))}}</center>
                          {{ Form::close() }}
                        </div>
                    </div>
                   
                  
                  </div>

                  

                 </div>
          </div>
        </div>
      </div>

      
        
              
  </section>

@stop
