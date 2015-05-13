 <nav class="navbar navbar-default navbartop nospace">
    <div class="container-fluid">
	<div class="row">
    <div class="col-xs-12 col-lg-12">

                <div class="navbar-header">
                  @include('includes.menu')   
                    

                </div>
        
             

                <ul class="nav navbar-nav navbar-right"  >

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" ><span class="fa fa-user fa-fw" ></span> Mi Perfil <span class="caret"></span></a>

                    <ul class="dropdown-menu" >
                        <div class="list-group" style="margin-bottom:-20px;">
                          <span >@foreach($perfiles as $perfil)<center class="schema-teal color-white roboto" style="margin-top:-5px;">{{$perfil->nombre_perfil}}</center>
                          @endforeach</span>
                          {{ HTML::link('#MyModalView', ' Ver información',array('class'=>'list-group-item edit glyphicon glyphicon-eye-open','data-toggle'=>'modal','id'=>Auth::user()->id));}}
                        {{--  {{ HTML::link('#MyModalEdit2', ' Editar Información',array('class'=>'list-group-item edit glyphicon glyphicon-pencil','data-toggle'=>'modal','id'=>Auth::user()->id)); }} --}} 
                          {{ HTML::link('logout', ' Logout',array('class'=>'list-group-item glyphicon glyphicon-ban-circle')); }}
                        </div>
                    
                      
                    </ul>

                  </li>
                </ul>
           
                <center class="menutop hidden-xs ">  Sistema de Integración de Proyectos </center>
       
        
		
        
        

    </div>   

        
    </div>
        
    </div>



          <!-- Modal Ver Informacion-->
           @include('includes.Modales.verperfil')
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
                   
                    {{HTML::link('password/change',' Cambiar contraseña',array('class'=>'pull-left'))}}


                    
                    {{ Form::submit('Guardar', array('class' => 'btn btn-primary','id'=>'btnedit'))}}
                    {{ Form::button('Close',array('class'=>'btn btn-default','data-dismiss'=>'modal'))}}
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

  
    
