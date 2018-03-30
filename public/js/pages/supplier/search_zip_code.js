$('#search_zip_code').on("click", function(){
    var zip_code = $('#addressZipCode').val();
    zip_code = zip_code.replace(/\D/g, '');
    $.getJSON("https://viacep.com.br/ws/"+ zip_code +"/json/?callback=?", function(dados) {
        if (!("erro" in dados))
        {
            $('#addressStreet').val(dados.logradouro);
            $('#addressNeighborhood').val(dados.bairro);
            $('#addressCity').val(dados.localidade);
            $('#addressState').val(dados.uf);
        }
        else
        {
            $.notify("CEP não encontrado, tente novamente!", "error");
        }
    });
});