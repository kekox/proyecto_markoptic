<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-user-plus"> Agregar Usuario</span></h3></center>
                  </div>

                  <div class="modal-body">
                    <center><span id="mensaje" class=" display-errors" ></span></center>
                      <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'user.store',
                  'class' => 'form-horizontal', 
                  'role' => 'form',
                  'id'=>'formcmsadd')) }}

                <!-- nombre -->
                <div class="input-group separetedinput " >
                    <span class="input-group-addon "><i class="glyphicon glyphicon-user "></i></span>
                        {{ Form::text('nombree', Input::old('nombre'), array('class' => 'form-control', 'placeholder' => 'Nombre(s)')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_nombree">  {{ $errors->first('nombree') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_paternoo', Input::old('apellido_paternoo'), array('class' => 'form-control', 'placeholder' => 'Apellido Paterno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_paternoo">  {{ $errors->first('apellido_paternoo') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_maternoo', Input::old('apellido_maternoo'), array('class' => 'form-control', 'placeholder' => 'Apellido Materno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_maternoo">  {{ $errors->first('apellido_maternoo') }}</span>
                
       
                <!-- Email -->
                <div class="input-group separetedinput" >
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico')) }}
                </div>
                <span class="bg-danger" id="_email">  {{ $errors->first('email') }}</span>

                <!-- Perfil -->
                <div class="input-group separetedinput col-lg-6" >

                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
              
                {{ Form::select('perfil',array(
                  '1' => 'Investigador',
                  '2' => 'Usuario',
                  '3' => 'Administrador'
                  ),'Usuario',array('class'=>'form-control')) }}
              
                </div>
                
                <span class="bg-danger" id="_perfil">  {{ $errors->first('perfil') }}</span>
                

                <!-- Password -->
                <div class="input-group separetedinput" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
                       
                </div>
                <span class="bg-danger" id="_password">  {{ $errors->first('password') }}</span>


                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                     {{ Form::input('button',null,'Close',array('class'=>'btn btn-default btn-block','data-dismiss'=>'modal','id'=>'btncmsclose'))}}
                     {{ Form::input('button',null,'Crear Usuario', array('class' => 'btn btn-primary btn-block ','id'=>'btncsmadd'))}}
                     </div>
                  </div>
                   {{ Form::close() }}
              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->