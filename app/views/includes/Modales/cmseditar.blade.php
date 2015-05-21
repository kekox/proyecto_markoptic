<div class="modal fade" id="MyModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-pencil text-white"> Editar Usuario </span></h3></center>
                  </div>

                  <div class="modal-body">
                    <center><span id="mensaje" class=" display-errors" ></span></center>
                      <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'user.update',
                  'class' => 'form-horizontal', 
                  'role' => 'form',
                  'id'=>'formedit')) }}

                <!-- nombre -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('nombre_edit', Input::old('nombre'), array('class' => 'form-control', 'placeholder' => 'Nombre(s)')) }}
                </div>
                 

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_paterno_edit', Input::old('apellido_Paterno'), array('class' => 'form-control', 'placeholder' => 'Apellido Paterno')) }}
                </div>
     
               

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_materno_edit', Input::old('apellido_Materno'), array('class' => 'form-control', 'placeholder' => 'Apellido Materno')) }}
                </div>

       
                <!-- Email -->
                <div class="input-group separetedinput" >
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::email('email_edit', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico')) }}
                </div>
                

                 
                <!-- Perfil -->
                <div class="input-group separetedinput col-lg-6" >

                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
              
                {{ Form::select('perfil_edit',array(
                  '1' => 'Investigador',
                  '2' => 'Usuario',
                  '3' => 'Administrador'
                  ),'Usuario',array('class'=>'form-control')) }}
              
                </div>


                <input type="hidden" name="user_id" >

                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                     {{ Form::button('Close',array('class'=>'btn btn-default btn-block','data-dismiss'=>'modal'))}}
                     {{ Form::submit('Guardar', array('class' => 'btn btn-success btn-block ','id'=>'btncmseditguardar'))}}
                     </div>
                  </div>
                   {{ Form::close() }}
              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->