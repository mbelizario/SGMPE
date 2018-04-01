<!-- <div class="container"> -->
  <div class="row">
  	<ol class="breadcrumb">
  		<li><a href="<?php echo base_url();?>">
  			<em class="fa fa-home"></em>
  		</a></li>
  		<li class="active">Usuários</li>
  	</ol>
  </div><!--/.row-->

  <!-- <div class="row">
  	<div class="col-lg-12">
  		<h1 class="page-header">Usuários</h1>
  	</div>
  </div> -->
   <!--/.row-->
  <div class="row">
    <div class="col-lg-12">
      <div class="pages-toolbar">
        <ul>
          <li> <a href="<?php echo base_url('users/add')?>" class="btn btn-info"> <i class="fa fa-plus">Adicionar</i></a> </li>
          <li> <button type="button" id="edit-btn" class="btn btn-warning"> <i class="fa fa-pencil-square-o">Editar</i> </button> </li>
          <li> <button type="button" id="rmv-btn" class="btn btn-danger"><i class="fa fa-times">Excluir</i></button> </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <input type="hidden" id='base_url' value="<?php echo base_url();?>">
        <div class="panel-heading">Usuários</div>
        <div class="panel-body">
          <?php if($users):?>
          <!-- <div class="col-md-12"> -->
            <div class="table">
              <table class="table table table-list" id="table-users">
                <thead>
                  <th></th>
                  <th>Nome</th>
                  <th>Sobrenome</th>
                  <th>E-mail</th>
                  <th>Nome de usuário</th>
                <thead>
                  <tbody>
                    <?php
                      foreach($users as $user):
                      ?>
                      <tr>
                        <td>
                          <div class="input-group">
                              <input type="radio" name="userId"
                              value="<?php echo $user->id?>">
                          </div>
                        </td>
                        <td> <?php echo $user->firstname;  ?> </td>
                        <td> <?php echo $user->lastname;  ?> </td>
                        <td> <?php echo $user->email;  ?></td>
                        <td> <?php echo $user->username  ?></td>
                      </tr>
                      <?php
                      endforeach;
                    ?>
                  </tbody>
              </table>

            </div>
            <?else: echo "Nenhum usuário cadastrado!"; endif;?>
          <!-- </div> -->
        </div>
      </div><!-- /.panel-->
    </div>
  </div>
<script src="<?php echo base_url('public/js/pages/user/user.js')?>"></script>

<!-- </div> -->
