<!-- <div class="container"> -->
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <!-- <li class="active">Dashboard</li> -->
    </ol>
</div><!--/.row-->

<div class="row">
    <input id="base_url" type="hidden" value="<?php echo base_url();?>">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Entradas nos últimos 6 meses

                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
            <div class="panel-body">
                <div id="line-chart">

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Entradas x Saídas no mês atual

                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
            <div class="panel-body">
                <div id="bar-chart">

                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Saídas c/ vencimento nos próximos dias
                <ul class="pull-right panel-settings panel-button-tab-right">
                    <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                            <em class="fa fa-cogs"></em>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <ul class="dropdown-settings">
                                    <li><a id="payBill1" >
                                            <em class="fa fa-cog"></em> Dar baixa
                                        </a></li>
<!--                                    <li class="divider"></li>-->

                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
            <div class="panel-body">
                <div class="table">
                    <?php if($billToPayNextSevenDays):?>
                    <table class="table table table-list2" id="">
                        <thead>
                        <th></th>
                            <th>N° Documento</th>
                            <th>Fornecedor</th>
                            <th>Data Vencimento</th>
                            <th>Valor</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($billToPayNextSevenDays as $bill):?>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        <input type="radio" name="billId"
                                               value="<?php echo $bill->id?>">
                                    </ div>
                                    <td> <?php echo $bill->document_number;  ?> </td>
                                    <td> <?php echo $bill->company_name;  ?> </td>
                                    <td> <?php echo $bill->due_date;  ?></td>
                                    <td> <?php echo $bill->amount;  ?></td>
                                </td>
                            </tr>
                            <?php endforeach;
                            else:
                                echo "Não há saídas com vencimento p/ os próximos dias";
                            endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Saídas c/ pagamento já em atraso
                <ul class="pull-right panel-settings panel-button-tab-right">
                    <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                            <em class="fa fa-cogs"></em>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <ul class="dropdown-settings">
                                    <li><a href="#">
                                            <em class="fa fa-cog"></em> Dar baixa
                                        </a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
            <div class="panel-body">
                <div class="table">
                    <?php if($overdueBP):?>
                    <table class="table table table-list2" id="">
                        <thead>
                        <th></th>
                        <th>N° Documento</th>
                        <th>Fornecedor</th>
                        <th>Data Vencimento</th>
                        <th>Valor</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($overdueBP as $bill):?>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        <input type="radio" name="overdueBillId"
                                               value="<?php echo $bill->id?>">
                                    </ div>
                                <td> <?php echo $bill->document_number;  ?> </td>
                                <td> <?php echo $bill->company_name;  ?> </td>
                                <td> <?php echo $bill->due_date;  ?></td>
                                <td> <?php echo $bill->amount;  ?></td>
                                </td>
                            </tr>
                        <?php endforeach;
                        else:
                            echo "Não há saídas em atraso";
                        endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<script src="<?php echo base_url('public/js/plugins/jquery.maskMoney.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/home/manager_home.js')?>"></script>