//desabilitando os botoes de editar e remover
$(document).ready(function(){
   $('#edit-btn').prop("disabled", "disabled");
   $('#rmv-btn').prop('disabled', 'disabled');

});
//habilita os botoes editar e remover, assim que seleciona alguma linha
$('.table-list tbody tr').on('click', function(){
        $('#edit-btn').prop("disabled", false);
        $('#rmv-btn').prop('disabled', false);
});
$('#edit-btn').on('click', function(){
    var supplierId = $('input[name=supplierId]:checked').val();
    var base_url = $('#base_url').val();
    window.location.href = base_url+'suppliers/edit/'+supplierId;

});

$('#rmv-btn').on('click', function(){
    var supplierId = $('input[name=supplierId]:checked').val();
    var base_url = $('#base_url').val();
    $.ajax({
        type: "POST",
        url: base_url+'suppliers/delete',
        data: {id : supplierId},
        success: function(response)
        {
            // recebe um json com dois campos:
            // response -> sendo true caso tenha dado tudo certo e false caso algo
            // tenha falhado.
            // msg -> msg de feedback
            var obj = JSON.parse(response);
            if(obj.response)
            {
                $.notify(obj.msg, "success");
                setTimeout(function(){
                    window.location.replace(base_url+'suppliers');
                }, 500)
            }
            else
                $.notify(obj.msg, "error");
        },
        error: function(response)
        {
            $.notify("Falha ao enviar os dados! Código do erro: #supplier003", "error");
        }
    })
    // console.log(base_url+'users/save/'+userId);
});
