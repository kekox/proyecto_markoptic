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

                      <h3 class="heading"><a href="dashboard" class="fa fa-arrow-left color-black " style="text-decoration:none;">&nbsp;&nbsp;&nbsp;</a>Content Managent System</h3>

                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-7 col-xs-push-2">
                      <button id="add" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalAgregar"><span class="fa fa-user-plus"> Agregar Usuario</span></button>
                      </div>

                      

                      <table id="DatatableUsers" class="table table-hover responsive" cellspacing="0" width="100%">
                          
                          <thead class="schema-dark text-white">
                              <tr>
                                  
                                  <th><center>Nombre Completo</center></th>
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

                                 
                                  <td><center>{{$user->nombre." ".$user->apellido_Paterno." ".$user->apellido_Materno}}</center></td>
                                  <td><center>{{$user->email}}</center></td>
                                  <td><center>{{$user->nombre_perfil}}</center></td>      
                                        
                                      

                                  <td><center>{{date("d/m/Y",strtotime($user->updated_at))}}</center></td> 
                                  <td><center>
                                  <a href="#MyModalEdit" class="btn btn-success btn-sm fa fa-pencil edit hidden-xs hidden-sm hidden-md" data-toggle="modal" value="{{$user->id}}">Editar</a>
                                  &nbsp;
                                  <a href="#" class="btn btn-danger btn-sm fa fa-trash-o hidden-xs delete" data-toggle="modal" value="{{$user->id}}">Eliminar</a>
                                  <!--  <a href="cms/delete/{{$user->id}}" class="btn btn-danger btn-sm fa fa-trash-o hidden-xs delete" data-toggle="modal" >Eliminar</a>-->
                                   
                                   
                                             
                              </tr>
                              @endforeach 
                            @endif

                          </tbody>
                              

                             
                      </table>
                         
                           

                           
                         

                </div>
              </div>
            </div>
        </div>   

         


</section>        


  @if(Session::has('message_delete'))
      {{ "<script>
          $(document).ready(function()
          {
            $('.MessageDelete').modal('show');
          });
         </script>"
      }}        
  @elseif(Session::has('message_error_delete'))
      {{ "<script>
          $(document).ready(function()
          {
            $('.MessageError2').modal('show');
          });
         </script>"
      }}   
  @endif


  <!-- Modales-->
  @include('includes.Modales.cmsAgregar')
  @include('includes.Modales.cmsEditar')
  @include('includes.Modales.cmsEliminar')
 

  <!--Mensajes-->
  @include('includes.Messages.MessageDelete')
  @include('includes.Messages.MessageAgregado')
  @include('includes.Messages.MessageUpdate')
  @include('includes.Messages.MessageError2')
                  
  
 
 <input id="val" type="hidden" name="user" class="input-block-level" value="" >
  <script>
    $(document).ready( function (){
    $('#DatatableUsers').DataTable();
    responsive: true
    });
  </script>


<script>
  $(document).ready(function(){
    $('.delete').on('click',function(){
        var id= $(this).attr('value');
          $('#UserDelete').modal('show').on('click','#DeleteUser',function(){
               window.location.href = 'cms/delete/'+id; 
          });


    });

  });
</script>
  </section>

@stop