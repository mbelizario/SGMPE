$('#edit-btn').on('click', function(){
  var userId = $('input[name=userId]:checked').val();
  var base_url = $('#base_url').val();
  window.location.href = base_url+'users/edit/'+userId;
  // console.log(base_url+'users/save/'+userId);
});

$('#rmv-btn').on('click', function(){
  var userId = $('input[name=userId]:checked').val();
  var base_url = $('#base_url').val();
  $.ajax({
    type: "POST",
    url: base_url+'users/delete',
    data: {id : userId},
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
          window.location.replace(base_url+'users');
        }, 500)
      }
      else
        $.notify(obj.msg, "error");
    },
    error: function(response)
    {
      $.notify("Falha ao enviar os dados! Código do erro: #user003", "error");
    }
  })
  // console.log(base_url+'users/save/'+userId);
});
