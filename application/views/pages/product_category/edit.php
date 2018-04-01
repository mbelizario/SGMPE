<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li><a href="<?php echo base_url('productCategories')?>">Categorias</a></li>
        <li class="active">Atualizar Categoria</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="pages-toolbar">
            <ul>
                <li> <a type="button" id="edit-btn" class="btn btn-success"> <i class="fa fa-plus">Atualizar</i></a> </li>
                <!-- <li> <a href="#"  class="btn btn-warning"> <i class="fa fa-pencil-square-o">Editar</i> </a> </li> -->
                <li> <a href="<?php echo base_url('productCategories')?>"
                        class="btn btn-danger"><i class="fa fa-times">Voltar</i></a> </li>
            </ul>
        </div>
    </div>
</div>
<input id="base_url" name="base_url"class="form-control"
       type="hidden" value="<?php echo base_url();?>">
<input id="id" name="id"class="form-control"
       type="hidden" value="<?php if($id) echo $id?>">
<div class="panel panel-default">
    <div class="panel-heading">Adicionar Categoria</div>
    <div class="panel-body">
        <form role="form">
            <div class="row">
                <!-- NAME -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group" id="form-name">
                        <label>Nome *:</label>
                        <input id="name" name="name"class="form-control"
                               placeholder="Nome" value="<?php if($name) echo $name?>">
                    </div>
                </div> <!--col-->
            </div><!--row-->
            <div class="row">
                <!-- CNPJ -->
                <div class="col-lg-12 col-md-12">
                    <div class="form-group" id="form-description">
                        <label>Descrição *:</label>
                        <textarea id="description" name='description' class="form-control" placeholder="Descrição">
                            <?php if($description) echo $description?></textarea>
                    </div>
                </div><!--col-->
            </div>

        </form>
    </div>
</div>
<script src="<?php echo base_url('public/js/pages/product_category/edit.js')?>"></script>
