//mascara para os inputs dos modais
var base_url = $('#base_url').val();
$(document).ready(function(){
    $(".moneyValues").maskMoney({
        prefix: "R$:",
        decimal: ",",
        thousands: "."
    });

});
//escolha de  fluxo de caixa por semestre
$('#semester').on('change', function(){
    var value = $("#semester").val();
    if(value == 1)
    {
        $('#tab1').css('display', 'block');
        $('#tab2').css('display', 'none');
    }
    if(value == 2)
    {
        $('#tab1').css('display', 'none');
        $('#tab2').css('display', 'block');
    }

});

//abrir modais
$('#jan').on('click', function(){
    $('#jan-modal').modal('show');
});
$('#feb').on('click', function(){
    $('#feb-modal').modal('show');
});
$('#mar').on('click', function(){
    $('#mar-modal').modal('show');
});
$('#apr').on('click', function(){
    $('#apr-modal').modal('show');
});
$('#may').on('click', function(){
    $('#may-modal').modal('show');
});
$('#jun').on('click', function(){
    $('#jun-modal').modal('show');
});
$('#jul').on('click', function(){
    $('#jul-modal').modal('show');
});
$('#aug').on('click', function(){
    $('#aug-modal').modal('show');
});
$('#sep').on('click', function(){
    $('#sep-modal').modal('show');
});
$('#oct').on('click', function(){
    $('#oct-modal').modal('show');
});
$('#nov').on('click', function(){
    $('#nov-modal').modal('show');
});
$('#dec').on('click', function(){
    $('#dec-modal').modal('show');
});

$("#save-jan").on("click", function(){
   var janDV = $("#janDV").val();
   janDV = janDV.replace("R$:","");
   if(!janDV)
   {
       $.alert({
           title: 'Alerta!',
           content: 'Por favor, preencha o Nível Desejado!'
       });
   }
   else
   {
       var dataString = {
           month    : 1,
           year     : 2018,
           value    : janDV
       };
       $.ajax({
           type: "POST",
           url: base_url+'cashFlow/addDesiredValue',
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
                       window.location.replace(base_url+'cashFlow');
                   }, 1000)
               }
               else
               {
                   $.notify(obj.msg, "error");
               }
           },
           error: function(response)
           {
               $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
           }
       })
   }
});

$("#save-feb").on("click", function(){
    var febDV = $("#febDV").val();
    febDV = febDV.replace("R$:","");
    if(!febDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 2,
            year     : 2018,
            value    : febDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-mar").on("click", function(){
    var marDV = $("#marDV").val();
    marDV = marDV.replace("R$:","");
    if(!marDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 3,
            year     : 2018,
            value    : marDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-apr").on("click", function(){
    var aprDV = $("#aprDV").val();
    aprDV = aprDV.replace("R$:","");
    if(!aprDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 4,
            year     : 2018,
            value    : aprDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-may").on("click", function(){
    var mayDV = $("#mayDV").val();
    mayDV = mayDV.replace("R$:","");
    if(!mayDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 5,
            year     : 2018,
            value    : mayDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-jun").on("click", function(){
    var junDV = $("#junDV").val();
    junDV = junDV.replace("R$:","");
    if(!junDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 6,
            year     : 2018,
            value    : junDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-jul").on("click", function(){
    var julDV = $("#julDV").val();
    julDV = julDV.replace("R$:","");
    if(!julDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 7,
            year     : 2018,
            value    : julDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-aug").on("click", function(){
    var augDV = $("#augDV").val();
    augDV = augDV.replace("R$:","");
    if(!augDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 8,
            year     : 2018,
            value    : augDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-sep").on("click", function(){
    var sepDV = $("#sepDV").val();
    sepDV = sepDV.replace("R$:","");
    if(!sepDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 9,
            year     : 2018,
            value    : sepDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-oct").on("click", function(){
    var octDV = $("#octDV").val();
    octDV = octDV.replace("R$:","");
    if(!octDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 10,
            year     : 2018,
            value    : octDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-nov").on("click", function(){
    var novDV = $("#novDV").val();
    novDV = novDV.replace("R$:","");
    if(!novDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 11,
            year     : 2018,
            value    : novDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});

$("#save-dec").on("click", function(){
    var decDV = $("#decDV").val();
    decDV = decDV.replace("R$:","");
    if(!decDV)
    {
        $.alert({
            title: 'Alerta!',
            content: 'Por favor, preencha o Nível Desejado!'
        });
    }
    else
    {
        var dataString = {
            month    : 12,
            year     : 2018,
            value    : decDV
        };
        $.ajax({
            type: "POST",
            url: base_url+'cashFlow/addDesiredValue',
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
                        window.location.replace(base_url+'cashFlow');
                    }, 1000)
                }
                else
                {
                    $.notify(obj.msg, "error");
                }
            },
            error: function(response)
            {
                $.notify("Falha ao enviar os dados! Código do erro: #products001", "error");
            }
        })
    }
});