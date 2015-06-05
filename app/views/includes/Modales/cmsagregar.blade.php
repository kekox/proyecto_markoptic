<div class="modal fade" id="myModalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header bg-primary">
                      <button type="button" class="close btncmsaddclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-user-plus"> Agregar Usuario</span></h3></center>
                  </div>

                  <div class="modal-body">
                    <center><span id="mensaje" class=" display-errors" ></span></center>
                      <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'user.store',
                  'class' => 'form-horizontal', 
                  'role'  => 'form',
                  'id'    =>'formcmsadd')) }}

                <!-- nombre -->
                <div class="input-group separetedinput " >
                    <span class="input-group-addon "><i class="glyphicon glyphicon-user "></i></span>
                    <input class="form-control" placeholder="Nombre(s)" name="nombre" type="text">
                </div>
                 <!--Errores-->
                <span class="display-errors" id="nombres">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Apellido Paterno" name="apellido_paterno" type="text">
                </div>
                 <!--Errores-->
                <span class="display-errors" id="apellido_paterno">  {{ $errors->first('apellido_paternoo') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Apellido Materno" name="apellido_materno" type="text">
                </div>
                 <!--Errores-->
                <span class="display-errors" id="apellido_materno">  {{ $errors->first('apellido_maternoo') }}</span>
                
       
                <!-- Email -->
                <div class="input-group separetedinput" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input class="form-control" placeholder="Correo Electrónico" name="email" type="email">
                </div>
                <!--Errores-->
                <span class="display-errors" id="email">  {{ $errors->first('email') }}</span>

                <!-- Perfil -->
                <div class="input-group separetedinput col-lg-6" >

                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                 <select class="form-control" name="perfil">
                   <option value="1">Investigador</option>
                   <option value="2">Usuario</option>
                   <option value="3">Administrador</option>
                 </select>
                </div>
                
                <span class="display-errors" id="perfil">  {{ $errors->first('perfil') }}</span>
                

                <!-- Password -->
                <div class="input-group separetedinput" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                       
                </div>
                <span class="display-errors" id="password">  {{ $errors->first('password') }}</span>


                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                     <input class="btn btn-default btn-block btncmsaddclose" data-dismiss="modal" type="button" value="Close">
                     <input class="btn btn-primary btn-block " id="btncsmadd" type="button" value="Crear Usuario">
                     </div>
                  </div>
                   {{ Form::close() }}

              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
</div><!--Termina modal fade-->