$(document).ready(function()
{
    $(".moneyValues").maskMoney({
        prefix: "R$:",
        decimal: ",",
        thousands: "."
    });

    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        weekStart: 0,
        // startDate: '0d',
        todayHighlight: true
    });

});
$('#edit-btn').on('click', function(){
    var id                          = $('#id').val();
    var documentNumber              = $('#documentNumber').val();
    var customer                    = $('#customer').val();
    var issueDate                   = $('#issueDate').val();
    var dueDate                     = $('#dueDate').val();
    var amount                      = $('#amount').maskMoney('unmasked')[0];
    var receivedAmount              = $('#receivedAmount').maskMoney('unmasked')[0];
    var receiptDay                  = $('#receiptDay').val();
    var type                        = $('#type').val();
    var complementaryInformation    = $('#complementaryInformation').val();

    var base_url    = $('#base_url').val();

    var dataString =
        {
            id                          : id,
            documentNumber              : documentNumber,
            customer                    : customer,
            issueDate                   : issueDate,
            dueDate                     : dueDate,
            amount                      : amount,
            receivedAmount              : receivedAmount,
            receiptDay                  : receiptDay,
            // type                        : type,
            complementaryInformation    : complementaryInformation
        };



    $.ajax({
        type: "POST",
        url: base_url+'billsToReceive/edit',
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
                    window.location.replace(base_url+'billsToReceive');
                }, 1000)
            }
            else
            {
                $('.form-group').removeClass('has-error');
                $.notify(obj.msg, "error");
                switch (obj.code)
                {
                    case 1:
                        $('#form-documentNumber').addClass('has-error');
                        break;
                    case 3:
                        $('#form-customer').addClass('has-error');
                        break;
                    case 4:
                        $('#form-issueDate').addClass('has-error');
                        break;
                    case 5:
                        $('#form-dueDate').addClass('has-error');
                        break;
                    case 6:
                        $('#form-amount').addClass('has-error');
                        break;
/*                    case 7:
                        $('#form-type').addClass('has-error');
                        break;*/
                    default:

                }
            }
        },
        error: function(response)
        {
            $.notify("Falha ao enviar os dados! Código do erro: #billtopay002", "error");
        }
    })
});
