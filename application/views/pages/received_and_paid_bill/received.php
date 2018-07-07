<!-- <div class="container"> -->
<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Contas recebidas</li>
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
        <div class="panel panel-default">
            <input type="hidden" id='base_url' value="<?php echo base_url();?>">
            <div class="panel-heading"> <form class="form-inline" >
                    <div class="form-group">
                        <label for="beginDate">De:</label>
                        <input class="form-control datepicker" id="beginDate">
                    </div>
                    <div class="form-group">
                        <label for="endDate">Até:</label>
                        <input  class="form-control datepicker" id="endDate">
                    </div>
                    <button type="button" id="search" class="btn btn-default">Pesquisar</button>
                </form> </div>
            <div class="panel-body">

                    <!-- <div class="col-md-12"> -->
                    <div class="table">
                        <table class="table table " id="table-bills">
                            <thead>
                            <th>N° Documento</th>
                            <th>Data Vencimento</th>
                            <th>Data do recebimento</th>
                            <th>Valor</th>
                            <thead>
                            <tbody id="result1">

                            </tbody>
                        </table>

                    </div>

                <!-- </div> -->
            </div>
        </div><!-- /.panel-->
    </div>
</div>
<script src="<?php echo base_url('public/js/pages/received_and_paid_bill/received.js')?>"></script>

<!-- </div> -->
