$(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        weekStart: 0,
        // startDate: '0d',
        todayHighlight: true
    });

    $('#visualize-btn').prop("disabled", "disabled");
});

//habilita os botoes editar e remover, assim que seleciona alguma linha
$('.table-list tbody tr').on('click', function(){
    $('#visualize-btn').prop("disabled", false);

});


var base_url = $("#base_url").val();
$("#search").on("click", function() {
    var id = $("#productSelect").val();
    var beginDate = $("#beginDate").val();
    var endDate = $("#endDate").val();
    var dataString = {
        id: id,
        beginDate: beginDate,
        endDate: endDate
    };


    $.ajax({
        type: "POST",
        url: base_url + 'receivedAndPaidBills/received',
        data: dataString,
        success: function (response) {
            var obj = JSON.parse(response);
            if (obj.response) {


                $("#result").empty();

                $.map( obj.result.bills, function( val, i ) {



                    $("#result1").append(
                        "                                <tr>\n" +
                        "                                    <td> "+obj.result.bills[i].document_number+" </td>\n" +
                        "                                    <td> "+obj.result.bills[i].due_date+" </td>\n" +
                        "                                    <td> "+obj.result.bills[i].receipt_day+"</td>\n" +
                        "                                    <td> "+obj.result.bills[i].amount+"</td>\n" +
                        "                                </tr>"
                    )
                });

            }
        },
        error: function (response) {
            $.notify("Falha ao buscar informações da conta! Código do erro: #receivedAndPaidBills001", "error");
        }
    });
});
