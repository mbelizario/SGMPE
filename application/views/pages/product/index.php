<!-- <div class="container"> -->
<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Produtos</li>
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
                <li> <a href="<?php echo base_url('products/add')?>" class="btn btn-info"> <i class="fa fa-plus">Adicionar</i></a> </li>
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
            <div class="panel-heading">Produtos</div>
            <div class="panel-body">
                <?php if($products):?>
                    <!-- <div class="col-md-12"> -->
                    <div class="table">
                        <table class="table table table-list" id="table-categories">
                            <thead>
                            <th></th>
                            <th>Código interno</th>
                            <th>Nome</th>
                            <th>Quantidade</th>
                            <thead>
                            <tbody>
                            <?php
                            foreach($products as $product):
                                ?>
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input type="radio" name="prouductId"
                                                   value="<?php echo $product->id?>">
                                        </div>
                                    </td>
                                    <td> <?php echo $product->internal_code;  ?> </td>
                                    <td><?php echo $product->name;  ?> </td>
                                    <td><?php echo $product->quantity;  ?> </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                            </tbody>
                        </table>

                    </div>
                <?else: echo "Nenhum produto cadastrado!"; endif;?>
                <!-- </div> -->
            </div>
        </div><!-- /.panel-->
    </div>
</div>
<script src="<?php echo base_url('public/js/pages/product/product.js')?>"></script>

<!-- </div> -->
