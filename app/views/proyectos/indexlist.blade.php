@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

<section>
        <div id="proyectosdelete">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 ">

                      <h3 class="heading text-center montserrat"><a href="../proyectos" class="fa fa-arrow-left color-black " style="text-decoration:none;">&nbsp;&nbsp;&nbsp;</a>Proyectos</h3>
                    
                    




                      <table id="datatable2" class="table table-hover responsive" cellspacing="0" width="100%">
                          
                          <thead class="schema-dark text-white">
                              <tr>
                                  <th><center>Folio</center></th>
                                  <th><center>Nombre</center></th>
                                  <th><center>Usuario</center></th>
                                  <th><center>Modalidad</center></th>
                                  <th><center>Creado</center></th>
                                  <th><center>Opciones</center></th>

                              </tr>
                          </thead>
 
 
                          <tbody>
                              @if($proyectos)
                                @foreach($proyectos as $proyecto)
                              <tr class="opensans">

                                 
                                  <td><center>{{{$proyecto->folio}}}</center></td>
                                  <td><center>{{{$proyecto->nombre_proyecto}}}</center></td>
                                  <td><center>{{{$proyecto->nombre.' '.$proyecto->apellido_Paterno.' '.$proyecto->apellido_Materno}}} </center></td>  
                                  <td><center>{{{$proyecto->modalidad}}}</center></td> 
                                  <td><center>{{{date("d/m/Y",strtotime($proyecto->created_at))}}}</center></td>     
                                  <td><center>
                                  <!-- <a href="#MyModalEdit" class="btn btn-success btn-sm fa fa-pencil edit hidden-xs hidden-sm hidden-md" data-toggle="modal" value="">Editar</a> -->
                                  &nbsp;
                                  <a href="#" class="btn btn-danger btn-sm fa fa-trash-o hidden-xs deleteproyecto" data-toggle="modal" value="{{$proyecto->folio}}">Eliminar</a>      
                                      

                                 
                                  
                                   
                                   
                                             
                              </tr>
                              @endforeach 
                            @endif
                          </tbody>
                           
                      </table>
                          

                </div>
              </div>
            </div>
        </div>  

      <!-- Modales-->
      @include('includes.Modales.ProyectoEliminar')  

      <!--Mensajes-->
      @include('includes.Messages.MessageDelete2')

</section>        


<script>
  $(document).ready(function(){
    $('.deleteproyecto').on('click',function(){
        var id= $(this).attr('value');

        $('#ProyectoDelete').modal('show').on('click','#DeleteProyecto',function(){
               window.location.href = '../proyectos/delete/'+id; 
          });

    });

  });
</script> 

       
                  
  
 

  <script>
    $(document).ready( function () {
    $('#datatable2').DataTable();
    responsive: true
    });
  </script>







@stop