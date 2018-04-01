<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li><a href="<?php echo base_url('products')?>">Produtos</a></li>
        <li class="active">Adicionar Produto</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="pages-toolbar">
            <ul>
                <li> <a type="button" id="add-btn" class="btn btn-success"> <i class="fa fa-plus">Adicionar</i></a> </li>
                <!-- <li> <a href="#"  class="btn btn-warning"> <i class="fa fa-pencil-square-o">Editar</i> </a> </li> -->
                <li> <a href="<?php echo base_url('products')?>"
                        class="btn btn-danger"><i class="fa fa-times">Voltar</i></a> </li>
            </ul>
        </div>
    </div>
</div>
<input id="base_url" name="base_url"class="form-control"
       type="hidden" value="<?php echo base_url();?>">
<input id="id" name="id"class="form-control"
       type="hidden" value="">
<div class="panel panel-default">
    <div class="panel-heading">Adicionar Produto</div>
    <div class="panel-body">
        <form role="form">
            <div class="row">
                <!-- COMPANYNAME -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group" id="form-internalCode">
                        <label>Código interno *:</label>
                        <input id="internalCode" name="internalCode"class="form-control"
                               placeholder="Código interno">
                    </div>
                </div> <!--col-->
                <!-- CNPJ -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group" id="form-name">
                        <label>Nome *:</label>
                        <input id="name" name='name' class="form-control" placeholder="Nome">
                    </div>
                </div><!--col-->
        </div><!--row-->
            <div class='row'>
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-cost">
                        <label>Custo *:</label>
                        <input id="cost" name='cost'
                               class="form-control moneyValues" placeholder="Custo">
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-price">
                        <label>Preço *:</label>
                        <input id="price" name='price'
                               class="form-control moneyValues" placeholder="Preço">
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-profit">
                        <label>Lucro:</label>
                        <input id="profit" name='profit' disabled
                               class="form-control moneyValues" >
                    </div>
                </div><!--col-->
            </div> <!--row-->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-quantity">
                        <label>Quantidade *:</label>
                        <input id="quantity" name='quantity'
                               class="form-control" placeholder="Quantidade">
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-category">
                        <label>Categoria *:</label>
                        <select id="category" name='category' class="form-control">
                            <option disabled selected>Selecione a categoria</option>
                            <?php foreach ($categories as $c):?>
                                <option value="<?php echo $c->id?>"> <?php echo $c->name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div><!--col-->
            </div>

        </form>
    </div>
</div>
<script src="<?php echo base_url('public/js/plugins/jquery.maskMoney.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/product/add.js')?>"></script>

<?php
