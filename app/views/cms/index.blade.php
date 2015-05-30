@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

<section>
        <div id="cms">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 ">

                      <h3 class="heading"><a href="dashboard" class="fa fa-arrow-left color-black pull-left" style="text-decoration:none;"></a>Content Managent System</h3>

                       @if(Session::has('message_delete'))
                        {{ "<script>
                            $(document).ready(function()
                            {
                              $('.ModalUserDelete').modal('show');
                            });
                           </script>"
                        }}        
                    @elseif(Session::has('message_edit'))
                       <div class="alert alert-success"><center><span class="fa fa-check-circle"></span>
                       <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_edit') }}</center></div>
                    @elseif(Session::has('message_fail'))
                       <div class="alert alert-danger"><center><span class="fa fa-times-circle"></span>
                       <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_fail') }}
                        <!--Errores-->
                        <br>
                          <span class="display-errors "> {{ $errors->first('nombre') }}</span><br>
                          <span class="display-errors "> {{ $errors->first('apellido_paterno') }}</span><br>
                          <span class="display-errors "> {{ $errors->first('apellido_Materno') }}</span><br>
                          <span class="display-errors "> {{ $errors->first('email') }}</span><br>
                          <span class="display-errors "> {{ $errors->first('perfil') }}</span><br>
                       </center></div>
                    @endif
                  
                   

                      <button id="add" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Agregar Usuario</span></button>

                      

                      <table id="Datatable1" class="table table-hover responsive" cellspacing="0" width="100%">
                          
                          <thead class="schema-dark text-white">
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
                                  <td><center>{{$user->perfil_id}}</center></td> 
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
        </div>    
</section>        





          <!-- Modal Agregar-->
          @include('includes.Modales.cmsagregar')


           <!-- Modal Editar-->
          @include('includes.Modales.cmseditar')


          <!-- Modal Eliminar-->
          @include('includes.Modales.cmseliminar')

          <!--Mensajes-->
          @include('includes.Messages.MessageDelete')
          @include('includes.Messages.MessageAgregado')
          @include('includes.Messages.MessageUpdate')
                  
  
 
 <input id="val" type="hidden" name="user" class="input-block-level" value="" >
  <script>
    $(document).ready( function () {
    $('#Datatable1').DataTable();
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
     
    $('#btncsmadd').on('click',function()
        {

       
        $.ajax({
          url: 'cms',
          dataType: 'json',
          type:'post',
          data: $('#formcmsadd').serialize(), //Se obtienen los datos del formulario
            success: function(datos)
            {
              
              //Donde se vana  mostrar los errores
              $('#nombres ,#apellido_paternoo, #apellido_maternoo, #correo_electronico, #perfil, #password ').text('');
                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                  $('#nombres').text(datos.errors.nombre);
                  $('#apellido_paterno').text(datos.errors.apellido_paterno);
                  $('#apellido_materno').text(datos.errors.apellido_materno);
                  $('#email').text(datos.errors.email);
                  $('#perfil').text(datos.errors.perfil);
                  $('#password').text(datos.errors.password);
                }
                else
                {
                  

                   $('#myModal').modal('hide');
                   document.getElementById('formcmsadd').reset();
                   $('.ModalAgregado').modal('show');
                     setTimeout(function()
                      {
                      window.location.href="cms"
                      } , 1000); 
                  

                    
                }
            },

           
        });

       });

       
       
        $('.btncmsclose').on('click',function()
        {
             document.getElementById('formcmsadd').reset();
              $('#formcmsadd > span').empty();
              $('#mensaje').empty();
            
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
        $('.edit').on('click',function()
        {
          id = $(this).attr('title'); 
          $.ajax({
          url: 'cms/edit/'+id,
          dataType: 'json',
          type:'POST',
          data: $('#formedit').serialize(), 

            success: function(datos)
            {
               
                if(datos.success == false){
                alert("No se encontre el usuario");
                setTimeout("window.location = 'cms'",1000);
                  
                }
                else
                {
                  $('#formedit input[name="user_id"]').val(datos.id)
                  $('#formedit input[name="nombre_edit"]').val(datos.nombre)
                  $('#formedit input[name="apellido_paterno_edit"]').val(datos.apellido_Paterno)
                  $('#formedit input[name="apellido_materno_edit"]').val(datos.apellido_Materno)
                  $('#formedit input[name="email_edit"]').val(datos.email)
                  $('#formedit input[name="perfil_edit"]').val(datos.id_perfil)
                  $('#formedit input[name="password_edit"]').val(datos.password)

                  

                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) 
            {
              if (XMLHttpRequest.status === 500) {
                /*alert('ERROR 5000');
                console.log(XMLHttpRequest);*/
              }else{
                  /*alert("Algo esta mal");
                  console.log(XMLHttpRequest.statusText);
                  console.log(textStatus);
                  console.log(errorThrown);*/
              }
            }
                 
          });
            
        });
  });
</script>


<script>
  $(document).ready(function(){
  
        $('#btncmsupdate').on('click',function()
        {

        $.ajax({
          url: 'cms/update',
          dataType: 'json',
          type:'post',
          data: $('.formedit').serialize(), //Se obtienen los datos del formulario
            success: function(datos)
            {

              $('#nombre_edit ,#apellido_paterno_edit, #apellido_materno_edit, #correo_electronico_edit, #perfil_edit, #password_edit ').text('');
                if(datos.success == false){
                  $('#nombre_edit').text(datos.errors.nombre);
                  $('#apellido_paterno_edit').text(datos.errors.apellido_paterno);
                  $('#apellido_materno_edit').text(datos.errors.apellido_materno);
                  $('#email_edit').text(datos.errors.email);
                  $('#perfil_edit').text(datos.errors.perfil);
                  $('#password_edit').text(datos.errors.password);

                  $('#mensajeupdate').text(datos.message)
                }
                else
                {

                   $('#MyModalEdit').modal('hide');
                   $('.ModalUpdate').modal('show');

                    setTimeout(function()
                    {
                    window.location.href="cms"
                    } , 100500); 
                    
                }
            },

           
        });

       });

       $('.btncmsclose').on('click',function()
        {
              $('#formedit > span').empty();
              $('#mensaje').empty();
        });
      
  });
</script>


  </section>

@stop