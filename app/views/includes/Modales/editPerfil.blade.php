 <!-- Modal Editar Informacion-->
           <div class="modal fade" id="MyModalEdit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-pencil text-white"> Información de {{Auth::user()->nombre}} </span></h3></center>
                  </div>

                  <div class="modal-body">
                    
                      <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'user.update.perfil',
                  'class' => 'form-horizontal', 
                  'role' => 'form',
                  'id'=>'formedit')) }}

                <!-- nombre -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control " placeholder="Nombre(s)" name="nombre_edit" type="text"/>
                </div>
                 <!--Errores-->
                <span class="display-errors" id="_nombre">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control " placeholder="Apellido Paterno" name="apellido_paterno_edit" type="text"/>
                </div>
                 <!--Errores-->
                <span class="display-errors" id="_apellido_paterno">  {{ $errors->first('apellido_paterno') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control " placeholder="Apellido Materno" name="apellido_materno_edit" type="text"/>
                </div>
                 <!--Errores-->
                <span class="display-errors" id="_apellido_materno">  {{ $errors->first('apellido_Materno') }}</span>

                <input type="hidden" name="user_id" >

                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                      <a href="password/change" class="pull-left">Cambiar contraseña</a>
                       <input class="btn btn-primary" id="btnedit" type="submit" value="Guardar"/>
                       <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                    </div>
                  </div>
                   {{ Form::close() }}
              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->