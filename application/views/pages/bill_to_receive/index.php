<!-- <div class="container"> -->
<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><em class="fa fa-home"></em>
            </a></li>
        <li class="active">Contas a receber</li>
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
                <li> <a href="<?php echo base_url('billsToReceive/add')?>" class="btn btn-info"> <i class="fa fa-plus">Adicionar</i></a> </li>
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
            <div class="panel-heading">Contas a receber</div>
            <div class="panel-body">
                <?php if($bills):?>
                    <!-- <div class="col-md-12"> -->
                    <div class="table">
                        <table class="table table table-list" id="table-bills">
                            <thead>
                            <th></th>
                            <th>N° Documento</th>
                            <th>Data Emissão</th>
                            <th>Data Vencimento</th>
                            <th>Valor</th>
                            <thead>
                            <tbody>
                            <?php
                            foreach($bills as $bill):
                                ?>
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input type="radio" name="billId"
                                                   value="<?php echo $bill->id?>">
                                        </div>
                                    </td>
                                    <td> <?php echo $bill->document_number;  ?> </td>
                                    <td> <?php echo $bill->issue_date;  ?> </td>
                                    <td> <?php echo $bill->due_date;  ?></td>
                                    <td> <?php echo $bill->amount;  ?></td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                            </tbody>
                        </table>

                    </div>
                <?else: echo "Nenhuma conta cadastrada!"; endif;?>
                <!-- </div> -->
            </div>
        </div><!-- /.panel-->
    </div>
</div>
<script src="<?php echo base_url('public/js/pages/bill_to_receive/bill_to_receive.js')?>"></script>

<!-- </div> -->
