 <nav class="navbar navbar-default navbartop nospace">
    <div class="container-fluid">
	<div class="row">
    <div class="col-xs-12 col-lg-12">

                <div class="navbar-header">
                	@include('includes.menu')  	
                    

                </div>
        
             

                <ul class="nav navbar-nav navbar-right"  >

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" ><span class="glyphicon glyphicon-user" ></span> Perfil <span class="caret"></span></a>
                      <ul class="dropdown-menu" >
                        <div class="col-lg-12" style="width:250px; height:130px; border-bottom: dashed 1px #31a463">
                            <div class="row">

                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
                                    <img src="http://placehold.it/96x96" alt="" class="img-responsive img-circle">
                                </div>

                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border-left: dashed 1px #31a463">
                                    <p><strong><center>{{Auth::user()->nombre." ".Auth::user()->apellido_Paterno}}</center> </strong></p>
                                    @foreach($perfiles as $perfil)
                                    <p><strong><center>{{$perfil->nombre_perfil}}</center></strong></p>
                                    @endforeach
                                    <p style="font-size:11px;"><strong>{{Auth::user()->email}} </strong></p>
                                    <p>{{ HTML::link('#MyModalView', ' Ver mi información',array('class'=>'schema-teal btn btn-success btn-block btn-xs edit','data-toggle'=>'modal','id'=>Auth::user()->id)); }}
                                    
                                    
                                </div>
                               
                            </div>
                        </div>

                        <div class="col-lg-12" style="margin-top:10px;">

                            <p>{{ HTML::link('logout', ' Logout',array('type'=>'button','class'=>'btn btn-danger btn-block btn-xs jlogout', )); }}</p>
                        </div>
                       
                      </ul>
                    </li>
                </ul>
           
                 <center class="text-muted menutop hidden-xs"> Sistema de Integración de Proyectos </center>
       
        
		
        
        

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


          <!-- Modal Ver Informacion-->
           <div class="modal fade" id="MyModalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-pencil color-white"> Información de {{Auth::user()->nombre}} </span></h3></center>
                  </div>

                  <div class="modal-body">
                    <center><span id="mensaje" class=" display-errors" ></span></center>
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
                     {{ Form::button('Close',array('class'=>'btn btn-default','data-dismiss'=>'modal'))}}
                     {{ HTML::link('#MyModalEdit2', ' Editar',array('class'=>'btn btn-primary edit','data-toggle'=>'modal','data-dismiss'=>'modal','id'=>Auth::user()->id)); }}
                  
                   
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
        <!-- Modal Editar Informacion-->
           <div class="modal fade" id="MyModalEdit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-pencil color-white"> Información de {{Auth::user()->nombre}} </span></h3></center>
                  </div>

                  <div class="modal-body">
                    <center><span id="mensaje" class=" display-errors" ></span></center>
                      <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'user.update.perfil',
                  'class' => 'form-horizontal', 
                  'role' => 'form',
                  'id'=>'formedit')) }}

                <!-- nombre -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('nombre_edit', Input::old('nombre'), array('class' => 'form-control ', 'placeholder' => 'Nombre(s)')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_nombre">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_paterno_edit', Input::old('apellido_Paterno'), array('class' => 'form-control ', 'placeholder' => 'Apellido Paterno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_paterno">  {{ $errors->first('apellido_paterno') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group separetedinput" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('apellido_materno_edit', Input::old('apellido_Materno'), array('class' => 'form-control ', 'placeholder' => 'Apellido Materno')) }}
                </div>
                 <!--Errores-->
                <span class="bg-danger" id="_apellido_materno">  {{ $errors->first('apellido_Materno') }}</span>
                
                <!-- Email -->
                <div class="input-group separetedinput" >
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::email('email_edit', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Correo Electronico')) }}
                </div>
                <span class="bg-danger" id="_email">  {{ $errors->first('email') }}</span>

                <input type="hidden" name="user_id" >

                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                   
                    {{HTML::link('password/change',' Cambiar contraseña',array('class'=>''))}}


                    {{ Form::button('Close',array('class'=>'btn btn-default','data-dismiss'=>'modal'))}}
                    {{ Form::submit('Guardar', array('class' => 'btn btn-primary','id'=>'btnedit'))}}
                  
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
  <script>
  $(document).ready(function(){

        //Se mandaa a llamar las funciones
        $('.edit').on('click',function()
        {
           var id = $(this).attr('id');

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
                setTimeout("window.location = 'dashboard'",1000);
                  
                }
                //Si la respuesta del ajax es verdadero se hace esto
                else
                {
                  $('#formedit input[name="user_id"]').val(datos.id)
                  $('#formedit input[name="nombre_edit"]').val(datos.nombre)
                  $('#formedit input[name="apellido_paterno_edit"]').val(datos.apellido_Paterno)
                  $('#formedit input[name="apellido_materno_edit"]').val(datos.apellido_Materno)
                  $('#formedit input[name="email_edit"]').val(datos.email)
                  
                }
            },

           
        });
            
        });
 
  });


</script>
</nav>

  
    
