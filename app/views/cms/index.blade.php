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

                      
                      <button id="add" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalAgregar"><span class="fa fa-user-plus"> Agregar Usuario</span></button>

                      

                      <table id="DatatableUsers" class="table table-hover responsive" cellspacing="0" width="100%">
                          
                          <thead class="schema-dark text-white">
                              <tr>
                                  <th><center>ID</center></th>
                                  <th><center>Nombre Completo</center></th>
                                  <th><center>Correo</center></th>
                                  <th><center>Perfil</center></th>
                                  <th><center>Última modificación</center></th>
                                  <th><center>Opciones</center></th>

                              </tr>
                          </thead>
 
                          @if($users)
                                @foreach($users as $user)
                          <tbody>
                              <tr class="opensans">
                                  <td><center>{{$user->id}}</center></td>
                                  <td><center>{{$user->nombre." ".$user->apellido_Paterno." ".$user->apellido_Materno}}</center></td>
                                  <td><center>{{$user->email}}</center></td>
                                        
                                        
                                        @if($user->perfil_id == 1)
                                        <td><center>Investigador</center></td> 
                                        @elseif($user->perfil_id == 2)
                                        <td><center>Usuario</center></td> 
                                        @elseif($user->perfil_id == 3)
                                        <td><center>Administrador</center></td> 
                                        @else
                                        <td><center>{{$user->perfil_id}}</center></td> 
                                        @endif

                                  <td><center>{{date("d/m/Y",strtotime($user->updated_at))}}</center></td> 
                                  <td><center>
                                  <a href="#MyModalEdit" class="btn btn-success btn-sm fa fa-pencil edit hidden-xs" data-toggle="modal" value="{{$user->id}}">Editar</a>
                                  &nbsp;
                                  <a href="cms/delete/{{$user->id}}" class="btn btn-danger btn-sm fa fa-trash-o hidden-xs delete" data-toggle="modal" >Eliminar</a>
                                   
                                             
                              </tr>
                             
                          </tbody>
                               @endforeach 
                            @endif

                             @foreach($nombreperfil as $perfil)
                              {{$perfil->nombre_perfil}}
                            @endforeach
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
  @endif


  <!-- Modales-->
  @include('includes.Modales.cmsAgregar')
  @include('includes.Modales.cmsEditar')
 

  <!--Mensajes-->
  @include('includes.Messages.MessageDelete')
  @include('includes.Messages.MessageAgregado')
  @include('includes.Messages.MessageUpdate')
                  
  
 
 <input id="val" type="hidden" name="user" class="input-block-level" value="" >
  <script>
    $(document).ready( function () {
    $('#DatatableUsers').DataTable();
    responsive: true
    });
  </script>




  </section>

@stop