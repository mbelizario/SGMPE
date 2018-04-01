$('#add-btn').on('click', function(){
    var name        = $('#name').val();
    var description = $('#description').val();

    var base_url    = $('#base_url').val();

    var dataString = {
        name        : name,
        description : description
    };

    $.ajax({
        type: "POST",
        url: base_url+'productCategories/add',
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
                    window.location.replace(base_url+'productCategories');
                }, 1000)
            }
            else
            {
                $('.form-group').removeClass('has-error');
                $.notify(obj.msg, "error");
                switch (obj.code)
                {
                    case 1:
                        $('#form-name').addClass('has-error');
                        break;
                    case 2:
                        $('#form-description').addClass('has-error');
                        break;
                    default:

                }
            }
        },
        error: function(response)
        {
            $.notify("Falha ao enviar os dados! Código do erro: #productCategories001", "error");
        }
    })
});
