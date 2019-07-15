'use strict';
let days = 0;

$(document).ready(function () {
    $('.datepicker').datepicker($.datepicker.regional['es']);
}).on('change', '#deliveryDate', function () {
    if(days > 0)
        $('#payDate').val(moment(this.value, 'DD/MM/YYYY').add(days, 'd').format('DD/MM/YYYY'));
}).on('change', '#clientId', function () {
    $.ajax(
        {
            url: 'index?r=rsc-pedido-cabecera/ajax',
            type: 'post',
            dataType: 'json',
            data: {
                id: $(this).val()
            }
        }
    ).done(function (response) {
        console.log(response);

        if (response !== null) {
            if (response.success) {
                if (response.data !== null && response.data.length > 0)
                    setDays(response.data[0].creditotiempodias);
                else
                    console.error('No existe crédito para el cliente seleccionado.');
            } else
                console.error(response.message);
        } else
            console.error('Error en la petición.');
    });
});

function setDays(d) {
    days = d;
}