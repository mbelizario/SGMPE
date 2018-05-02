<row>
    <input type="hidden" id="base_url" value="<?php echo base_url()?>">
    <div class="col-lg-4">
        <div class="panel panel-default">
<!--            <div class="panel-heading">
                Total
            </div>-->
            <div class="panel-body"   >
                <div class="form-group" id="form-totalPayable">
                    <label>Total a pagar:</label>
                    <input id="totalPayable" name='totalPayable'
                           class="form-control " placeholder="Total a pagar" disabled value="0">
                </div>
                <div class="form-group" id="form-paidAmount">
                    <label>Valor pago:</label>
                    <input id="paidAmount" name='paidAmount'
                           class="form-control" placeholder="Valor pago" disabled>
                </div>
                <div class="form-group" id="form-excess">
                    <label>Troco:</label>
                    <input id="excess" name='excess'
                           class="form-control" placeholder="Troco" disabled>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                Forma de pagamento
            </div>
            <div class="panel-body"   >
                <div class="pages-toolbar">
                    <ul>

                        <li> <button type="button" id="cashPayment" class="btn btn-success" style="height: 70px; width: 150px"> <i class="fa fa-money"></i><br><span>(F1) Dinheiro</span></button> </li>
                        <li> <button type="button" id="cashPaymentConfirm" class="btn btn-success" style="height: 70px; width: 150px; display: none"> <i class="fa fa-money"></i><br><span>(F1) Confirmar</span></button> </li>
                        <li> <button type="button" id="add-btn" class="btn btn-primary" style="height: 70px; width: 150px"> <i class="fa fa-credit-card-alt "></i><br><span>(F2) Cartão débito</span></button> </li>
                        <li> <button type="button" id="add-btn" class="btn btn-warning" style="height: 70px; width: 150px"> <i class="fa fa-credit-card "></i><br><span> (F4) Cartão Crédito</span></button> </li>
                        <li> <button type="button" id="add-btn" class="btn btn-danger" style="height: 70px; width: 150px"> <i class="fa fa-credit-card-alt "></i><br><span>(F6) Cancelar</span></button> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="panel panel-default" style="">
            <div class="panel-heading">
                Buscar produtos
            </div>
            <div class="panel-body"   >
                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-group" id="form-quantity">
                            <input id="quantity" name='quantity'
                                   class="form-control" placeholder="Quantidade" tabindex="1">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="input-group">
                            <input type="text" id="searchProduct"
                                   class="form-control" placeholder="Digite o código do produto"  tabindex="2" >
                            <span class="input-group-btn" >
                                    <button id="btn-search-product"
                                            class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Itens da venda
            </div>
            <div class="panel-body" style="height: 300px; overflow-y: scroll"  >
                <div class="table-responsive">
                    <table class="table table-hover" id="pdv-table">
                        <thead>
                            <th>Qtde</th>
                            <th>Produto</th>
                            <th>Valor unitário</th>
                            <th>subtotal</th>
                            <th></th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</row>
<script src="<?php echo base_url('public/js/pages/pdv/debitCard.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/pdv/creditCard.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/pdv/cashPayment.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/pdv/search.js')?>"></script>