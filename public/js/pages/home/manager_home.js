var base_url = $('#base_url').val();
//***sales iin last six months variables***
var salesValues = [];
var salesMonths = [];

/* ***Bills to receive vs bills to pay variables*/
var billsToPay = [];
var billsToReceive = [];

var billId = $('input[name=billId]:checked').val();
$(document).ready(function(){

    salesInLastSixMonths();
    billsToReceiveVsBillsToPay();

    if(!billId)
    {
        $("#payBill1").prop("disabled", "disabled");
    }

});
//saídas nos ultimos 6 meses
function salesInLastSixMonths()
{
    var dataString = {'test' : 1};
    $.ajax({
        type: "POST",
        url: base_url+'managerDashboard/salesInLastSixMonths',
        data: dataString,
        success: function(response)
        {

            // recebe um json com dois campos:
            // response -> sendo true caso tenha dado tudo certo e false caso algo
            // tenha falhado.
            // msg -> mensagem de feedback
            var obj = JSON.parse(response);

            $.map(obj.result, function(val, i){

                salesValues.push(val.sum);
                var aux;
                switch (val.mon)
                {
                    case 'jan':
                    case 'Jan':
                        aux = 'Jan';
                        break;
                    case 'feb':
                    case 'Feb':
                        aux = 'Fev';
                        break;
                    case 'mar':
                    case 'Mar':
                        aux = 'Mar';
                        break;
                    case 'apr':
                    case 'Apr':
                        aux = 'Abr';
                        break;
                    case 'may':
                    case 'May':
                        aux = 'Mai';
                        break;
                    case 'jun':
                    case 'Jun':
                        aux = 'Jun';
                        break;
                    case 'Jul':
                    case 'jul':
                        aux = 'Jul';
                        break;

                    case 'aug':
                    case 'Aug':
                        aux = 'Ago';
                        break;
                    case 'sep':
                    case 'Sep':
                        aux = 'Set';
                        break;
                    case 'oct':
                    case 'Oct':
                        aux = 'Out';
                        break;
                    case 'nov':
                    case 'Nov':
                        aux = 'Nov';
                        break;
                    case 'dec':
                    case 'Dec':
                        aux = 'Dez';
                        break;
                }

                salesMonths.push(aux);
            });
            salesValues.unshift('Entradas (Vendas)');

            var chart = c3.generate({
                bindto: '#line-chart',
                data: {
                    columns: [salesValues]
                },
                axis: {
                    x: {
                        type: 'category',
                        categories: salesMonths
                    },
                    y: {
                        tick: {
                            format: d3.format("$,")
                        }
                    }
                }
            });

        },
        error: function(response)
        {
            $.notify("Falha ao enviar os dados! Código do erro: #salesinsixmonths001", "error");
        }
    })
}

function billsToReceiveVsBillsToPay()
{
    var dataString = {'test' : 1};
    $.ajax({
        type: "POST",
        url: base_url+'managerDashboard/billsToReceiveVsBillsToPay',
        data: dataString,
        success: function(response)
        {

            // recebe um json com dois campos:
            // response -> sendo true caso tenha dado tudo certo e false caso algo
            // tenha falhado.
            // msg -> mensagem de feedback
            var obj = JSON.parse(response);
            $.map(obj.result.br, function(val, i){
                billsToReceive.push(val.sum);
            });
            $.map(obj.result.bp, function(val, i){
                billsToPay.push(val.sum);
            });


            billsToReceive.unshift("Entradas");
            billsToPay.unshift('Saídas');
            var chart = c3.generate({
                bindto: '#bar-chart',
                data: {
                    columns:[billsToReceive, billsToPay],
                    type: 'bar',
                    colors:{"Entradas":"green",
                            "Saídas": "red"}
                },
                axis: {
                    x: {
                        type: 'category',
                        categories: " "
                    },
                    y: {
                        tick: {
                            format: d3.format("$,")
                        }
                    }
                }
            });

        },
        error: function(response)
        {
            $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
        }
    })
}

$("#payBill1").on("click", function(){

    $.confirm({
        title: 'Dar baixa',
        content: '' +
        '<form action="" class="formName">' +
        '<div class="form-group">' +
        '<label>Data</label>' +
        '<input  placeholder="Data" class="datepicker form-control"  />' +
        '<label>Valor pago</label>' +
        '<input  placeholder="Valor pago" class="moneyValues form-control"/>' +
        '</div>' +
        '</form>',
        buttons: {
            formSubmit: {
                text: 'Ok',
                btnClass: 'btn-blue',
                action: function () {
                    console.log('ok');
                }
            },
            cancel: function () {
                //close
            },
        }
    });
});