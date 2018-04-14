<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li><a href="<?php echo base_url('BillsToPay')?>">Contas a receber</a></li>
        <li class="active">Atualizar conta a receber</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="pages-toolbar">
            <ul>
                <li> <a type="button" id="edit-btn" class="btn btn-success"> <i class="fa fa-plus">Atualizar</i></a> </li>
                <!-- <li> <a href="#"  class="btn btn-warning"> <i class="fa fa-pencil-square-o">Editar</i> </a> </li> -->
                <li> <a href="<?php echo base_url('BillsToReceive')?>"
                        class="btn btn-danger"><i class="fa fa-times">Voltar</i></a> </li>
            </ul>
        </div>
    </div>
</div>
<input id="base_url" name="base_url"class="form-control"
       type="hidden" value="<?php echo base_url();?>">
<input id="id" name="id" class="form-control"
       type="hidden" value="<?php if($id) echo $id;?>">
<div class="panel panel-default">
    <div class="panel-heading">Atualizar conta a receber</div>
    <div class="panel-body">
        <form role="form">
            <div class="row">
                <!-- CNPJ -->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-documentNumber">
                        <label>N° Documento *:</label>
                        <input id="documentNumber" name='documentNumber' class="form-control" placeholder="Nº Documento"
                               value="<?php if($document_number) echo $document_number?>">
                    </div>
                </div><!--col-->
                <!-- COMPANYNAME -->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-customer">
                        <label>Cliente *:</label>
                        <select id="customer" name='customer' class="form-control">
                            <option disabled selected>Selecione o cliente</option>
                            <?php foreach ($customers as $c):?>
                                <option <?php if($customer_id == $c->id) echo 'selected'?>
                                    value="<?php echo $c->id?>"> <?php echo $c->person_name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-issueDate">
                        <label>Data de emissão*:</label>
                        <input id="issueDate" name='issueDate'
                               class="form-control datepicker" placeholder="Data de emissão"
                               value="<?php if($issue_date) echo $issue_date?>"
                        >
                    </div>
                </div><!--col-->
            </div><!--row-->



            <div class='row'>
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-dueDate">
                        <label>Data de vencimento *:</label>
                        <input id="dueDate" name='dueDate'
                               class="form-control datepicker" placeholder="Data de vencimento"
                               value="<?php if($due_date) echo $due_date?>"
                        >
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-amount">
                        <label>Valor *:</label>
                        <input id="amount" name='amount'
                               class="form-control moneyValues" placeholder="Valor"
                               value="<?php if($amount) echo $amount?>">
                    </div>
                </div><!--col-->
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-receivedAmount">
                        <label>Valor recebido:</label>
                        <input id="receivedAmount" name='receivedAmount' placeholder="Valor pago"
                               class="form-control moneyValues"
                               value="<?php if($received_amount) echo $received_amount?>">
                    </div>
                </div><!--col-->
            </div> <!--row-->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-receiptDay">
                        <label>Data do recebimento:</label>
                        <input id="receiptDay" name='receiptDay'
                               class="form-control datepicker" placeholder="Data do recebimento"
                               value="<?php if($receipt_day) echo $receipt_day?>">
                    </div>
                </div><!--col-->
<!--                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-type">
                        <label>Tipo da conta *:</label>
                        <select id="type" name='type' class="form-control">
                            <option disabled selected>Selecione o tipo de conta</option>
                            <?php /*foreach ($types as $t):*/?>
                                <option <?php /*if($bill_to_pay_type_id == $t->id) echo 'selected'*/?>
                                    value="<?php /*echo $t->id*/?>"> <?php /*echo $t->name*/?></option>
                            <?php /*endforeach;*/?>
                        </select>
                    </div>
                </div>-->
            </div>
            <div class="row">
                <!-- CNPJ -->
                <div class="col-lg-12 col-md-12">
                    <div class="form-group" id="form-description">
                        <label>Informações complementares:</label>
                        <textarea id="complementaryInformation"
                                  name='complementaryInformation' class="form-control"
                                  placeholder="Informações complementares"><?php
                            if($complementary_information) echo $complementary_information;?></textarea>
                    </div>
                </div><!--col-->
            </div>

        </form>
    </div>
</div>
<script src="<?php echo base_url('public/js/plugins/jquery.maskMoney.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/bill_to_receive/edit.js')?>"></script>

<?php
