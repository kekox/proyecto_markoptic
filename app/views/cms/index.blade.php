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
                      <h3 class="heading">Content Managent System</h3>
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
                     <small>{{HTML::link('dashboard',' ',array('class' => 'fa fa-arrow-circle-left color-black fa-3x ' ))}}</small>
                   

                      <button id="add" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Agregar Usuario</span></button>

                      

                      <table id="example" class="table table-hover responsive" cellspacing="0" width="100%">
                          
                          <thead class="schema-dark color-white">
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
              $('#_nombree ,#_apellido_paternoo, #_apellido_maternoo, #_emaail, #_perfil, #_password ').text('');
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
        var id=0;
        //Se mandaa a llamar las funciones
        $('.edit').on('click',function()
        {
          id = $(this).attr('title'); 
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
                 
                  $('#formedit input[name="nombre_edit"]').val(datos.nombre)
                  $('#formedit input[name="apellido_paterno_edit"]').val(datos.apellido_Paterno)
                  $('#formedit input[name="apellido_materno_edit"]').val(datos.apellido_Materno)
                  $('#formedit input[name="email_edit"]').val(datos.email)
                  $('#formedit input[name="perfil_edit"]').val(datos.id_perfil)
                  

                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) 
            {
              if (XMLHttpRequest.status === 500) {
                alert('Favor de seleccionar el folio del proyecto que puso al principio.');
              $('#_campo0').text('Seleccione el folio Correcto');

                console.log(XMLHttpRequest);
              }else{
                      alert("Algo esta mal");
                  //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
                  console.log(XMLHttpRequest.statusText);
                  console.log(textStatus);
                  console.log(errorThrown);
              }
            }
                 
        });
            
        });
  });
</script>



  </section>

@stop