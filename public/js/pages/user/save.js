$(document).ready(function(){
  $('.tooltip-up').hide(); // esconde todos os tooltip-ups
});
//***************************************************************************
// faz o post para salvar o usuário
//***************************************************************************
$('#save-btn').on('click',function()
{

  var emailStatus = $('#emailStatus').val();
  var usernameStatus = $('#usernameStatus').val();
  var passStatus = $('#passStatus').val();
  if(emailStatus == 'true' && usernameStatus == 'true' && passStatus == 'true')//se a validação estiver ok
  {
    var id          = $('#id').val();
    var firstName   = $('#firstName').val();
    var lastName    = $('#lastName').val();
    var userName    = $('#userName').val();
    var email       = $('#email').val();
    var pass        = $('#pass').val();
    var confirmPass = $('#confirmPass').val();
    var base_url    = $('#base_url').val();

    var dataString = {
      id          : id,
      firstName   : firstName,
      lastName    : lastName,
      userName    : userName,
      email       : email,
      pass        : pass,
      confirmPass : confirmPass
    };
    $.ajax({
      type: "POST",
      url: base_url+'users/save',
      data: dataString,
      success: function(response)
      {
        // recebe um json com dois campos:
        // response -> sendo true caso tenha dado tudo certo e false caso algo
        // tenha falhado.
        // msg -> msg de feedback
        var obj = JSON.parse(response);
        if(obj.response)
          $.notify(obj.msg, "success");
        else
          $.notify(obj.msg, "error");
      },
      error: function(response)
      {
        $.notify("Falha ao enviar os dados! Código do erro: #user001", "error");
      }
    })
  }
  else//algo na validação falhou
  {
    $.notify("Verifique os campos em vermelho!", "error");
  }


});
//***************************************************************************
//a cada letra digitada checa no BD se o username é valido ou não.
//o username tbm precisa ter mais de 3 letras
//***************************************************************************
$('#userName').on('keyup', function(){
  var base_url    = $('#base_url').val();
  var username = $('#userName').val();
  if(username.length >= 3) // caso tenha mais que 3 letras começa a checar no BD
  {
    $.ajax({
    type: "POST",
    url: base_url+'users/checkUsername',
    data: {username : username},
      success: function(response)
      {
        var obj = JSON.parse(response);
        //guarda a resposta (true ou false)  em um input hidden
          $('#usernameStatus').val(obj.response);
          if(obj.response)// caso username esteja disponivel
          {
            $('#tooltip-up-userName').hide();
            $('#form-userName').removeClass('has-error');
          }
          else//caso nao esteja disponivel
          {
            $('#tooltip-up-userName').show();
            $('#form-userName').addClass('has-error');
          }


      },
      error: function(response)//caso o post falhe
      {
        $.notify("Falha ao verificar username! Código do erro: #user002", "error");
      }
    })
  }
  else//caso não tenha mais que 3 letras
  {
    $('#usernameStatus').val(false);
    $('#tooltip-up-userName').show();
  }

});
//***************************************************************************
//verifica a cada palavra digitada no campo "confirmar senha"
//se os valores digitados em "senha" e "confirmar senha" são iguais.
//***************************************************************************
$('#confirmPass').on('keyup', function()
{
  var pass = $('#pass').val();
  var confirmPass = $('#confirmPass').val();

  if(pass!=confirmPass)//se for diferente
  {
    $('#passStatus').val(false); //guarda false em um hidden input
    $('#tooltip-up-pass').show();
    $('#form-pass').addClass('has-error');
    $('#form-confirmPass').addClass('has-error');
  }
  else// se for igual
  {
    $('#passStatus').val(true);//guarda true no hidden input
    $('#tooltip-up-pass').hide();
    $('#form-pass').removeClass('has-error');
    $('#form-confirmPass').removeClass('has-error');
  }
});

//***************************************************************************
// verifica se o email é valido
//***************************************************************************
$('#email').on('keyup', function(){
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var email = $('#email').val();
  if(!re.test(email))// se o email nao for valido
  {
    $('#emailStatus').val(false); //guarda false em um hidden input
    $('#tooltip-up-email').show();
    $('#form-email').addClass('has-error');
  }
  else
  {
    $('#emailStatus').val(true);//guarda true no hidden input
    $('#tooltip-up-email').hide();
    $('#form-email').removeClass('has-error');
  }

});
