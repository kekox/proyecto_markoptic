var main = function() {
  /* Push the body and the nav over by 285px over */
  $('.icon-menu').click(function() {
    $('.menu').animate({left: "0px"}, 200);

    $('body').animate({left: "220px"}, 200);

  });

  /* Then push them back */
  $('.icon-close').click(function() {
    $('.menu').animate({left: "-220px"}, 200);

    $('body').animate({left: "0px"}, 200);
  });
};


var dashboard= function(){

  $('.wrap > div').hover(function(){
    $(this).addClass('highlight2');
  },
    function(){
    $(this).removeClass('highlight2');
  });

};

var menu= function(){
$('.menu ul > li').hover(function(){
    $(this).addClass('highlight');
  },
    function(){
    $(this).removeClass('highlight');
  });

};


$(document).ready(function(){
    $('#username, #password').on('keyup',function(){
        highlight_error($(this));
    }).focus(function(){
        highlight_error($(this));
    }).blur(function(){
        highlight_error($(this));
    });
});

function highlight_error(el) {
    if(el.val().length == 0 || el.val().length != 0) {
        el.parent().addClass('has-success');
    } else {
        el.parent().removeClass('has-success');
    }


};


$(document).ready(main);
$(document).ready(dashboard);
$(document).ready(menu);
$(document).ready()
/********************************************************************************************************/


$(document).ready(function(){/*Empieza Document ready*/
        /* Empieza el ajax del login */
        $('#btnlogin').on('click',function()
        {
          $.ajax({
          url: 'login',
          dataType: 'json',
          type:'POST',
          data: $('#formlogin').serialize(), 


            success: function(datos)
            {
              $('#_email , #_password ').text('');

                if(datos.success == false){
                    $('#mensajefail').text(datos.message);
                    $('.ModalError').modal('show')

                     $.each(datos.errors, function(index, value)
                      {
                        $('#mensajefail').text('');
                        $('#_'+index).text(value);
                        $('.MessageError').modal('show');
                      });
                }
                else
                {      
                      $('.MessageBienvenida').modal('show');
                      $('#mensajefail').text('');
                      document.getElementById('formlogin').reset();
                      $('#mensajesuccess').text(datos.message);
                      setTimeout(function(){window.location.href="dashboard"} , 1000);  
                      
                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) {
              if (XMLHttpRequest.status === 500) {
                  
              }else{
                    
              
                /*console.log(XMLHttpRequest.statusText);
                console.log(textStatus);
                console.log(errorThrown);;*/
              }
            }
          });    
        });
        /* Termina el ajax del login */

        /* **********************************************************************************************************
        *************************************************************************************************************
        *************************************************************************************************************
        ************************************************************************************************************
        *************************************************************************************************************
        *************************************************************************************************************
        ************************************************************************************************************
        *************************************************************************************************************
        *************************************************************************************************************
        **  */

        /* CMS */
        /* Empieza el ajax de agregar usuario */
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
                $('#nombres ,#apellido_paterno, #apellido_materno, #email, #perfil, #password ').text('');
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
                    

                     $('#myModalAgregar').modal('hide');
                     document.getElementById('formcmsadd').reset();
                     $('.MessageAgregado').modal('show');
                       setTimeout(function()
                        {
                        window.location.href="cms"
                        } , 1000); 
                    

                      
                  }
              }

             
             });
        });

        $('.btncmsaddclose').on('click',function()
        {
            document.getElementById('formcmsadd').reset();
            $('#formcmsadd > span').empty();
            $('#mensaje').empty();   
        });
        /* Termina el ajax de agregar usuario */

        /* Empieza el ajax para editar usuario */
        $('.edit').on('click',function()
        {
          id = $(this).attr('value'); 
          $.ajax({
          url: 'cms/edit/'+id,
          dataType: 'json',
          type:'POST',
          data: $('#formedit').serialize(), 

            success: function(datos)
            {
               
                if(datos.success == false){
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
                /*alert('ERROR 500');
                console.log(XMLHttpRequest);*/
              }else{
                 /* alert("Algo esta mal");
                  console.log(XMLHttpRequest.statusText);
                  console.log(textStatus);
                  console.log(errorThrown);*/
              }
            }
                 
          });   
        });
        /* Termina el ajax para editar usuario */

        /* Empieza el ajax para actualizar usuario */
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
                       
                       $('#mensajeupdate').text('') 
                       $('#MyModalEdit').modal('hide');
                       $('.MessageUpdate').modal('show');

                        setTimeout(function()
                        {
                        window.location.href="cms"
                        } , 1500); 
                        
                    }
                },

                 error: function (XMLHttpRequest, textStatus, errorThrown) {
                        if (XMLHttpRequest.status === 500) {
                           $('#nombre_edit ,#apellido_paterno_edit, #apellido_materno_edit, #email_edit, #perfil_edit, #password_edit ').text('');
                           $('#email_edit').text('Este correo ya existe.');
                        
                        
                        //console.log(XMLHttpRequest);
                    }else{
                      //alert("Algo salió mal");
                      console.log(XMLHttpRequest.statusText);
                      console.log(textStatus);
                      console.log(errorThrown);
                    }
                }

               
            });
        });

        $('.btncmseditclose').on('click',function()
        {
              $('#formedit > span').empty();
              $('#mensajeupdate').empty();
        });
        /* Termina el ajax para editar usuario */
        /* Termina CMS */


        /* **********************************************************************************************************
        *************************************************************************************************************
        *************************************************************************************************************
        ************************************************************************************************************
        *************************************************************************************************************
        *************************************************************************************************************
        ************************************************************************************************************
        *************************************************************************************************************
        *************************************************************************************************************
        **  */

        /* Empieza el ajax de contacto */
        $('#btncontact').on('click',function()
        {
          
          $.ajax({
              url: 'contacto',
              dataType: 'json',
              type:'POST',
              data: $('#formcontacto').serialize(), 
                beforeSend: function(){
                  $('.enviando').show();
                  
                },
                success: function(datos)
                {
               
                  $('#_name , #_correo , #_subject , #_msg').text('');
                    if(datos.success == false){
                      $.each(datos.errors, function(index, value)
                      {

                        $('#_'+index).text(value);
                        $('.enviando').hide();
                        $('.MessageError').modal('show');
                        
                        
                      
                      });
                    }else{
                        $('.enviando').show();
                        document.getElementById('formcontacto').reset();
                        $('.MessageEnviado').modal('show');
                        setTimeout(function(){window.location.href="contacto"} , 1500);  
                      
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                  if (XMLHttpRequest.status === 500) {
                        $('load3').show();
                  }else{
                      //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
                      /*console.log(XMLHttpRequest.statusText);
                      console.log(textStatus);
                      console.log(errorThrown);*/
                  }
                }
                
                
            });

         });
        /* Termina el ajax de contacto */


}); /*Termina Document ready*/



