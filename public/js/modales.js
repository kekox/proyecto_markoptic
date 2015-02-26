
            $('#myForm').submit(function() {
            // Enviamos el formulario usando AJAX
               $.ajax({
                   type: 'POST',
                   url: $(this).attr('action'),
                   data: $(this).serialize(),
                   // Mostramos un mensaje con la respuesta de server
                   success: function(data) {                    
                        $('#recogeAjax').html(data.mensaje);
                        $('#recogeAjax').removeClass('hidden').addClass('alert alert-warning');
                        }
                 })        
             return false;
             });
