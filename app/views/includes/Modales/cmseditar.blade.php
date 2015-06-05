<div class="modal fade" id="MyModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-green">
                    <button type="button" class="close btncmseditclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-pencil text-white"> Editar Usuario </span></h3></center>
                  </div>

                  <div class="modal-body">
                    <center><span id="mensajeupdate" class=" display-errors" ></span></center>
                      <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'user.update',
                  'class' => 'form-horizontal formedit', 
                  'role'  => 'form',
                  'id'    =>'formedit')) }}

                <!-- nombre -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Nombre(s)" name="nombre_edit" type="text">
                </div>
                <span class="display-errors" id="nombre_edit">  {{ $errors->first('nombre_edit') }}</span>
                 

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Apellido Paterno" name="apellido_paterno_edit" type="text">
                </div>
                <span class="display-errors" id="apellido_paterno_edit">  {{ $errors->first('apellido_paterno_edit') }}</span>
               

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Apellido Materno" name="apellido_materno_edit" type="text">
                </div>
                 <span class="display-errors" id="apellido_materno_edit">  {{ $errors->first('apellido_materno_edit') }}</span>
       
                <!-- Email -->
                <div class="input-group separetedinput" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input class="form-control" placeholder="Correo Electronico" name="email_edit" type="email">
                </div>
                 <span class="display-errors" id="email_edit">  {{ $errors->first('email_edit') }}</span>

                 
                <!-- Perfil -->
                <div class="input-group separetedinput col-lg-6" >

                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                   <select class="form-control" name="perfil_edit">
                     <option value="1">Investigador</option>
                     <option value="2">Usuario</option>
                     <option value="3">Administrador</option>
                   </select>
                </div>
                <span class="display-errors" id="perfil_edit">  {{ $errors->first('perfil_edit') }}</span>

                <div class="input-group separetedinput" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control password_edit" placeholder="Contraseña" name="password_edit" type="text" value="">
                       
                </div>
                <span class="display-errors" id="password_edit">  {{ $errors->first('password_edit') }}</span>

                <input type="hidden" name="user_id" >

                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                      <button class="btn btn-default btn-block btncmseditclose" data-dismiss="modal" type="button" >Close</button>
                      <input class="btn btn-success btn-block " id="btncmsupdate" type="button" value="Guardar">
                     </div>
                  </div>
                   {{ Form::close() }}
              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->