$('#add-btn').on('click', function(){
  var firstname   = $('#firstname').val();
  var lastname    = $('#lastname').val();
  var username    = $('#username').val();
  var email       = $('#email').val();
  var pass        = $('#pass').val();
  var confirmPass = $('#confirmPass').val();
  var base_url    = $('#base_url').val();

  var dataString = {
    firstname   : firstname,
    lastname    : lastname,
    username    : username,
    email       : email,
    pass        : pass,
    confirmPass : confirmPass
  };
console.log(dataString);
  $.ajax({
    type: "POST",
    url: base_url+'users/add',
    data: dataString,
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
        }, 1000)
      }
      else
      {
        $('.form-group').removeClass('has-error');
        $.notify(obj.msg, "error");
        switch (obj.code)
        {
          case 1:
            $('#form-firstname').addClass('has-error');
            break;
          case 2:
            $('#form-lastname').addClass('has-error');
            break;
          case 3:
          case 4:
            $('#form-username').addClass('has-error');
            break;
          case 5:
          case 6:
            $('#form-email').addClass('has-error');
            break;
          case 7:
            $('#form-pass').addClass('has-error');
            break;
          case 8:
            $('#form-confirmPass').addClass('has-error');
            break;
          case 9:
            $('#form-pass').addClass('has-error');
            $('#form-confirmPass').addClass('has-error');
            break;
          default:

        }
      }
    },
    error: function(response)
    {
      $.notify("Falha ao enviar os dados! Código do erro: #user001", "error");
    }
  })
})
