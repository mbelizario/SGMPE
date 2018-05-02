$('#login').on('click', function(){
  var username = $('#username').val();
  var pass = $('#pass').val();
  var base_url = $('#base_url').val();
  var dataString = {
    username  : username,
    pass      : pass
  };
  $.ajax({
    type: "POST",
    url: base_url+'login/isUser',
    data: dataString,
    success: function(response)
    {
      // recebe um json com dois campos:
      // response -> sendo true caso tenha dado tudo certo e false caso algo
      // tenha falhado.
      // msg -> msg de feedback
      var obj = JSON.parse(response);
      if(obj.response)
          window.location.replace(base_url+'home');
      else
        $.notify(obj.msg, "error");
    },
    error: function(response)
    {
      $.notify("Falha ao enviar os dados! Código do erro: #user001", "error");
    }
  })
});
