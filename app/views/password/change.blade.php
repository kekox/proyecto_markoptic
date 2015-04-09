@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

  <section>
  <div id="bg-change-password">
      <div class="container">
        <div class="row"> 

    <!--********************************************************************************************************-->
            <div id="change-password">
              <div class="col-lg-8 col-lg-offset-2">

                  <div class="panel panel-success">

                    <div class="panel-heading">
                      <center><h2 class="panel-title">Cambiar Contraseña  <i class="fa fa-exchange"></i></h2></center>              
                       {{ Form::Open(array(
                        'route' => 'password.change.post',
                        'class' => 'form-horizontal', 
                        'role' => 'form',
                        
                       ))}}
                    </div>
                     @if(Session::has('message_fail'))
                      <center><span class="display-errors">{{ Session::get('message_fail') }}</span></center> 
                    @endif
                    @if(Session::has('message_fail2'))
                      <center><span class="display-errors">{{ Session::get('message_fail2') }}</span></center> 
                    @endif

                    <div class="panel-body">
                      <div class="col-lg-8 col-lg-offset-2">
                        <div class="input-group separetedinput">
                              <span class="input-group-addon schema-light-teal" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                            {{Form::password('password_anterior',array('class'=>'form-control','placeholder'=>'Contraseña Anterior','aria-describedby'=>'basic-addon1'))}}
                        </div>
                        <span class=" display-errors"  id="_password_anterior">  {{ $errors->first('password_anterior') }}</span>

                        <div class="input-group separetedinput">
                            <span class="input-group-addon schema-light-teal" id="basic-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                            {{Form::password('password',array('class'=>'form-control','placeholder'=>'Contraseña Nueva','aria-describedby'=>'basic-addon2'))}}
                        </div>
                        <span class=" display-errors"  id="_password">  {{ $errors->first('password') }}</span>

                        <div class="input-group separetedinput">
                            <span class="input-group-addon schema-light-teal" id="basic-addon3"><i class="glyphicon glyphicon-lock"></i></span>
                            {{Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'Repetir Contraseña Nueva','aria-describedby'=>'basic-addon3'))}}
                        </div>
                        <span class=" display-errors"  id="_password_confirmation">  {{ $errors->first('password_confirmation') }}</span>

                        <div>
                            <div class="auxfot">
                              <div class="form-inline">
                                <div class="form-group">
                              {{ Form::submit('Cambiar contraseña', array('class' => 'btn btn-primary btn-sm  '))}}
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              {{ HTML::link('dashboard','Ir al dashboard',array('class'=>'btn btn-success btn-sm'))}}
                        
                                </div>
                              </div>
                            </div>
                        </div>
                          {{ Form::close() }}
                      </div>
                     
                    </div>
                  </div>

                   
              </div>
            </div>
       <!--********************************************************************************************************-->

        </div>
      </div>    
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
       
        
        
        
        <p style="color:transparent;">a</p>  
                 
        
  </div>            
  </section>

@stop
