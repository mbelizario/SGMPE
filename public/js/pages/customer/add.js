$(document).ready(function(){
   $('#cpf').mask('999.999.999-99');
   $('#addressZipCode').mask('99.999-999');
   $('#phone').mask("(99) 9999-9999");
   $('#cellPhone').mask("(99) 99999-9999");
});

$('#add-btn').on('click', function(){
    var personName          = $('#personName').val();
    var cpf                 = $('#cpf').val();
    var addressZipCode      = $('#addressZipCode').val();
    var addressStreet       = $('#addressStreet').val();
    var addressNumber       = $('#addressNumber').val();
    var addressComp         = $('#addressComp').val();
    var addressNeighborhood = $('#addressNeighborhood').val();
    var addressCity         = $('#addressCity').val();
    var addressState        = $('#addressState').val();
    var email               = $('#email').val();
    var phone               = $('#phone').val();
    var cellPhone           = $('#cellPhone').val();

    var base_url    = $('#base_url').val();

    var dataString = {
        personName          : personName,
        cpf                 : cpf,
        addressZipCode      : addressZipCode,
        addressStreet       : addressStreet,
        addressNumber       : addressNumber,
        addressComp         : addressComp,
        addressNeighborhood : addressNeighborhood,
        addressCity         : addressCity,
        addressState        : addressState,
        email               : email,
        phone               : phone,
        cellPhone            : cellPhone

    };

    $.ajax({
        type: "POST",
        url: base_url+'customers/add',
        data: dataString,
        success: function(response)
        {

            // recebe um json com dois campos:
            // response -> sendo true caso tenha dado tudo certo e false caso algo
            // tenha falhado.
            // msg -> mensagem de feedback
            var obj = JSON.parse(response);
            if(obj.response)
            {
                $.notify(obj.msg, "success");
                setTimeout(function(){
                    window.location.replace(base_url+'customers');
                }, 1000)
            }
            else
            {
                $('.form-group').removeClass('has-error');
                $.notify(obj.msg, "error");
                switch (obj.code)
                {
                    case 1:
                        $('#form-personName').addClass('has-error');
                        break;
                    case 2:
                    case 3:
                        $('#form-cpf').addClass('has-error');
                        break;
                    case 4:
                    case 5:
                        $('#form-addressZipCode').addClass('has-error');
                        break;
                    case 6:
                        $('#form-addressStreet').addClass('has-error');
                        break;
                    case 7:
                        $('#form-addressNumber').addClass('has-error');
                        break;
                    case 8:
                        $('#form-addressNeighborhood').addClass('has-error');
                        break;
                    case 9:
                        $('#form-addressCity').addClass('has-error');
                        break;
                    case 10:
                        $('#form-addressState').addClass('has-error');
                        break;
                    case 11:
                        $('#form-email').addClass('has-error');
                        break;
                    case 12:
                    case 13:
                        $('#form-phone').addClass('has-error');
                        break;
                    default:

                }
            }
        },
        error: function(response)
        {
            $.notify("Falha ao enviar os dados! Código do erro: #customer001", "error");
        }
    })
});
