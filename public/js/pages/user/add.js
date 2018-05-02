$('#add-btn').on('click', function(){
  var firstname   = $('#firstname').val();
  var lastname    = $('#lastname').val();
  var username    = $('#username').val();
  var email       = $('#email').val();
  var pass        = $('#pass').val();
  var confirmPass = $('#confirmPass').val();
  var userType    = $('#userType').val();
  var base_url    = $('#base_url').val();

  var dataString = {
    firstname   : firstname,
    lastname    : lastname,
    userType    : userType,
    username    : username,
    email       : email,
    pass        : pass,
    confirmPass : confirmPass
  };
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
            $('#form-userType').addClass('has-error');
            break;
          case 4:
          case 5:
            $('#form-username').addClass('has-error');
            break;
          case 6:
          case 7:
            $('#form-email').addClass('has-error');
            break;
          case 8:
            $('#form-pass').addClass('has-error');
            break;
          case 9:
            $('#form-confirmPass').addClass('has-error');
            break;
          case 10:
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
});
