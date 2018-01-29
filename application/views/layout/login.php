<html>
<head>
<meta charset="utf-8">
<title>{title_for_layout}</title>
<link href="<?php echo base_url('public/css/login.css')?>" rel="stylesheet">
</head>
<script src="<?php echo base_url('public/js/jquery-3.2.1.js')?>"></script>
<body>
  <input id="base_url" value="<?php echo base_url()?>" type="hidden">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h1 class="text-center">Entrar</h1>
          </div>
           <div class="modal-body">
               <div class="form-group">
                   <input type="text" id="username"
                   class="form-control input-lg" placeholder="Nome de usuário"/>
               </div>

               <div class="form-group">
                   <input type="password" id="pass"
                   class="form-control input-lg" placeholder="Senha"/>
               </div>

               <div class="form-group">
                   <input type="button" id="login"
                    class="btn btn-block btn-lg btn-primary" value="Entrar"/>
                   <!-- <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Forgot Password</a></span> -->
               </div>
           </div>
      </div>
   </div>

</body>
<script src="<?php echo base_url('public/js/plugins/notify.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/login/login.js')?>"></script>

</html
