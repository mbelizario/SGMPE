<div class="row">
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">
      <em class="fa fa-home"></em>
    </a></li>
    <li><a href="<?php echo base_url('users')?>">Usuários</a></li>
    <li class="active">Adicionar Usuário</li>
  </ol>
</div><!--/.row-->

<div class="row">
  <div class="col-lg-12">
    <div class="pages-toolbar">
      <ul>
        <li> <a type="button" id="add-btn" class="btn btn-success"> <i class="fa fa-plus">Adicionar</i></a> </li>
        <!-- <li> <a href="#"  class="btn btn-warning"> <i class="fa fa-pencil-square-o">Editar</i> </a> </li> -->
        <li> <a href="<?php echo base_url('users')?>" class="btn btn-danger"><i class="fa fa-times">Voltar</i></a> </li>
      </ul>
    </div>
  </div>
</div>
<input id="base_url" name="base_url"class="form-control"
type="hidden" value="<?php echo base_url();?>">
<input id="passStatus" type="hidden">
<input id="emailStatus" type="hidden">
<input id="usernameStatus" type="hidden">
<input id="id" name="id"class="form-control"
type="hidden" value="">
<div class="panel panel-default">
  <div class="panel-heading">Adicionar Usuário</div>
  <div class="panel-body">
    <form role="form">
        <div class="row">
          <!-- NAME -->
          <div class="col-lg-6 col-md-12">
            <div class="form-group" id="form-firstname">
              <label>Nome:</label>
              <input id="firstname" name="firstname"class="form-control"
              placeholder="Nome">
            </div>
          </div> <!--col-->
          <!-- LASTNAME -->
          <div class="col-lg-6 col-md-12">
            <div class="form-group" id="form-lastname">
              <label>Sobrenome:</label>
              <input id="lastname" name='lastname' class="form-control" placeholder="Sobrenome">
            </div>
          </div><!--col-->
        </div><!--row-->
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <!-- USERNAME -->
            <div class="form-group" id="form-username">
              <label>Nome de usuario:</label>
              <input id="username" name="username" class="form-control"
              placeholder="Nome de usuario">
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="form-group" id="form-email">
              <label>E-mail:</label>
              <input id="email" name="email" class="form-control"
              placeholder="E-mail">
            </div>
          </div><!--col-->
        </div><!--row-->
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="form-group" id="form-pass">
              <label>Senha</label>
              <input id="pass" name="pass" type="password" class="form-control">
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="form-group" id="form-confirmPass">
              <label>Confirmar Senha</label>
              <input id="confirmPass" name="confirmPass" type="password" class="form-control">
            </div>
          </div>
        </div><!--row-->
      </form>
    </div>
  </div>
  <script src="<?php echo base_url('public/js/pages/user/add.js')?>"></script>
