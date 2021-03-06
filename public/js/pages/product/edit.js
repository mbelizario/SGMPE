$(document).ready(function()
{
    $(".moneyValues").maskMoney({
        prefix: "R$:",
        decimal: ",",
        thousands: "."
    });


    $("#price").keyup(function(){
        var cost = $("#cost").maskMoney('unmasked')[0];
        var price = $("#price").maskMoney('unmasked')[0];
        var profit = price - cost;
        var profit = parseFloat(price )- parseFloat(cost);
        profit = profit.toFixed(2);
        $('#profit').val(profit);

    });
    $("#cost").keyup(function(){
        var cost = $("#cost").maskMoney('unmasked')[0];
        var price = $("#price").maskMoney('unmasked')[0];
        var profit = parseFloat(price )- parseFloat(cost);
        profit = profit.toFixed(2);
        $('#profit').val(profit);

    });


});
$('#edit-btn').on('click', function(){
    var id              = $('#id').val();
    var internalCode    = $('#internalCode').val();
    var name            = $('#name').val();
    var cost            = $('#cost').val();
    var price           = $('#price').val();
    var profit          = $('#profit').val();
    var quantity        = $('#quantity').val();
    var category        = $('#category').val();
    cost = cost.replace("R$:","");
    price = price.replace("R$:","");
    var base_url    = $('#base_url').val();

    var dataString = {
        id                  : id,
        internalCode        : internalCode,
        name                : name,
        cost                : cost,
        price               : price,
        profit              : profit.replace(".",","),
        quantity            : quantity,
        category            : category
    };

    $.ajax({
        type: "POST",
        url: base_url+'products/edit',
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
                    window.location.replace(base_url+'products');
                }, 1000)
            }
            else
            {
                $('.form-group').removeClass('has-error');
                $.notify(obj.msg, "error");
                switch (obj.code)
                {
                    case 1:
                        $('#form-internalCode').addClass('has-error');
                        break;
                    case 2:
                        $('#form-name').addClass('has-error');
                        break;
                    case 3:
                        $('#form-cost').addClass('has-error');
                        break;
                    case 4:
                        $('#form-price').addClass('has-error');
                        break;
                    case 5:
                        $('#form-profit').addClass('has-error');
                        break;
                    case 6:
                        $('#form-quantity').addClass('has-error');
                        break;
                    case 7:
                        $('#form-category').addClass('has-error');
                        break;
                    default:

                }
            }
        },
        error: function(response)
        {
            $.notify("Falha ao enviar os dados! Código do erro: #products002", "error");
        }
    })
});
