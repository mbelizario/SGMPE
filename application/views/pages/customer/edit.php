<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li><a href="<?php echo base_url('customers')?>">Clientes</a></li>
        <li class="active">Editar Cliente</li>
    </ol>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="pages-toolbar">
            <ul>
                <li> <a type="button" id="edit-btn" class="btn btn-success"> <i class="fa fa-plus">Atualizar</i></a> </li>
                <!-- <li> <a href="#"  class="btn btn-warning"> <i class="fa fa-pencil-square-o">Editar</i> </a> </li> -->
                <li> <a href="<?php echo base_url('customers')?>"
                        class="btn btn-danger"><i class="fa fa-times">Voltar</i></a> </li>
            </ul>
        </div>
    </div>
</div>
<input id="base_url" name="base_url"class="form-control"
       type="hidden" value="<?php echo base_url();?>">
<input id="id" name="id"class="form-control"
       type="hidden" value="<?php if($id) echo $id?>">
<div class="panel panel-default">
    <div class="panel-heading">Atualizar Cliente</div>
    <div class="panel-body">
        <form role="form">
            <div class="row">
                <!-- COMPANYNAME -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group" id="form-personName">
                        <label>Nome completo:</label>
                        <input id="personName" name="personName"class="form-control"
                               placeholder="Nome completo" value="<?php if($person_name) echo $person_name;?>">
                    </div>
                </div> <!--col-->
                <!-- CNPJ -->
                <div class="col-lg-6 col-md-12">
                    <div class="form-group" id="form-cpf">
                        <label>CPF:</label>
                        <input id="cpf" name='cpf' class="form-control" placeholder="CPF"
                               value="<?php if($cpf) echo $cpf;?>">
                    </div>
                </div><!--col-->
            </div><!--row-->
            <fieldset>
                <legend>Endereço</legend>
                <div class='row'>
                    <div class="col-lg-6 col-md-12">
                        <!-- ZIPCODE -->
                        <div class="form-group" id="form-addressZipCode">
                            <label>CEP:</label>
                            <div class="input-group">
                                <input type="text" id="addressZipCode"  name="addressZipCode"
                                       class="form-control" placeholder="CEP"
                                value="<?php if($address_zip_code) echo $address_zip_code;?>">
                                <span class="input-group-btn">
                        <button class="btn btn-default" id="search_zip_code"
                                type="button">Pesquisar</button>
                      </span>
                            </div><!-- /input-group -->
                        </div>
                    </div><!--col-->
                </div> <!--row-->
                <div class='row'>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-addressStreet">
                            <label>Rua:</label>
                            <input id="addressStreet" name='addressStreet'
                                   class="form-control" placeholder="Rua"
                                   value="<?php if($address_street) echo $address_street;?>">
                        </div>
                    </div><!--col-->
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-addressNumber">
                            <label>Número:</label>
                            <input id="addressNumber" name='addressNumber'
                                   class="form-control" placeholder="Número"
                                   value="<?php if($address_number) echo $address_number;?>">
                        </div>
                    </div><!--col-->
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-addressComp">
                            <label>Complemento:</label>
                            <input id="addressComp" name='addressComp'
                                   class="form-control" placeholder="Complemento"
                                   value="<?php if($address_comp) echo $address_comp;?>">
                        </div>
                    </div><!--col-->
                </div> <!--row-->
                <div class='row'>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-addressNeighborhood">
                            <label>Bairro:</label>
                            <input id="addressNeighborhood" name='addressNeighborhood'
                                   class="form-control" placeholder="Bairro"
                                   value="<?php if($address_neighborhood) echo $address_neighborhood;?>">
                        </div>
                    </div><!--col-->
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-addressCity">
                            <label>Cidade:</label>
                            <input id="addressCity" name='addressCity'
                                   class="form-control" placeholder="Cidade"
                                   value="<?php if($address_city) echo $address_city;?>">
                        </div>
                    </div><!--col-->
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-addressState">
                            <label>Estado:</label>
                            <select id="addressState" name='addressState' class="form-control">
                                <option disabled selected>Selecione o estado</option>
                                <?php foreach ($states as $key => $value):?>
                                <option <?php if($address_state == $key) echo 'selected';?>
                                        value="<?php echo $key?>"> <?php echo $value?></option>
                                <?endforeach;?>
                            </select>
                        </div>
                    </div><!--col-->
                </div> <!--row-->
            </fieldset>
            <fieldset>
                <legend>Contato</legend>
                <div class="row">
                    <!-- EMAIL -->
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-email">
                            <label>E-mail:</label>
                            <input id="email" name="email" class="form-control"
                                   placeholder="E-mail"
                                   value="<?php if($email) echo $email;?>">
                        </div>
                    </div><!--col-->
                    <!-- PHONE -->
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-phone">
                            <label>Telefone:</label>
                            <input id="phone" name="phone" class="form-control"
                                   placeholder="Telefone"
                                   value="<?php if($phone) echo $phone;?>">
                        </div>
                    </div><!--col-->
                    <!-- CELLPHONE -->
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group" id="form-cellPhone">
                            <label>Celular:</label>
                            <input id="cellPhone" name="cellPhone" class="form-control"
                                   placeholder="Celular"
                                   value="<?php if($cell_phone) echo $cell_phone;?>">
                        </div>
                    </div><!--col-->
                </div><!--row-->
            </fieldset>
        </form>
    </div>
</div>
<script src="<?php echo base_url('public/js/pages/customer/edit.js')?>"></script>
<script src="<?php echo base_url('public/js/pages/customer/search_zip_code.js')?>"></script>
