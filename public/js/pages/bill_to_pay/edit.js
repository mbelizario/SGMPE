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
    var supplier                    = $('#supplier').val();
    var issueDate                   = $('#issueDate').val();
    var dueDate                     = $('#dueDate').val();
    var amount                      = $('#amount').maskMoney('unmasked')[0];
    var paidAmount                  = $('#paidAmount').maskMoney('unmasked')[0];
    var payDay                      = $('#payDay').val();
    var type                        = $('#type').val();
    var complementaryInformation    = $('#complementaryInformation').val();
    //tratando a entrada para ser inserida adequadamente no banco
    amount = parseFloat(amount).toFixed(2);
    paidAmount = parseFloat(paidAmount).toFixed(2);
    var base_url    = $('#base_url').val();

    var dataString =
        {
            id                          : id,
            documentNumber              : documentNumber,
            supplier                    : supplier,
            issueDate                   : issueDate,
            dueDate                     : dueDate,
            amount                      : amount.replace(".",","),
            paidAmount                  : paidAmount.replace(".",","),
            payDay                      : payDay,
            type                        : type,
            complementaryInformation    : complementaryInformation
        };



    $.ajax({
        type: "POST",
        url: base_url+'billsToPay/edit',
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
                    window.location.replace(base_url+'billsToPay');
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
                        $('#form-supplier').addClass('has-error');
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
                    case 7:
                        $('#form-type').addClass('has-error');
                        break;
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
