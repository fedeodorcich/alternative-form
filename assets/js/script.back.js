/*==========================================
VARIABLES GLOBALES
==========================================*/
var expresionEmail = /^[^0-9][a-zA-Z0-9\-_]+([.][a-zA-Z0-9\-_]+)*[@][a-zA-Z0-9\-_]+([.][a-zA-Z0-9\-_]+)*[.][a-zA-Z]{2,4}$/,
    anchoImg       = 1920,
    altoImg        = 1155,
    tamanoImg      = 2000000,
    tamanoDoc      = 2000000,
    msg            = $('.msgModal').hide();

/*============== fin de VARIABLES GLOBALES ===============*/

/*==========================================
ACTUALIZAR ESTADO DEL SIDEBAR
==========================================*/

$('#btn-menu-desktop').on('click',function(){
    
    id = $('#btn-mis-datos').data('id');
    
    $.ajax({
        url: ruta+'sidebar/getSidebar',
        method: "POST",
        data: {'idUsuario': id},
        success: function(respuesta){}
    });

})

/*============== fin de ACTUALIZAR ESTADO DEL SIDEBAR ===============*/

/*==========================================
LOGIN
==========================================*/

$('#loginUsuario').on('click', function(e){
    
    e.preventDefault();
    
    var nombre     = $('#nombreUsuario').val(),
        password   = $('#passwordUsuario').val(),
        errorLogin = $('#loginError');

    if(nombre == '' || password == ''){
        errorLogin.html('Ingrese usuario y contraseña').show();
    } else {
        $.ajax({
            url: 'login/login',
            method: "POST",
            data: {'nombreUsuario': nombre,
                   'passwordUsuario': password},
            beforeSend: function(){
                // $(".loader").show();
            },
            success: function(respuesta){
                
                console.log(respuesta);
                switch(respuesta){
                    case 'error':
                        errorLogin.html('Usuario o contraseña incorrectos').show();
                        break;

                    case 'inactivo':
                        errorLogin.html('Su usuario ha sido desactivado').show();
                        break;
                    
                    case 'caracteres':
                        errorLogin.html('No se permiten caracteres especiales').show();
                        break;
                    //Usar otro case para mostrar otros posibles mensjes como pj: (ver app RTO)

                    // case 'fueraDeHorario':
                    //     errorLogin.html('Acceso restringido fuera del horario laboral').show();
                    //     break;
                    
                    // case 'domingo':
                    //     errorLogin.html('Acceso restringido en días no laborables').show();
                    //     break;
                    
                    default:
                        location.reload();
                        break;

                }

            }

        })

    }

})

// ============== FIN LOGIN ========================//

/*==========================================
SECCION USUARIOS
==========================================*/

$('#mostrarAgregarUsuario').on('click', function(){
    $(this).hide();
    $('#tblUsuarios_wrapper').hide();
    $('#altaUsuario').show();
})

//ALTA DE USUARIOS
$('#agregarUsu').on('click', function(){

    $this = $(this);

    var nombres       = $('#nombresUsu').val(),
        apellidos     = $('#apellidosUsu').val(),
        email         = $('#emailUsu').val(),
        usuario       = $('#usuarioUsu').val(),
        rol = $('#rolUsu').val();


    if(nombres==''||apellidos==''||email==''||usuario==''||rol==''){
            
        $notification({
            mensaje: 'Todos los campos son requeridos.',
            type: 'error'
        })
        
    } else if(!expresionEmail.test(email)){

        $notification({
            mensaje: 'El e-mail ingresado tiene un formato incorrecto.',
            type: 'error'
        })

    } else {

        $.ajax({
            url: ruta+"usuarios/altaUsuario",
            method: "POST",
            data: {
                'nombres'       : nombres,
                'apellidos'     : apellidos,
                'email'         : email,
                'usuario'       : usuario,
                'sideBar'       : 'open',
                'estado'        : 'activo',
                'rol'           : rol
            },
            beforeSend: function(){
                
                $('#loader').addClass('active');

            },
            success: function(respuesta){
               
                $('#loader').removeClass('active');
                switch(respuesta){
                    case 'error':
                        $notification({
                            mensaje: 'Error al agregar usuario. Por favor, verifique los datos y vuelva a intentar.',
                            type: 'error'
                        })
                    break;

                    case 'email':
                        $notification({
                            mensaje: 'El e-mail ya ingresado pertenence a otro usuario.',
                            type: 'error'
                        })
                    break;
                    case 'ok':
                        $notification({
                            mensaje: 'Alta de usuario exitosa.',
                            type: 'success'
                        }, function(){
                            location.reload()
                        })
                    break;
                   
                }

            }

        })

    }

})

//ACTUALIZAR ESTADO DE USUARIO
function actualizarEstado(){

    $('.actualizarEstado').on('click', function(){
        var estado = $(this),
            id     = $(this).attr('id'),
            entidad= $(this).data('entidad');

            // console.log(entidad);

        $.ajax({
            url: ruta+entidad+"/actualizarEstado",
            method: "POST",
            data: {
                'id'     : id,
                'estado' : estado.html(),
                'entidad': entidad
            },
            beforeSend: function(){
                $('#loader').addClass('active');
            },
            success: function(respuesta){

                $('#loader').removeClass('active');
                switch(respuesta){
                    case 'error':
                        $notification({
                            mensaje: 'Error al cambiar el estado.',
                            type: 'error'
                        }, function(){
                            location.reload()
                        });  
                    break;

                    default:
                        $notification({
                            mensaje: 'El estado fue cambiado.',
                            type: 'success'
                        }, function(){
                            location.reload()
                        });
                    break;

                }
            }
        })
    })
}

//actualizar estado en ver datos de usuario
$('.actualizarEstadoUsuario').on('click', function(){
    var estado = $(this),
        id     = $(this).attr('id');
        entidad='usuarios';
    // console.log([ id, estado.html() ]);

    $.ajax({
        url: ruta+"usuarios/actualizarEstado",
        method: "POST",
        data: {
            'id'     : id,
            'estado' : estado.html(),
            'entidad': entidad
        },
        beforeSend: function(){
            $('#loader').addClass('active');
        },
        success: function(respuesta){
            
            $('#loader').removeClass('active');

            switch(respuesta){
                case 'error':
                    $notification({
                        mensaje: 'Error al cambiar el estado del usuario.',
                        type: 'error'
                    }, function(){
                        location.reload()
                    });  
                break;

                default:
                    $notification({
                        mensaje: 'El estado del usuario fue cambiado.',
                        type: 'success'
                    }, function(){
                        location.reload()
                    });
                break;

            }

        }

    })

})

//EDITAR DATOS DE UN USUARIO

$('#editarUsu').on('click', function(){

    
var nombres       = $('#editarNombresUsu').val(),
    apellidos     = $('#editarApellidosUsu').val(),
    email         = $('#editarEmailUsu').val(),
    rol           = $('#editarRolUsu').val();
    entradaSemana = $('#editarEntradaSemana').val(),
    salidaSemana  = $('#editarSalidaSemana').val(),
    entradaSabado = $('#editarEntradaSabado').val(),
    salidaSabado  = $('#editarSalidaSabado').val(),
    id            = $('#editarIdUsu').val(),
    $this = $(this);

    if(nombres=='' || apellidos=='' ||email == '' || rol=='' || entradaSemana==''||salidaSemana==''|| entradaSabado==''||salidaSabado==''){
        $notification({
            mensaje: 'Todos los campos son requeridos',
            type: 'error'
        });
    } else if(!expresionEmail.test(email)){
        $notification({
            mensaje: 'El e-mail ingresado tiene un formato incorrecto',
            type: 'error'
        });
    } else {
        $.ajax({
            url: ruta+"usuarios/editarUsuario",
            method: "POST",
            data: {
                'nombres'           : nombres,
                'apellidos'         : apellidos,
                'email'             : email,
                'rol'               : rol,
                'horaEntradaSemana' : entradaSemana,
                'horaSalidaSemana'  : salidaSemana,
                'horaEntradaSabado' : entradaSabado,
                'horaSalidaSabado'  : salidaSabado,
                'id'                : id
            },
            beforeSend: function(){
                $('#loader').addClass('active');
            },
            success: function(respuesta){
                $('#loader').removeClass('active');

                switch(respuesta){
                    case 'error':
                        $notification({
                            mensaje: 'Error al editar. Por favor, verifique los datos',
                            type: 'error'
                        });
                    break;

                    case 'email':
                        $notification({
                            mensaje: 'El e-mail ingresado pertenence a otro usuario',
                            type: 'error'
                        });
                        $('#emailUsu').focus();
                    break;

                    case 'ok':
                        $notification({
                            mensaje: 'Datos editados correctamente.',
                            type: 'success'
                        }, function(){
                            window.history.back();
                        });
                    break;
                }


            }

        })
    }

})

/*============== fin de SECCION USUARIOS ===============*/

/*==========================================
SECCION MIS DATOS
==========================================*/

var passwordEditar = $('#passwordEditar'),
    usuarioEditar  = $('#usuarioEditar');

usuarioEditar.on('focus', function(){$(this).removeClass('pristine').select()})
passwordEditar.on('focus', function(){$(this).removeClass('pristine').select()})

$('#btnDatosUsuarioEditar').on('click', function(){

    var id            = $('#idEditar').val(),
        password      = passwordEditar.val(),
        usuario       = usuarioEditar.val();

    if(usuarioEditar.hasClass('pristine') && passwordEditar.hasClass('pristine')){
        window.location.href = 'bpanel';
    } else {
     
        $.ajax({
            url: "mis_datos/editarUsuario",
            method: "POST",
            data: {
                'password' : password,
                'usuario'  : usuario,
                'id'       : id
            },
            beforeSend: function(){
                $('#loader').addClass('active');
            },
            success: function(respuesta){
                $('#loader').removeClass('active');
                switch(respuesta){
                    case 'error':
                        $notification({
                            mensaje: 'Los datos no pudieron ser cambiados.',
                            type: 'error'
                        });
                        break;

                    case 'caracteres':
                        $notification({
                            mensaje: 'No se permiten caracteres especiales.',
                            type: 'error'
                        });
                        break;
                    
                    default:
                        $notification({
                            mensaje: 'Los datos fueron cambiados.',
                            type: 'success'
                        }, function(){
                            window.location.href = 'bpanel';
                        });
                        break;
                }

            }

        })

    }

})

/*============== fin de SECCION MIS DATOS ===============*/








/*==========================================
TABLAS
==========================================*/

$('.tabla').DataTable({
    language: {
        processing:     "Cargando...",
        search:         "Buscar:",
        lengthMenu:     "Mostrar _MENU_ registros por página",
        info:           "Mostrando del registro _START_ al _END_ de _TOTAL_ registros",
        infoEmpty:      "Sin registros para mostrar",
        infoFiltered:   "(filtrado de un total de _MAX_ registros)",
        // infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "No se encontró ningún registro.",
        // emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Primera",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Última"
        }	
    },
    responsive: true,
    "order": [[ 0, "desc" ]],
    "pageLength": 10

});

//ejecutar las funciones de tabla en otras paginas de la misma y en el responsive

actualizarEstado();

$('.tabla').on('draw.dt', function(){
    actualizarEstado();
    
});

$('.tabla').on( 'responsive-display.dt', function ( ) {
    actualizarEstado();
   
} );

/*============== fin de TABLAS ===============*/