
@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

  <section >
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                  		
                  		                                <center><h3 class="titulo">Content Managent System</h3></center>
                    @if(Session::has('message_delete'))
                       <div class="alert alert-warning"><center><span class="fa fa-check-circle"></span>
                       <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_delete') }}</center></div>
                    @elseif(Session::has('message_delete'))
                       <div class="alert alert-warning"><center><span class="fa fa-check-circle"></span>
                       <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_delete') }}</center></div>
                    @elseif(Session::has('message_edit'))
                       <div class="alert alert-success"><center><span class="fa fa-check-circle"></span>
                       <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_edit') }}</center></div>
                    @endif

                      <button class="btn btn-primary btn-sm pull-right opensans" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Agregar Usuario</span></button>

                      <br>
                      <br>

                      <table id="example" class="table table-hover responsive" cellspacing="0" width="100%">
                          
                          <thead class="schema-navy-blue color-white">
                              <tr>
                                  <th><center>ID</center></th>
                                  <th><center>Nombre(s)</center></th>
                                  <th><center>Apellido(s)</center></th>
                                  <th><center>Correo</center></th>
                                  <th><center>Perfil</center></th>
                                  <th><center>Última modificación</center></th>
                                  <th><center>Opciones</center></th>

                              </tr>
                          </thead>
 
 
                          <tbody>
                              @if($users)
                                @foreach($users as $user)
                              <tr class="opensans">
                                  <td><center>{{$user->id}}</center></td>
                                  <td><center>{{$user->nombre}}</center></td>
                                  <td><center>{{$user->apellido_Paterno." ".$user->apellido_Materno}}</center></td>
                                  <td><center>{{$user->email}}</center></td>
                                  <td><center>{{$user->id_perfil}}</center></td> 
                                  <td><center>{{$user->updated_at}}</center></td> 
                                  <td><center>
                                  {{HTML::link('#MyModalEdit',' Editar',array('class'=>'btn btn-success btn-sm fa fa-pencil edit','data-toggle'=>'modal','title'=>$user->id))}}
                                  &nbsp;
                                  {{HTML::link('#MyModalDelete',' Eliminar',array('class'=>'btn btn-danger btn-sm fa fa-trash-o ','data-toggle'=>'modal','title'=>$user->id))}}</center></td> 
                                 
                                             
                              </tr>
                              @endforeach 
                          </tbody>
                            @endif
                      </table>
		                  	  

              	</div>
            	</div>
            </div>
          



            <!-- 
          ********************************************************************************************************************** 
          ********************************************************************************************************************** 
          **********************************************************************************************************************
          **********************************************************************************************************************
          **********************************************************************************************************************
          -->


          <!-- Modal Agregar-->
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
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder' => 'Nombre(s)')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_nombre">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_paterno', Input::old('apellido_paterno'), array('class' => 'form-control', 'placeholder' => 'Apellido Paterno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_paterno">  {{ $errors->first('apellido_paterno') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_materno', Input::old('apellido_materno'), array('class' => 'form-control', 'placeholder' => 'Apellido Materno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_materno">  {{ $errors->first('apellido_materno') }}</span>
                
       
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
                  '1' =>'Usuario',
                  '2' => 'Investigador',
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


          <!-- 
          ********************************************************************************************************************** 
          ********************************************************************************************************************** 
          **********************************************************************************************************************
          **********************************************************************************************************************
          **********************************************************************************************************************
          -->


           <!-- Modal Editar-->
          <div class="modal fade" id="MyModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-pencil color-white"> Editar Usuario </span></h3></center>
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
                 <!--Errores-->
                <span class="bg-danger" id="_nombre">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_paterno_edit', Input::old('apellido_Paterno'), array('class' => 'form-control', 'placeholder' => 'Apellido Paterno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_paterno">  {{ $errors->first('apellido_paterno') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_materno_edit', Input::old('apellido_Materno'), array('class' => 'form-control', 'placeholder' => 'Apellido Materno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_materno">  {{ $errors->first('apellido_Materno') }}</span>
                
       
                <!-- Email -->
                <div class="input-group separetedinput" >
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::email('email_edit', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico')) }}
                </div>
                <span class="bg-danger" id="_email">  {{ $errors->first('email') }}</span>

                <!-- Perfil -->
                <div class="input-group separetedinput col-lg-6" >

                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
              
                {{ Form::select('perfil_edit',array(
                  '1' =>'Usuario',
                  '2' => 'Investigador',
                  '3' => 'Administrador'
                  ),'Usuario',array('class'=>'form-control')) }}
              
                </div>
                
                <span class="bg-danger" id="_perfil">  {{ $errors->first('perfil') }}</span>

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

          
          <!-- 
********************************************************************************************************************** 
********************************************************************************************************************** 
**********************************************************************************************************************
**********************************************************************************************************************
**********************************************************************************************************************
          -->


          <!-- Modal Eliminar-->
          <div class="modal fade" id="MyModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-red">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-trash-o color-white"> Eliminar Usuario</span></h3></center>
                  </div>

                  <div class="modal-body">
                    
                  <center><strong>¿Realmente desea eliminar este usuario?</strong></center>


                  </div> <!--Termina el modal body-->

                 
                  
                  @if(isset($user))
                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                      {{Form::button('Close',array('class'=>'btn btn-default btn-block','data-dismiss'=>'modal'))}}
                      {{HTML::link('cms/delete/'.$user->id,'Eliminar',array('class' =>'btn btn-danger btn-block btn-sm'))}}
                    </div>
                  </div>
                  @endif
                  
                  
                  

              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->


  <!-- 
********************************************************************************************************************** 
********************************************************************************************************************** 
**********************************************************************************************************************
**********************************************************************************************************************
**********************************************************************************************************************
  -->
       
                  
                  




  <!-- 
********************************************************************************************************************** 
********************************************************************************************************************** 
**********************************************************************************************************************
**********************************************************************************************************************
**********************************************************************************************************************
  -->
  


 
 <input id="val" type="hidden" name="user" class="input-block-level" value="" >
  <script>
    $(document).ready( function () {
    $('#example').DataTable();
    responsive: true
    });
  </script>

    <!-- 
          ********************************************************************************************************************** 
          ********************************************************************************************************************** 
          **********************************************************************************************************************
          **********************************************************************************************************************
          **********************************************************************************************************************
  -->
  
  <script>
  $(function(){
  
      function send_ajax()
      {

        $.ajax({
          url: 'cms',
          dataType: 'json',
          type:'post',
          data: $('#formcmsadd').serialize(), //Se obtienen los datos del formulario


            success: function(datos)
            {
              
              //Donde se vana  mostrar los errores
              $('#_nombre ,#_apellido_paterno, #_apellido_materno, #_email, #_perfil, #_password ').text('');

                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                $.each(datos.errors, function(index, value)
                {
                  
                  $('#_'+index).text(value);
                  $('#mensaje').text("Verifica los datos*");
                
                });
                  
                }
                //Si la respuesta del ajax es verdadero se hace esto
                else
                {
                  $('#mensaje').text("Agregado con éxito");
                  window.location = 'cms';
                }
            },

           
        });
      }

      function limpiar(){
        document.getElementById('formcmsadd').reset();
        $('#formcmsadd > span').empty();
        $('#mensaje').empty();
        
      }

        //Se mandaa a llamar las funciones
        $('#btncsmadd').on('click',function()
        {
            send_ajax();
            
        });

        $('#btncmsclose').on('click',function()
        {
            limpiar();
            
        });
  });
</script>

  <!-- 
          ********************************************************************************************************************** 
          ********************************************************************************************************************** 
          **********************************************************************************************************************
          **********************************************************************************************************************
          **********************************************************************************************************************
  -->

  <script>
  $(document).ready(function(){

        //Se mandaa a llamar las funciones
        $('.edit').on('click',function()
        {
           var id = $(this).attr('title');

          $.ajax({
          url: 'cms/edit/'+id,
          dataType: 'json',
          type:'POST',
          data: $('#formedit').serialize(), //Se obtienen los datos del formulario


            success: function(datos)
            {
                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                alert("No se encontre el usuario");
                setTimeout("window.location = 'cms'",1000);
                  
                }
                //Si la respuesta del ajax es verdadero se hace esto
                else
                {
                  $('#formedit input[name="user_id"]').val(datos.id)
                  $('#formedit input[name="nombre_edit"]').val(datos.nombre)
                  $('#formedit input[name="apellido_paterno_edit"]').val(datos.apellido_Paterno)
                  $('#formedit input[name="apellido_materno_edit"]').val(datos.apellido_Materno)
                  $('#formedit input[name="email_edit"]').val(datos.email)
                  $('#formedit input[name="perfil_edit"]').val(datos.id_perfil)
                }
            },

           
        });
            
        });

  });
</script>

 <!-- 
          ********************************************************************************************************************** 
          ********************************************************************************************************************** 
          **********************************************************************************************************************
          **********************************************************************************************************************
          **********************************************************************************************************************
  -->

  </section>

@stop

