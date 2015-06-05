 <nav class="navbar navbar-default navbartop nospace">
    <div class="container-fluid">
	<div class="row">
    <div class="col-xs-12 col-lg-12">

                <div class="navbar-header">
                  @include('includes.menu')   
                    

                </div>
        
             

                <ul class="nav navbar-nav navbar-right"  >

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" ><span class="fa fa-user fa-fw" ></span>{{Auth::user()->nombre}} {{Auth::user()->apellido_Paterno}} <span class="caret"></span></a>

                    <ul class="dropdown-menu" >
                        <div class="list-group" style="margin-bottom:-20px;">
                          <span >@foreach($perfiles as $perfil)<center class="schema-teal text-white roboto" style="margin-top:-5px;">{{$perfil->nombre_perfil}}</center>
                          @endforeach</span>
                          {{ HTML::link('#MyModalView', ' Ver información',array('class'=>'list-group-item edit glyphicon glyphicon-eye-open','data-toggle'=>'modal','id'=>Auth::user()->id));}}
                        {{--  {{ HTML::link('#MyModalEdit2', ' Editar Información',array('class'=>'list-group-item edit glyphicon glyphicon-pencil','data-toggle'=>'modal','id'=>Auth::user()->id)); }} --}} 
                          {{ HTML::link('logout', ' Logout',array('class'=>'list-group-item glyphicon glyphicon-log-out')); }}
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
           @include('includes.Modales.editPerfil')
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

  
    
