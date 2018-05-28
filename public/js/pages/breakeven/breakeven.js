$(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        weekStart: 0,
        // startDate: '0d',
        todayHighlight: true
    });
});
var base_url = $("#base_url").val();
$("#search").on("click", function()
{
   var id = $("#productSelect").val();
   var beginDate = $("#beginDate").val();
   var endDate = $("#endDate").val();
   var dataString = {
        id          : id,
        beginDate   : beginDate,
        endDate     : endDate
   };


    $.ajax({
        type: "POST",
        url: base_url+'breakeven/productInformation',
        data: dataString,
        success: function(response)
        {
            var obj = JSON.parse(response);
            if(obj.response) {
                $("#result1").empty();
                // console.log(obj.result2);
                //fazendo o tratamento da string recebida do banco
                var profit = obj.result[0].profit.replace("R$", "");
                profit = profit.replace(".", "");
                profit = profit.replace(",", ".");
                //fazendo o tratamento da string recebida do banco
                profit = parseFloat(profit);
                if(obj.result2[0].sum)
                {
                    var bills = obj.result2[0].sum.replace("R$", "");
                    bills= bills.replace(".", "");
                    bills = bills.replace(",", ".");
                    bills = parseFloat(bills);
                }
                else
                {
                    bills = 0;
                }
                //total de vendas no período (em R$)
                if(obj.result4[0].sum)
                {
                    //Tratando a string do banco
                    var totalSale = obj.result4[0].sum.replace("R$", "");
                    totalSale = totalSale.replace(".", "");
                    totalSale = totalSale.replace(",", ".");
                    totalSale = parseFloat(totalSale)
                }
                // vendas do produto no período (em R$)
                if(obj.result5[0].sum)
                {
                    //tratando a string que vem do banco
                    var totalSaleOfProduct = obj.result5[0].sum.replace("R$", "");
                    totalSaleOfProduct = totalSaleOfProduct.replace(".", "");
                    totalSaleOfProduct = totalSaleOfProduct.replace(",", ".");
                    totalSaleOfProduct = parseFloat(totalSaleOfProduct)
                }
                //calculando a participação do produto nas vendas (%)
                var productParticipation = (100*totalSaleOfProduct)/totalSale;
                var productParticipationPercent = productParticipation /100;




                //calculando quantas unidades do produto devem ser vendidas para atingir o ponto de equilibrio
                var breakeven = bills * productParticipationPercent/profit;
                breakeven = Math.ceil(breakeven);//arredonda a divisão para cima

                var soldQuantity = obj.result3[0].sum; //quantidade vendida no período
                // console.log(obj);''
                var chart = c3.generate({
                    bindto: "#graph1",
                    data: {
                        columns: [
                            ['Já vendido', soldQuantity]
                        ],
                        type: 'gauge',
                        bindto: '#graph1',
                        onclick: function (d, i) { console.log("onclick", d, i); },
                        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
                    },
                    gauge:
                        {
                            min: 0, // 0 is default, //can handle negative min e.g. vacuum / voltage / current flow / rate of change
                            max: breakeven, // 100 is default

                        },
                    color: {
                        pattern: ['red'], // the three color levels for the percentage values.
                        threshold: {
                            values: []
                        }
                    },
                    size: {
                        height: 180
                    }
                });

            $("#result1").append(


                "                <div class=\"table\">\n" +
                "                    <table class=\"table\" id=\"table-breakeven\">\n" +
                "                        <thead>\n" +
                "                        <th></th>\n" +
                "                        <th></th>\n" +
                "                        </thead>\n" +
                "                        <tbody>\n" +
                "                        <tr>\n" +
                "                            <td>Custo de produção: </td>\n" +
                "                            <td> "+obj.result[0].cost+"</td>\n" +
                "                        </tr>\n" +
                "                        <tr>\n" +
                "                            <td>Preço: </td>\n" +
                "                            <td> "+obj.result[0].price+" </td>\n" +
                "                        </tr>\n" +
                "                        <tr>\n" +
                "                            <td>Margem de contribuição: </td>\n" +
                "                            <td> "+obj.result[0].profit+"</td>\n" +
                "                        </tr>\n" +

                "                        <tr>\n" +
                "                            <td>Total de contas fixas no período: </td>\n" +
                "                            <td> "+obj.result2[0].sum+"</td>\n" +
                "                        </tr>\n" +

                "                        <tr>\n" +
                "                            <td>Total vendido  no período: </td>\n" +
                "                            <td> "+obj.result4[0].sum+"</td>\n" +
                "                        </tr>\n" +

                "                        <tr>\n" +
                "                            <td>Vendas do produto no período: </td>\n" +
                "                            <td> "+obj.result5[0].sum+"</td>\n" +
                "                        </tr>\n" +

                "                        <tr>\n" +
                "                            <td>Participação do produto nas vendas: </td>\n" +
                "                            <td> "+productParticipation.toFixed(2)+"%</td>\n" +
                "                        </tr>\n" +

                "                        <tr>\n" +
                "                            <td>Ponto de equilíbrio: </td>\n" +
                "                            <td>"+breakeven+" Unidades</td>\n" +
                "                        </tr>\n" +
                "                        </tbody>\n" +
                "                    </table>\n" +
                "                </div>\n"
            );
            }
        },
        error: function(response)
        {
            $.notify("Falha ao buscar informações do produto! Código do erro: #breakeven001", "error");
        }
    })
});