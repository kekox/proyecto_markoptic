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
                      <h3 class="heading"></h3>
                    
                     <small>{{HTML::link('proyectos',' ',array('class' => 'fa fa-arrow-circle-left color-black fa-3x ' ))}}</small>


                      <table id="datatable2" class="table table-hover responsive" cellspacing="0" width="100%">
                          
                          <thead class="schema-dark text-white">
                              <tr>
                                  <th><center>Folio</center></th>
                                  <th><center>Nombre</center></th>
                                  <th><center>Usuario</center></th>
                                  <th><center>Modalidad</center></th>
                                  <th><center>Creado</center></th>
                                  <th><center>Última modificación</center></th>
                                  <th><center>Status</center></th>
                                  <th><center>Opciones</center></th>

                              </tr>
                          </thead>
 
 
                          <tbody>
                              
                          </tbody>
                           
                      </table>
                          

                </div>
              </div>
            </div>
        </div>    
</section>        




       
                  
  
 

  <script>
    $(document).ready( function () {
    $('#datatable2').DataTable();
    responsive: true
    });
  </script>






  </section>

@stop