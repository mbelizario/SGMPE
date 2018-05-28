<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><em class="fa fa-home"></em>
            </a></li>
        <li class="active">Ponto de equílibrio</li>
    </ol>
</div><!--/.row-->

<input id="base_url" name="base_url"class="form-control"
       type="hidden" value="<?php echo base_url();?>">
<input id="id" name="id"class="form-control"
       type="hidden" value="">
<div class="panel panel-default">
    <div class="panel-heading">Ponto de equilíbrio </div>
    <div class="panel-body">
        <form role="form">
            <div class='row'>
                <div class="col-lg-4 col-md-12">
                    <div class="form-group" id="form-productSelect">
                        <label>Selecione o produto:</label>
                        <select id="productSelect" name='productSelect' class="form-control">
                            <option disabled selected>Selecione o produto</option>
                            <?php
                            if($products):
                                foreach ($products as $p):?>
                                    <option value="<?php echo $p->id?>"> <?php echo $p->name?></option>
                            <?php
                                endforeach;
                            endif;?>
                        </select>
                    </div>
                </div><!--col-->
                <div class="col-lg-8 col-md-12">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputName2">De</label>
                            <input  class="form-control datepicker" id="beginDate" placeholder="01/01/2018">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                                <label for="exampleInputName2">De</label>
                                <input  class="form-control datepicker" id="endDate" placeholder="01/01/2018">
                            </div>
                    </div>
                    <div class="col-lg-2" style="margin-top: 4%; margin-left: -15px">

                        <button type="button" id="search" class="btn btn-default" style="padding: 10px">Buscar</button>
                    </div>
                </div>
            </div><!--row-->
        </form>
        <div>
            <div id="result1" class="col-lg-6"></div>
            <div id="graph1" class="col-lg-6"></div>
        </div>


    </div>
</div>
<script src="<?php echo base_url('public/js/pages/breakeven/breakeven.js')?>"></script>