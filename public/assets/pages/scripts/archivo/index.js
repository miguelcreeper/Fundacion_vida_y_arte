$(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function (event) {
        event.preventDefault();
        const form = $(this);
        swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                ajaxRequest(form.serialize(), form.attr('action'), 'eliminarprofesor', form);
            }
        });
    });

    $('.ver-profesor').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        const data = {
            _token: $('input[name=_token]').val()
        }
        ajaxRequest(data, url, 'verProfesor');
    });

    function ajaxRequest(data, url, funcion, form = false) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (respuesta) {
                if (funcion == 'eliminarProfesor') {
                    if (respuesta.mensaje == "ok") {
                        form.parents('tr').remove();
                        Fundacion.notificaciones('El registro fue eliminado correctamente', 'Fundacion', 'success');
                    } else {
                        Fundacion.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Fundacion', 'error');
                    }
                } else if (funcion == 'verProfesor') {
                    $('#modal-ver-profesor .modal-body').html(respuesta)
                    $('#modal-ver-profesor').modal('show');
                }
            },
            error: function () {

            }
        });
    }
});