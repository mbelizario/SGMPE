<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li><a href="<?php echo base_url('BillsToPay')?>">Contas a Pagar</a></li>
        <li class="active">Adicionar conta a pagar</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="pages-toolbar">
            <ul>
                <li> <a type="button" id="add-btn" class="btn btn-success"> <i class="fa fa-plus">Adicionar</i></a> </li>
                <!-- <li> <a href="#"  class="btn btn-warning"> <i class="fa fa-pencil-square-o">Editar</i> </a> </li> -->
                <li> <a href="<?php echo base_url('BillsToPay')?>"
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
    <div class="panel-heading">Adicionar conta a pagar</div>
    <div class="panel-body">
        <form role="form">
            <div class="row">
                <!-- CNPJ -->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-documentNumber">
                        <label>N° Documento *:</label>
                        <input id="documentNumber" name='documentNumber' class="form-control" placeholder="Nº Documento">
                    </div>
                </div><!--col-->
                <!-- COMPANYNAME -->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-supplier">
                        <label>Fornecedor *:</label>
                        <select id="supplier" name='supplier' class="form-control">
                            <option disabled selected>Selecione o fornecedor</option>
                            <?php foreach ($suppliers as $s):?>
                                <option value="<?php echo $s->id?>"> <?php echo $s->company_name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-issueDate">
                        <label>Data de emissão*:</label>
                        <input id="issueDate" name='issueDate'
                               class="form-control datepicker" placeholder="Data de emissão">
                    </div>
                </div><!--col-->
            </div><!--row-->



            <div class='row'>
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-dueDate">
                        <label>Data de vencimento *:</label>
                        <input id="dueDate" name='dueDate'
                               class="form-control datepicker" placeholder="Data de vencimento">
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-amount">
                        <label>Valor *:</label>
                        <input id="amount" name='amount'
                               class="form-control moneyValues" placeholder="Valor">
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-paidAmount">
                        <label>Valor pago:</label>
                        <input id="paidAmount" name='paidAmount' placeholder="Valor pago"
                               class="form-control moneyValues" >
                    </div>
                </div><!--col-->
            </div> <!--row-->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-payDay">
                        <label>Data do pagamento:</label>
                        <input id="payDay" name='payDay'
                               class="form-control datepicker" placeholder="Data do pagamento">
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-type">
                        <label>Tipo da conta *:</label>
                        <select id="type" name='type' class="form-control">
                            <option disabled selected>Selecione o tipo de conta</option>
                            <?php foreach ($types as $t):?>
                                <option value="<?php echo $t->id?>"> <?php echo $t->name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div><!--col-->
            </div>
            <div class="row">
                <!-- CNPJ -->
                <div class="col-lg-12 col-md-12">
                    <div class="form-group" id="form-description">
                        <label>Informações complementares:</label>
                        <textarea id="complementaryInformation"
                                  name='complementaryInformation' class="form-control"
                                  placeholder="Informações complementares">
                        </textarea>
                    </div>
                </div><!--col-->
            </div>

        </form>
    </div>
</div>
<script src="<?php echo base_url('public/js/plugins/jquery.maskMoney.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/bill_to_pay/add.js')?>"></script>

<?php
