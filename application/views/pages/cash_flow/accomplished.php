<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><em class="fa fa-home"></em>
            </a></li>
        <li class="active">Fluxo de caixa realizado</li>
    </ol>
</div><!--/.row-->

<div class="row">
<!--    --><?php //var_dump($cumulativeAvailability['apr'][0]->case)?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <input type="hidden" id='base_url' value="<?php echo base_url();?>">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-8">Fluxo de caixa realizado </div>
                    <div class="col-lg-4">                    <div class="form-group" id="form-type">

                            <select id="semester" name='semester' class="form-control">
<!--                                <option disabled selected>Selecione o semestre</option>-->
                                <option selected value="1">1º Semestre</option>
                                <option value="2">2º Semestre</option>
                            </select>
                        </div></div>
                </div>

            </div>
            <div class="panel-body">

                    <!-- <div class="col-md-12"> -->
<!-----------------------------------------------Tabela 1º semestre---------------------------------------------------->
                    <div class="table table-responsive" id="tab1">
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
                            </tr>
                            </thead>

                            <tbody>
<!-----------------------------------------------Entradas-------------------------------------------------------------->
                                <tr class="success">
                                    <td><b>1- Entradas</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
<!-----------------------------------------------Receitas a vista------------------------------------------------------>
                                <tr class="success">
                                    <td>Receitas de vendas à vista</td>
                                    <td>
                                        <?php echo ($billsToReceive['jan'][0]->sum ?
                                            $billsToReceive['jan'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToReceive['feb'][0]->sum ?
                                            $billsToReceive['feb'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToReceive['mar'][0]->sum ?
                                            $billsToReceive['mar'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToReceive['apr'][0]->sum ?
                                            $billsToReceive['apr'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToReceive['may'][0]->sum ?
                                            $billsToReceive['may'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToReceive['jun'][0]->sum ?
                                            $billsToReceive['jun'][0]->sum : "R$ 0,00")?>
                                    </td>
<!-----------------------------------------------Receitas a prazo------------------------------------------------------>
                                </tr>
                                <tr class="success">
                                    <td>Receitas de vendas a prazo</td>
                                    <td>R$ 0,00</td>
                                    <td>R$ 0,00</td>
                                    <td>R$ 0,00</td>
                                    <td>R$ 0,00</td>
                                    <td>R$ 0,00</td>
                                    <td>R$ 0,00</td>

                                </tr>
<!-----------------------------------------------Total entradas-------------------------------------------------------->
                                <tr class="success">
                                    <td><b>Total de entradas</b></td>
                                    <td>
                                        <b><?php echo ($billsToReceive['jan'][0]->sum ?
                                                $billsToReceive['jan'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToReceive['feb'][0]->sum ?
                                                $billsToReceive['feb'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToReceive['mar'][0]->sum ?
                                                $billsToReceive['mar'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToReceive['apr'][0]->sum ?
                                                $billsToReceive['apr'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToReceive['may'][0]->sum ?
                                                $billsToReceive['may'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToReceive['jun'][0]->sum ?
                                                $billsToReceive['jun'][0]->sum : "R$ 0,00")?></b>
                                    </td>

                                </tr>
<!-----------------------------------------------Saídas---------------------------------------------------------------->
                                <tr class="danger">
                                    <td><b>2- Saídas</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
<!-----------------------------------------------Custos fixos---------------------------------------------------------->
                                <tr class="danger">

                                    <td>Custos fixos</td>
                                    <td>
                                        <?php echo ($billsToPayTypeFix['jan'][0]->sum ?
                                            $billsToPayTypeFix['jan'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToPayTypeFix['feb'][0]->sum ?
                                            $billsToPayTypeFix['feb'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToPayTypeFix['mar'][0]->sum ?
                                            $billsToPayTypeFix['mar'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToPayTypeFix['apr'][0]->sum ?
                                            $billsToPayTypeFix['apr'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToPayTypeFix['may'][0]->sum ?
                                            $billsToPayTypeFix['may'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td>
                                        <?php echo ($billsToPayTypeFix['jun'][0]->sum ?
                                            $billsToPayTypeFix['jun'][0]->sum : "R$ 0,00")?>
                                    </td>

                                </tr>
<!-----------------------------------------------Custos variaveis------------------------------------------------------>
                                <tr class="danger">
                                    <td>Custos variáveis</td>
                                    <td>
                                        <?php echo ($billsToPayTypeVar['jan'][0]->sum ?
                                            $billsToPayTypeVar['jan'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td><?php echo ($billsToPayTypeVar['feb'][0]->sum ?
                                            $billsToPayTypeVar['feb'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td><?php echo ($billsToPayTypeVar['mar'][0]->sum ?
                                            $billsToPayTypeVar['mar'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td><?php echo ($billsToPayTypeVar['apr'][0]->sum ?
                                            $billsToPayTypeVar['apr'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td><?php echo ($billsToPayTypeVar['may'][0]->sum ?
                                            $billsToPayTypeVar['may'][0]->sum : "R$ 0,00")?>
                                    </td>
                                    <td><?php echo ($billsToPayTypeVar['jun'][0]->sum ?
                                            $billsToPayTypeVar['jun'][0]->sum : "R$ 0,00")?>
                                    </td>
                                </tr>
<!-----------------------------------------------Total saidas---------------------------------------------------------->
                                <tr class="danger">
                                    <td><b>Total de Saídas</b></td>
                                    <td>
                                        <b><?php echo ($billsToPay['jan'][0]->sum ?
                                                $billsToPay['jan'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToPay['feb'][0]->sum ?
                                                $billsToPay['feb'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToPay['mar'][0]->sum ?
                                                $billsToPay['mar'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToPay['apr'][0]->sum ?
                                                $billsToPay['apr'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToPay['may'][0]->sum ?
                                                $billsToPay['may'][0]->sum : "R$ 0,00")?></b>
                                    </td>
                                    <td>
                                        <b><?php echo ($billsToPay['jun'][0]->sum ?
                                                $billsToPay['jun'][0]->sum : "R$ 0,00")?></b>
                                    </td>

                                </tr>
<!----------------------------------Disponibilidade acumulada---------------------------------------------------------->
                                <tr class="info">
                                    <td>Disponibilidade acumulada</td>
                                    <td
                                        <?php echo ($cumulativeAvailability['jan'][0]->case == 't'?
                                            false : "style='color: red' ") ;?>>
                                        <?php echo$cumulativeAvailability['jan'][0]->result?>
                                    </td>

                                    <td
                                        <?php echo ($cumulativeAvailability['feb'][0]->case == 't'?
                                        false : "style='color: red' ") ;?>>
                                        <?php echo $cumulativeAvailability['feb'][0]->result?>
                                    </td>

                                    <td
                                        <?php echo ($cumulativeAvailability['mar'][0]->case == 't'?
                                            false : "style='color: red' ") ;?>>
                                        <?php echo$cumulativeAvailability['mar'][0]->result?>
                                    </td>

                                    <td
                                        <?php echo ($cumulativeAvailability['apr'][0]->case == 't' ?
                                            false : "style='color: red' " ) ;?>>
                                        <?php echo$cumulativeAvailability['apr'][0]->result?>
                                    </td>

                                    <td
                                        <?php echo ($cumulativeAvailability['may'][0]->case == 't'?
                                        false : "style='color: red' ") ;?>>
                                        <?php echo$cumulativeAvailability['may'][0]->result?>
                                    </td>

                                    <td
                                        <?php echo ($cumulativeAvailability['jun'][0]->case == 't'?
                                        false : "style='color: red' ") ;?>>
                                        <?php echo$cumulativeAvailability['jun'][0]->result?>
                                    </td>
                                </tr>
<!-----------------------------------------------Nível desejado-------------------------------------------------------->
                                <tr class="info">
                                    <td>Nível desejado</td>
                                    <td><?php echo (isset($desiredValues['jan'][0]->value)? "<a id='jan' href='#'>"
                                            .$desiredValues['jan'][0]->value."</a>" : "<a id='jan'>Clique aqui</a>") ;?>
                                    </td>
                                    <td><?php echo (isset($desiredValues['feb'][0]->value)? "<a id='feb' href='#'>"
                                            .$desiredValues['feb'][0]->value."</a>" : "<a id='feb'>Clique aqui</a>") ;?>
                                    </td>
                                    <td><?php echo (isset($desiredValues['mar'][0]->value)? "<a id='mar' href='#'>"
                                            .$desiredValues['mar'][0]->value."</a>" : "<a id='mar'>Clique aqui</a>") ;?>
                                    </td>
                                    <td><?php echo (isset($desiredValues['apr'][0]->value)? "<a id='apr' href='#'>"
                                            .$desiredValues['apr'][0]->value."</a>" : "<a id='apr'>Clique aqui</a>") ;?>
                                    </td>
                                    <td><?php echo (isset($desiredValues['may'][0]->value)? "<a id='may' href='#'>"
                                            .$desiredValues['may'][0]->value."</a>" : "<a id='may'>Clique aqui</a>") ;?>
                                    </td>
                                    <td><?php echo (isset($desiredValues['jun'][0]->value)? "<a id='jun' href='#'>"
                                            .$desiredValues['jun'][0]->value."</a>" : "<a id='jun'>Clique aqui</a>") ;?>
                                    </td>
                                </tr>
<!----------------------------------Resultado final-------------------------------------------------------------------->
                                <tr class="info" style="font-weight: bold">
                                    <td>Resultado Final</td>
                                    <td>
                                        <?php 
                                        if(isset($finalResult['jan'][0]->final_result )):
                                            echo ($finalResult['jan'][0]->case == 't'?
                                            "Aplicar ". $finalResult['jan'][0]->final_result :
                                            "<span style='color: red'>Resgatar</span> ".
                                            $finalResult['jan'][0]->final_result);
                                        else:
                                            echo "Sem resultado"; 
                                        endif;?>
                                    </td>

                                    <td>
                                        <?php
                                        if(isset($finalResult['feb'][0]->final_result )):
                                            echo ($finalResult['feb'][0]->case == 't'?
                                                "Aplicar ". $finalResult['feb'][0]->final_result :
                                                "<span style='color: red'>Resgatar</span> ".
                                                $finalResult['feb'][0]->final_result);
                                        else:
                                            echo "Sem resultado";
                                        endif;?>
                                    </td>

                                    <td>
                                        <?php
                                        if(isset($finalResult['mar'][0]->final_result )):
                                            echo ($finalResult['mar'][0]->case == 't'?
                                                "Aplicar ". $finalResult['mar'][0]->final_result :
                                                "<span style='color: red'>Resgatar</span> ".
                                                $finalResult['mar'][0]->final_result);
                                        else:
                                            echo "Sem resultado";
                                        endif;?>
                                    </td>

                                    <td>
                                        <?php
                                        if(isset($finalResult['apr'][0]->final_result )):
                                            echo ($finalResult['apr'][0]->case == 't'?
                                                "Aplicar ". $finalResult['apr'][0]->final_result :
                                                "<span style='color: red'>Resgatar</span> ".
                                                $finalResult['apr'][0]->final_result);
                                        else:
                                            echo "Sem resultado";
                                        endif;?>
                                    </td>

                                    <td>
                                        <?php
                                        if(isset($finalResult['may'][0]->final_result )):
                                            echo ($finalResult['may'][0]->case == 't'?
                                                "Aplicar ". $finalResult['may'][0]->final_result :
                                                "<span style='color: red'>Resgatar</span> ".
                                                $finalResult['may'][0]->final_result);
                                        else:
                                            echo "Sem resultado";
                                        endif;?>
                                    </td>

                                    <td>
                                        <?php
                                        if(isset($finalResult['jun'][0]->final_result )):
                                            echo ($finalResult['jun'][0]->case == 't'?
                                                "Aplicar ". $finalResult['jun'][0]->final_result :
                                                "<span style='color: red'>Resgatar</span> ".
                                                $finalResult['jun'][0]->final_result);
                                        else:
                                            echo "Sem resultado";
                                        endif;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
<!-----------------------------------------------Tabela 2º semestre---------------------------------------------------->
                    <div class="table table-responsive" style="display: none" id="tab2">
                    <table class="table table-bordered table-hover" >
                        <thead>
                        <tr class="active">
                            <th style="width: 2%;"></th>
                            <th>Julho</th>
                            <th>Agosto</th>
                            <th>Setembro</th>
                            <th>Outubro</th>
                            <th>Novembro</th>
                            <th>Dezembro</th>
                        </tr>
                        </thead>

                        <tbody>
<!-----------------------------------------------Entradas-------------------------------------------------------------->
                        <tr class="success">
                            <td><b>1- Entradas</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
<!-----------------------------------------------Receitas a vista------------------------------------------------------>
                        <tr class="success">
                            <td>Receitas de vendas à vista</td>
                            <td>
                                <?php echo ($billsToReceive['jul'][0]->sum ?
                                    $billsToReceive['jul'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToReceive['aug'][0]->sum ?
                                    $billsToReceive['aug'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToReceive['sep'][0]->sum ?
                                    $billsToReceive['sep'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToReceive['oct'][0]->sum ?
                                    $billsToReceive['oct'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToReceive['nov'][0]->sum ?
                                    $billsToReceive['nov'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToReceive['dec'][0]->sum ?
                                    $billsToReceive['dec'][0]->sum : "R$ 0,00")?>
                            </td>

                        </tr>
<!-----------------------------------------------Receitas a prazo------------------------------------------------------>
                        <tr class="success">
                            <td>Receitas de vendas a prazo</td>
                            <td>R$ 0,00</td>
                            <td>R$ 0,00</td>
                            <td>R$ 0,00</td>
                            <td>R$ 0,00</td>
                            <td>R$ 0,00</td>
                            <td>R$ 0,00</td>

                        </tr>
<!-----------------------------------------------Total entradas-------------------------------------------------------->
                        <tr class="success">
                            <td><b>Total de entradas</b></td>
                            <td>
                                <b><?php echo ($billsToReceive['jul'][0]->sum ?
                                        $billsToReceive['jul'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToReceive['aug'][0]->sum ?
                                        $billsToReceive['aug'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToReceive['sep'][0]->sum ?
                                        $billsToReceive['sep'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToReceive['oct'][0]->sum ?
                                        $billsToReceive['oct'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToReceive['nov'][0]->sum ?
                                        $billsToReceive['nov'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToReceive['dec'][0]->sum ?
                                        $billsToReceive['dec'][0]->sum : "R$ 0,00")?></b>
                            </td>

                        </tr>
<!-----------------------------------------------Saídas---------------------------------------------------------------->
                        <tr class="danger">
                            <td><b>2- Saídas</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
<!-----------------------------------------------Custos fixos---------------------------------------------------------->
                        <tr class="danger">
                            <td>Custos fixos</td>
                            <td>
                                <?php echo ($billsToPayTypeFix['jul'][0]->sum ?
                                    $billsToPayTypeFix['jul'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeFix['aug'][0]->sum ?
                                    $billsToPayTypeFix['aug'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeFix['sep'][0]->sum ?
                                    $billsToPayTypeFix['sep'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeFix['oct'][0]->sum ?
                                    $billsToPayTypeFix['oct'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeFix['nov'][0]->sum ?
                                    $billsToPayTypeFix['nov'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeFix['dec'][0]->sum ?
                                    $billsToPayTypeFix['dec'][0]->sum : "R$ 0,00")?>
                            </td>

                        </tr>
<!-----------------------------------------------Custos variáveis------------------------------------------------------>
                        <tr class="danger">
                            <td>Custos variáveis</td>
                            <td>
                                <?php echo ($billsToPayTypeVar['jul'][0]->sum ?
                                    $billsToPayTypeVar['jul'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeVar['aug'][0]->sum ?
                                    $billsToPayTypeVar['aug'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeVar['sep'][0]->sum ?
                                    $billsToPayTypeVar['sep'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeVar['oct'][0]->sum ?
                                    $billsToPayTypeVar['oct'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeVar['dec'][0]->sum ?
                                    $billsToPayTypeVar['dec'][0]->sum : "R$ 0,00")?>
                            </td>
                            <td>
                                <?php echo ($billsToPayTypeVar['nov'][0]->sum ?
                                    $billsToPayTypeVar['nov'][0]->sum : "R$ 0,00")?>
                            </td>

                        </tr>
<!-----------------------------------------------Total saídas---------------------------------------------------------->
                        <tr class="danger">
                            <td><b>Total de Saídas</b></td>
                            <td>
                                <b><?php echo ($billsToPay['jul'][0]->sum ?
                                        $billsToPay['jul'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToPay['aug'][0]->sum ?
                                        $billsToPay['aug'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToPay['sep'][0]->sum ?
                                        $billsToPay['sep'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToPay['oct'][0]->sum ?
                                        $billsToPay['oct'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToPay['nov'][0]->sum ?
                                        $billsToPay['nov'][0]->sum : "R$ 0,00")?></b>
                            </td>
                            <td>
                                <b><?php echo ($billsToPay['dec'][0]->sum ?
                                        $billsToPay['dec'][0]->sum : "R$ 0,00")?></b>
                            </td>

                        </tr>
<!-----------------------------------------------Disponibilidade acumulada--------------------------------------------->
                        <tr class="info">
                            <td>Disponibilidade acumulada</td>
                            <td
                                <?php echo ($cumulativeAvailability['jul'][0]->case == 't'?
                                    false : "style='color: red' ") ;?>>
                                <?php echo$cumulativeAvailability['jul'][0]->result?>
                            </td>

                            <td
                                <?php echo ($cumulativeAvailability['aug'][0]->case == 't'?
                                    false : "style='color: red' ") ;?>>
                                <?php echo$cumulativeAvailability['aug'][0]->result?>
                            </td>

                            <td
                                <?php echo ($cumulativeAvailability['sep'][0]->case == 't'?
                                    false : "style='color: red' ") ;?>>
                                <?php echo$cumulativeAvailability['sep'][0]->result?>
                            </td>

                            <td
                                <?php echo ($cumulativeAvailability['oct'][0]->case == 't'?
                                    false : "style='color: red' ") ;?>>
                                <?php echo$cumulativeAvailability['oct'][0]->result?>
                            </td>

                            <td
                                <?php echo ($cumulativeAvailability['nov'][0]->case == 't'?
                                    false : "style='color: red' ") ;?>>
                                <?php echo$cumulativeAvailability['nov'][0]->result?>
                            </td>

                            <td
                                <?php echo ($cumulativeAvailability['dec'][0]->case == 't'?
                                    false : "style='color: red' ") ;?>>
                                <?php echo$cumulativeAvailability['dec'][0]->result?>
                            </td>
                        </tr>
<!-----------------------------------------------Nível desejado-------------------------------------------------------->
                        <tr class="info">
                            <td>Nível desejado</td>
                            <td><?php echo (isset($desiredValues['jul'][0]->value)? "<a id='jul' href='#'>"
                                    .$desiredValues['jul'][0]->value."</a>" : "<a id='jul'>Clique aqui</a>") ;?>
                            </td>
                            <td><?php echo (isset($desiredValues['aug'][0]->value)? "<a id='aug' href='#'>"
                                    .$desiredValues['aug'][0]->value."</a>" : "<a id='aug'>Clique aqui</a>") ;?>
                            </td>
                            <td><?php echo (isset($desiredValues['sep'][0]->value)? "<a id='sep' href='#'>"
                                    .$desiredValues['sep'][0]->value."</a>" : "<a id='sep'>Clique aqui</a>") ;?>
                            </td>
                            <td><?php echo (isset($desiredValues['oct'][0]->value)? "<a id='oct' href='#'>"
                                    .$desiredValues['oct'][0]->value."</a>" : "<a id='oct'>Clique aqui</a>") ;?>
                            </td>
                            <td><?php echo (isset($desiredValues['nov'][0]->value)? "<a id='nov' href='#'>"
                                    .$desiredValues['nov'][0]->value."</a>" : "<a id='nov'>Clique aqui</a>") ;?>
                            </td>
                            <td><?php echo (isset($desiredValues['dec'][0]->value)? "<a id='dec' href='#'>"
                                    .$desiredValues['dec'][0]->value."</a>" : "<a id='dec'>Clique aqui</a>") ;?>
                            </td>

                        </tr>

                        </tbody>
                    </table>

                </div>
                <!-- </div> -->
            </div>
        </div><!-- /.panel-->
    </div>
</div>
<!-----------------------------------------------jan-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="jan-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Janeiro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group" id="form-janDV">
                        <label>Nível desejado:</label>
                        <input id="janDV" name='janDV' placeholder="Nível Desejado"
                               class="form-control moneyValues"
                               value="<?php echo (isset($desiredValues['jan'][0]->value)?
                                   $desiredValues['jan'][0]->value : false) ;?>" >
                    </div>
                </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-jan">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------feb-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="feb-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Fevereiro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-febDV">
                            <label>Nível desejado:</label>
                            <input id="febDV" name='febDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['feb'][0]->value)?
                                       $desiredValues['feb'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-feb">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------mar-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="mar-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Março</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-marcDV">
                            <label>Nível desejado:</label>
                            <input id="marDV" name='marcDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['mar'][0]->value)?
                                       $desiredValues['mar'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-mar">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------apr-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="apr-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Abril</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-aprDV">
                            <label>Nível desejado:</label>
                            <input id="aprDV" name='aprDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['apr'][0]->value)?
                                       $desiredValues['apr'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-apr">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------may-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="may-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Maio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-mayDV">
                            <label>Nível desejado:</label>
                            <input id="mayDV" name='mayDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['may'][0]->value)?
                                       $desiredValues['may'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-may">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------jun-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="jun-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Junho</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-junDV">
                            <label>Nível desejado:</label>
                            <input id="junDV" name='junDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['jun'][0]->value)?
                                       $desiredValues['jun'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-jun">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------jul-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="jul-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Julho</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-julDV">
                            <label>Nível desejado:</label>
                            <input id="julDV" name='julDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['jul'][0]->value)?
                                       $desiredValues['jul'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-jul">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------aug-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="aug-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Agosto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-augDV">
                            <label>Nível desejado:</label>
                            <input id="augDV" name='augDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['aug'][0]->value)?
                                       $desiredValues['aug'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-aug">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------sep-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="sep-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Setembro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-sepDV">
                            <label>Nível desejado:</label>
                            <input id="sepDV" name='sepDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['sep'][0]->value)?
                                       $desiredValues['sep'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-sep">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------oct-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="oct-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Outubro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-octDV">
                            <label>Nível desejado:</label>
                            <input id="octDV" name='octDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['oct'][0]->value)?
                                       $desiredValues['oct'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-oct">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------nov-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="nov-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Novembro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-novDV">
                            <label>Nível desejado:</label>
                            <input id="novDV" name='novDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['nov'][0]->value)?
                                       $desiredValues['nov'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-nov">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------------dec-modal------------------------------------------------------------->
<div class="modal" tabindex="-1" role="dialog" id="dec-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nível Desejado para Dezembro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group" id="form-decDV">
                            <label>Nível desejado:</label>
                            <input id="decDV" name='decDV' placeholder="Nível Desejado"
                                   class="form-control moneyValues"
                                   value="<?php echo (isset($desiredValues['dec'][0]->value)?
                                       $desiredValues['dec'][0]->value : false) ;?>" >
                        </div>
                    </div><!--col-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-dec">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('public/js/plugins/jquery.maskMoney.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/cash_flow/cash_flow.js')?>"></script>