<!-- <div class="container"> -->
<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Categorias de Produtos</li>
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
                <li> <a href="<?php echo base_url('productCategories/add')?>" class="btn btn-info"> <i class="fa fa-plus">Adicionar</i></a> </li>
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
            <div class="panel-heading">Categorias de Produtos</div>
            <div class="panel-body">
                <?php if($categories):?>
                    <!-- <div class="col-md-12"> -->
                    <div class="table">
                        <table class="table table table-list" id="table-categories">
                            <thead>
                            <th></th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <thead>
                            <tbody>
                            <?php
                            foreach($categories as $category):
                                ?>
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input type="radio" name="categoryId"
                                                   value="<?php echo $category->id?>">
                                        </div>
                                    </td>
                                    <td> <?php echo $category->name;  ?> </td>
                                    <td><?php echo $category->description;  ?> </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                            </tbody>
                        </table>

                    </div>
                <?else: echo "Nenhuma categoria cadastrada!"; endif;?>
                <!-- </div> -->
            </div>
        </div><!-- /.panel-->
    </div>
</div>
<script src="<?php echo base_url('public/js/pages/product_category/product_category.js')?>"></script>

<!-- </div> -->
