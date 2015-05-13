<div class="modal fade" id="MyModalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-pencil color-white"> Información de {{Auth::user()->nombre}} </span></h3></center>
                  </div>

                  <div class="modal-body">
                    
                      <!--Formulario-->
                {{ Form::open(array(
                  'class' => 'form-horizontal', 
                  'role' => 'form',
                  'id'=>'formedit')) }}

                <!-- nombre -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('nombre_edit', Input::old('nombre'), array('class' => 'form-control ', 'placeholder' => 'Nombre(s)','disabled')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_nombre">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_paterno_edit', Input::old('apellido_Paterno'), array('class' => 'form-control ', 'placeholder' => 'Apellido Paterno','disabled')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_paterno">  {{ $errors->first('apellido_paterno') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_materno_edit', Input::old('apellido_Materno'), array('class' => 'form-control ', 'placeholder' => 'Apellido Materno','disabled')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_materno">  {{ $errors->first('apellido_Materno') }}</span>
                
                <!-- Email -->
                <div class="input-group separetedinput" >
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::email('email_edit', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico','disabled')) }}
                </div>
                <span class="bg-danger" id="_email">  {{ $errors->first('email') }}</span>

                <input type="hidden" name="user_id" >

                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                     
                     {{ HTML::link('#MyModalEdit2', ' Editar',array('class'=>'btn btn-primary edit','data-toggle'=>'modal','data-dismiss'=>'modal','id'=>Auth::user()->id)); }}
                     {{ Form::button('Close',array('class'=>'btn btn-default','data-dismiss'=>'modal'))}}
                   
                     </div>
                  </div>
                   {{ Form::close() }}
              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->