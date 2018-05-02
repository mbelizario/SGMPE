/*-------------------------------------------------Variaveis globais--------------------------------------------------*/
var products = [];
var totalPayable = parseFloat($("#totalPayable").val());
var base_url = $('#base_url').val();
// flag mantem  um controle e não permite que os eventos de pagaamentos sejam disparados varias  vezes
//se tiver false, o usuario pode escolher os tipos de pagamento, caso esteja true, o usuário já escolheu
// um determinado tipo de pagamento e não pode ficar ativando os demais eventos.
var flag = false;

var flagCash = false;
//tratamento dos atalhos
$(document).on('keydown', function(e){
    if(e.keyCode === 112 && flag === false)
    {

        if(totalPayable == 0 && flag === false)
        {
            flag = true;
            $.alert({
                title: 'Alerta!',
                content: 'Por favor, primeiro selecione os produtos!',
                buttons: {
                    OK: function () {
                        flag = false
                    }
                }

            });
        }
        else if(flag === false && flagCash === true)
        {
            flag = true;
            cashPaymentConfirm()

        }else if(flag === false && flagCash === false)
            {
                flag = true;
                cashPayment();
            }
    }

    if(e.keyCode === 113 && flag === false)
    {
        if(totalPayable == 0 && flag === false)
        {
            flag = true;
            $.alert({
                title: 'Alerta!',
                content: 'Por favor, primeiro selecione os produtos!',
                buttons: {
                    OK: function () {
                        flag = false
                    }
                }

            });
        }
        else
        {
            flag = true;
            debitCard();

        }

    }

    if(e.keyCode === 115 && flag === false)
    {
        if(totalPayable == 0 && flag === false)
        {
            flag = true;
            $.alert({
                title: 'Alerta!',
                content: 'Por favor, primeiro selecione os produtos!',
                buttons: {
                    OK: function () {
                        flag = false
                    }
                }

            });
        }
        else
        {
            flag = true;
            creditCard();

        }
    }

});
/*-------------------------------------------------cashPayment--------------------------------------------------------*/
function cashPayment(){
    $.confirm({
        title: 'Valor da venda: R$ '+totalPayable,
        content: '' +
        '<form action="" class="formName">' +
        '<div class="form-group">' +
        '<label>Valor pago</label>' +
        '<input type="text" placeholder="Valor pago" id="paidAmountConfirm" class="name form-control" required />' +
        '</div>' +
        '</form>',
        buttons: {
            confirmar: function ()
            {
                var paidAmountConfirm = $('#paidAmountConfirm').val();
                var excess;
                if(paidAmountConfirm < totalPayable)// caso o valor pago seja menor que o valor total
                {
                    $.alert({ title: 'Erro!',
                        content: 'Valor pago menor que Valor total da venda!',
                        buttons: {
                            Ok: function () {
                                cashPayment();

                            }
                    }});

                }
                else
                    {
                        $('#paidAmount').val(paidAmountConfirm);
                        excess = paidAmountConfirm - totalPayable; // calcula o valor do troco
                        $('#excess').val(excess); // coloca o valor no input
                        $('#cashPayment').css("display", "none");// esconde o botao "Dinheiro"
                        $('#cashPaymentConfirm').css("display", "block"); //mostra o botao "Confirmar"
                        flagCash = true;
                        flag = false;

                    }
            },
            cancelar: function () {
                flag = false;
            }
        }
    });

}
function cashPaymentConfirm()
{
    $.confirm({
        title: 'Confirmar',
        content: 'Confirmar pagamento no DINHEIRO ?',
        buttons: {
            confirmar: function ()
            {
                var dataString = {
                    products        : products,
                    totalPayable    : totalPayable,
                    paymentType            : 1
                };
                $.ajax({
                    type: "POST",
                    url: base_url+'pdv/add',
                    data: dataString,
                    success: function(response)
                    {
                        $("#totalPayable").val(0);
                        totalPayable = 0;
                        removeAllTr();
                        flag = false;
                        products = [];
                        flagCash = false;
                        $('#paidAmount').val(0);
                        $('#excess').val(0);
                        $('#cashPayment').css("display", "block");// mostra o botao "Dinheiro"
                        $('#cashPaymentConfirm').css("display", "none"); //esconde o botao "Confirmar"
                    },
                    error: function()
                    {
                        $.notify("Falha ao enviar os dados! Código do erro: #Pdv001", "error");
                    }
                })
            },
            cancelar: function () {
                flag = false;
            }
        }
    });
}
/*-------------------------------------------------debitCard----------------------------------------------------------*/
function debitCard()
{
    $.confirm({
        title: 'Confirmar',
        content: 'Confirmar pagamento no cartão de DÉBITO no valor de R$'+totalPayable+'?',
        buttons: {
            confirmar: function ()
            {
                var dataString = {
                    products        : products,
                    totalPayable    : totalPayable,
                    paymentType            : 2
                };
                $.ajax({
                    type: "POST",
                    url: base_url+'pdv/add',
                    data: dataString,
                    success: function(response)
                    {
                        $("#totalPayable").val(0);
                        totalPayable = 0;
                        removeAllTr();
                        flag = false;
                        products = [];
                    },
                    error: function()
                    {
                        $.notify("Falha ao enviar os dados! Código do erro: #Pdv002", "error");
                    }
                })
            },
            cancelar: function () {
                flag = false;
            }
        }
    });
}

/*-------------------------------------------------creditCard---------------------------------------------------------*/
function creditCard()
{
    $.confirm({
        title: 'Confirmar',
        content: 'Confirmar pagamento no cartão de CRÉDITO no valor de R$'+totalPayable+'?',
        buttons: {
            confirmar: function ()
            {
                var dataString = {
                    products               : products,
                    totalPayable           : totalPayable,
                    paymentType            : 3
                };
                $.ajax({
                    type: "POST",
                    url: base_url+'pdv/add',
                    data: dataString,
                    success: function(response)
                    {
                        $("#totalPayable").val(0);
                        totalPayable = 0;
                        removeAllTr();
                        flag = false;
                        products = [];

                    },
                    error: function()
                    {
                        $.notify("Falha ao enviar os dados! Código do erro: #Pdv003", "error");
                    }
                })
            },
            cancelar: function () {
                flag = false;
            }
        }
    });
}
/*-------------------------------------------------btn-search-product-------------------------------------------------*/
//Ao clicar no botão pesquisar produtos
$('#btn-search-product').on('click', function(){
   var internalCode = $('#searchProduct').val();
   var dataString = {
       internalCode : internalCode
   } ;
   var quantity = $('#quantity').val();



   $.ajax({
        type: "POST",
        url: base_url+'pdv/searchProduct',
        data: dataString,
        success: function(response) {
            // recebe um json com dois campos:
            // response -> sendo true caso tenha dado tudo certo e false caso algo
            // tenha falhado.
            // msg -> mensagem de feedback
            var obj = JSON.parse(response);
            if(obj.response)
            {
                //guarda o id, o preço e o nome em variaveis;
                var id = obj.result[0]['id'];
                var price = obj.result[0]['price'];
                var name = obj.result[0]['name'];
                var p = {// cria um objeto
                    id : id ,
                    quantity : quantity,
                    price: price
                };

                products.push(p);//coloca o objeto em um array;

                var subtotal =  quantity * price;
                totalPayable = totalPayable+subtotal;
                $('#totalPayable').val(totalPayable);
                var newRoll = $("<tr class='prod'>");
                var cols = "";
                cols += '<td>'+quantity+'</td>';
                cols += '<td>'+name+'</td>';
                cols += '<td> R$'+price+'</td>';
                cols += '<td> R$'+subtotal+'</td>';
                cols += '<td><div class="pull-right action-buttons"><button ' +
                    'onclick="removeTr(this, '+id+','+quantity+', '+subtotal+')" class="trash">' +
                    '<em class="fa fa-trash"></em></button></div></td>';

                newRoll.append(cols);
                $('#pdv-table').append(newRoll);
                //limpa os campos de busca e quantidade
                $('#searchProduct').val('');
                $('#quantity').val('');
            }
            else
                $.notify(obj.result, "error");
        },
        error: function(){
            console.log('Post falhou');
        }
    })
});
/*-------------------------------------------------removeAllTr--------------------------------------------------------*/
function removeAllTr()
{
    $('#pdv-table').find('.prod').remove();
}
/*-------------------------------------------------removeTr***--------------------------------------------------------*/
function removeTr(item,id, quantity, subtotal)
{
    var tr = item.closest('tr');

    tr.remove();
    var totalPayable = parseFloat($('#totalPayable').val());
    totalPayable = totalPayable - subtotal;
    $('#totalPayable').val(totalPayable);
    $.map(products, function(val, i){
        if(val)
        {
            if(val.id == id && val.quantity == quantity)
                products.splice(i,1);
        }


    });
}



