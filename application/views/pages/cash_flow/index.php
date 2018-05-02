<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><em class="fa fa-home"></em>
            </a></li>
        <li class="active">Fluxo de caixa</li>
    </ol>
</div><!--/.row-->

<div class="row">
<!--    --><?php //var_dump($billsToPay['jan'][0]->sum)?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <input type="hidden" id='base_url' value="<?php echo base_url();?>">
            <div class="panel-heading">Fluxo de caixa</div>
            <div class="panel-body">

                    <!-- <div class="col-md-12"> -->
                    <div class="table table-responsive" >
                        <table class="table table-bordered table-hover" >
                            <thead>
                            <tr class="active">
                                <th style="width: 2%;"></th>
                                <th>Janeiro</th>
                                <th>Fevereiro</th>
                                <th>Março</th>
                                <th>Abril</th>
                                <th>Maio</th>
                                <th>Junho</th>
                                <th>Julho</th>
                                <th>Agosto</th>
                                <th>Setembro</th>
                                <th>Outubro</th>
                                <th>Novembro</th>
                                <th>Dezembro</th>
                            </tr>
                            </thead>

                            <tbody>

                                <tr class="success">
                                    <td>1- Entradas</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                <tr class="success">
                                    <td>Receitas de vendas à vista</td>
                                    <td><?php echo ($billsToReceive['jan'][0]->sum ? $billsToReceive['jan'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['feb'][0]->sum ? $billsToReceive['feb'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['mar'][0]->sum ? $billsToReceive['mar'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['apr'][0]->sum ? $billsToReceive['apr'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['may'][0]->sum ? $billsToReceive['may'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['jun'][0]->sum ? $billsToReceive['jun'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['jul'][0]->sum ? $billsToReceive['jul'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['aug'][0]->sum ? $billsToReceive['aug'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['sep'][0]->sum ? $billsToReceive['sep'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['oct'][0]->sum ? $billsToReceive['oct'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['nov'][0]->sum ? $billsToReceive['nov'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['dec'][0]->sum ? $billsToReceive['dec'][0]->sum : 0)?></td>

                                </tr>
                                <tr class="success">
                                    <td>Receitas de vendas a prazo</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>

                                </tr>
                                <tr class="success">
                                    <td>Total de entradas</td>
                                    <td><?php echo ($billsToReceive['jan'][0]->sum ? $billsToReceive['jan'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['feb'][0]->sum ? $billsToReceive['feb'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['mar'][0]->sum ? $billsToReceive['mar'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['apr'][0]->sum ? $billsToReceive['apr'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['may'][0]->sum ? $billsToReceive['may'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['jun'][0]->sum ? $billsToReceive['jun'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['jul'][0]->sum ? $billsToReceive['jul'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['aug'][0]->sum ? $billsToReceive['aug'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['sep'][0]->sum ? $billsToReceive['sep'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['oct'][0]->sum ? $billsToReceive['oct'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['nov'][0]->sum ? $billsToReceive['nov'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToReceive['dec'][0]->sum ? $billsToReceive['dec'][0]->sum : 0)?></td>

                                </tr>
                                <tr class="danger">
                                    <td>2- Saídas</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                <tr class="danger">

                                    <td>Custos fixos</td>
                                    <td><?php echo ($billsToPayTypeFix['jan'][0]->sum ? $billsToPayTypeFix['jan'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['feb'][0]->sum ? $billsToPayTypeFix['feb'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['mar'][0]->sum ? $billsToPayTypeFix['mar'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['apr'][0]->sum ? $billsToPayTypeFix['apr'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['may'][0]->sum ? $billsToPayTypeFix['may'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['jun'][0]->sum ? $billsToPayTypeFix['jun'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['jul'][0]->sum ? $billsToPayTypeFix['jul'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['aug'][0]->sum ? $billsToPayTypeFix['aug'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['sep'][0]->sum ? $billsToPayTypeFix['sep'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['oct'][0]->sum ? $billsToPayTypeFix['oct'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['nov'][0]->sum ? $billsToPayTypeFix['nov'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeFix['dec'][0]->sum ? $billsToPayTypeFix['dec'][0]->sum : 0)?></td>

                                </tr>
                                <tr class="danger">
                                    <td>Custos variáveis</td>
                                    <td><?php echo ($billsToPayTypeVar['jan'][0]->sum ? $billsToPayTypeVar['jan'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['feb'][0]->sum ? $billsToPayTypeVar['feb'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['mar'][0]->sum ? $billsToPayTypeVar['mar'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['apr'][0]->sum ? $billsToPayTypeVar['apr'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['may'][0]->sum ? $billsToPayTypeVar['may'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['jun'][0]->sum ? $billsToPayTypeVar['jun'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['jul'][0]->sum ? $billsToPayTypeVar['jul'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['aug'][0]->sum ? $billsToPayTypeVar['aug'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['sep'][0]->sum ? $billsToPayTypeVar['sep'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['oct'][0]->sum ? $billsToPayTypeVar['oct'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['nov'][0]->sum ? $billsToPayTypeVar['nov'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPayTypeVar['dec'][0]->sum ? $billsToPayTypeVar['dec'][0]->sum : 0)?></td>

                                </tr>
                                <tr class="danger">
                                    <td>Total de Saídas</td>
                                    <td><?php echo ($billsToPay['jan'][0]->sum ? $billsToPay['jan'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['feb'][0]->sum ? $billsToPay['feb'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['mar'][0]->sum ? $billsToPay['mar'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['apr'][0]->sum ? $billsToPay['apr'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['may'][0]->sum ? $billsToPay['may'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['jun'][0]->sum ? $billsToPay['jun'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['jul'][0]->sum ? $billsToPay['jul'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['aug'][0]->sum ? $billsToPay['aug'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['sep'][0]->sum ? $billsToPay['sep'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['oct'][0]->sum ? $billsToPay['oct'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['nov'][0]->sum ? $billsToPay['nov'][0]->sum : 0)?></td>
                                    <td><?php echo ($billsToPay['dec'][0]->sum ? $billsToPay['dec'][0]->sum : 0)?></td>

                                </tr>
                                <tr class="info">
                                    <td>Diferença no período (1 - 2)</td>
                                    <td>a</td>
                                    <td>b</td>
                                    <td>c</td>
                                    <td>d</td>
                                    <td>e</td>
                                    <td>f</td>
                                    <td>g</td>
                                    <td>h</td>
                                    <td>i</td>
                                    <td>j</td>
                                    <td>k</td>
                                    <td>l</td>

                                </tr>
                                <tr class="info">
                                    <td>Saldo inicial de caixa</td>
                                    <td>a</td>
                                    <td>b</td>
                                    <td>c</td>
                                    <td>d</td>
                                    <td>e</td>
                                    <td>f</td>
                                    <td>g</td>
                                    <td>h</td>
                                    <td>i</td>
                                    <td>j</td>
                                    <td>k</td>
                                    <td>l</td>
                                </tr>
                                <tr class="info">
                                    <td>Disponibilidade acumulada</td>
                                    <td>a</td>
                                    <td>b</td>
                                    <td>c</td>
                                    <td>d</td>
                                    <td>e</td>
                                    <td>f</td>
                                    <td>g</td>
                                    <td>h</td>
                                    <td>i</td>
                                    <td>j</td>
                                    <td>k</td>
                                    <td>l</td>

                                </tr>
                                <tr class="info">
                                    <td>Nível desejado</td>
                                    <td>a</td>
                                    <td>b</td>
                                    <td>c</td>
                                    <td>d</td>
                                    <td>e</td>
                                    <td>f</td>
                                    <td>g</td>
                                    <td>h</td>
                                    <td>i</td>
                                    <td>j</td>
                                    <td>k</td>
                                    <td>l</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                <!-- </div> -->
            </div>
        </div><!-- /.panel-->
    </div>
</div>