$(document).ready(function() {
 
    $('#guardar-registro').on('submit', function(e){
        e.preventDefault();
        
        
        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if(resultado.respuesta == 'exito'){
                    Swal.fire(
                        'Correcto',
                        'El administrador se guardó correctamente',
                        'success'
                      )
                } else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Hubo un error al registrar',
                      })
                }
            }
        })
        
        
    });
 
    /* ELIMINAR REGISTRO */

    $('.borrar_registro').on('click', function(e){
        e.preventDefault();

        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');
        Swal.fire({
            title: 'Se eliminaran los registros',
            text: "Una vez eliminado no se puede revertir",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar'
          }).then(function (){

            $.ajax({
                type: 'post',
                data: {
                    'id': id,
                    'registro' : 'eliminar'
                },
                url: 'modelo-'+tipo+'.php',
                success: function(data){
                    var resultado = JSON.parse(data);
                    if(resultado.respuesta == 'exito'){
                        Swal.fire(
                            'Eliminado',
                            'El usuario ha sido eliminado satisfactoriamente',
                            'success'
                        );
                        jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
                    } else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Hubo un error al eliminar',
                          })
                    }
                    
                }
            });

          })
        

    });
 
});

/*
$(document).ready(function(){
    $('#guardar-registro').on('submit', function(e){
        e.preventDefault();
        
        
        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if(resultado.respuesta == 'exito'){
                    Swal.fire(
                        'Correcto',
                        'El administrador se guardó correctamente',
                        'success'
                      )
                } else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Hubo un error al registrar',
                      })
                }
            }
        })
        
        
    });


    // Eliminar unregistro
    
    $('.borrar_registro').on('click', function(e){
        e.preventDefault();

        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');
    });
 
    

    $('#login-admin').on('submit', function(e){
        e.preventDefault();
        
        
        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                var resultado = data;
                if(resultado.respuesta == 'exitoso'){
                    Swal.fire(
                        'Login Correcto',
                        'Bienvenid@ '+resultado.usuario+' !!',
                        'success'
                      )
                      setTimeout(function(){
                        window.location.href = 'admin-area.php'
                      },2000);
                } else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Usuario o Password incorrecto',
                      })
                }
            }
        })
        
        
    });
});

*/