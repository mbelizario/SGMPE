<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{title_for_layout}</title>
	<link href="<?php echo base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/responsive.bootstrap.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/datatables.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/font-awesome.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/datepicker3.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/styles.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/toolbar.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/tooltipup.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/table-list.css')?>" rel="stylesheet">

	<!--Custom Font-->
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<script src="<?php echo base_url('public/js/jquery-3.2.1.js')?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('public/js/plugins/dtconfig.js')?>"></script>
<script src="<?php echo base_url('public/js/plugins/datatables.min.js')?>"></script>
<script src="<?php echo base_url('public/js/plugins/dataTables.responsive.js')?>"></script>
<script src="<?php echo base_url('public/js/plugins/jquery.mask.js')?>"></script>
<script src="<?php echo base_url('public/js/chart.min.js')?>"></script>
<script src="<?php echo base_url('public/js/chart-data.js')?>"></script>
<script src="<?php echo base_url('public/js/easypiechart.js')?>"></script>
<script src="<?php echo base_url('public/js/easypiechart-data.js')?>"></script>
<script src="<?php echo base_url('public/js/bootstrap-datepicker.js')?>"></script>
<script src="<?php echo base_url('public/js/custom.js')?>"></script>
<script src="<?php echo base_url('public/js/table-list.js')?>"></script>
<script src="<?php echo base_url('public/js/plugins/notify.js')?>"></script>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>SG</span>MPE</a>
				<ul class="nav navbar-top-links navbar-right">
          <a href="<?php echo base_url('login/logout')?>" class="navbar-brand" style="text-transform:None; font-size: 15px"><strong><em class="fa fa-power-off">&nbsp;</em>Sair</strong></a>
          <!-- <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a> -->
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
                    <?if($this->session->userdata('username')) echo $this->session->userdata('username')?></div>
				<!-- <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div> -->
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">
			<li <?php if($this->uri->segment(1)=="home"):?>
				class="active"<?php endif;?> ><a href=" <?php echo base_url('home')?>">
					<em class="fa fa-home">&nbsp;</em> Página inicial</a></li>
			<li<?php if($this->uri->segment(1)=="customers"):?>
                class="active"<?php endif;?>><a href="<?php echo base_url('customers')?>"><em class="fa fa-users">&nbsp;</em> Clientes</a></li>
      <li <?php if($this->uri->segment(1)=="suppliers"):?>
				class="active"<?php endif;?>><a href="<?php echo base_url('suppliers')?>"><em class="fa fa-truck">&nbsp;</em> Fornecedores</a></li>
    <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
            <em class="fa fa-usd">&nbsp;</em> Estoque <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-2">
            <li><a <?php if($this->uri->segment(1)=="products"):?>
                    class="active"<?php endif;?> href="<?php echo base_url('products')?>">
                    <span class="fa fa-arrow-right">&nbsp;</span> Produtos
                </a></li>
            <li ><a <?php if($this->uri->segment(1)=="productCategories"):?>
                    class="active"<?php endif;?> href="<?php echo base_url('productCategories')?>">
                    <span class="fa fa-arrow-right">&nbsp;</span> Categoria de produtos
                </a></li>
        </ul>
    </li>
      <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
        <em class="fa fa-usd">&nbsp;</em> Contas <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> A pagar
          </a></li>
          <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> A receber
          </a></li>
        </ul>
      </li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Relatórios</a></li>
			<li <?php if($this->uri->segment(1)=="users"):?>class="active"<?php endif;?> ><a href="<?php echo base_url('users')?>"><em class="fa fa-user">&nbsp;</em> Usuários</a></li>
      <li><a href="widgets.html"><em class="fa fa-book">&nbsp;</em> Documentação</a></li>
			<li><a href="panels.html"><em class="fa fa-cogs">&nbsp;</em>Configurações</a></li>
		</ul>
	</div><!--/.sidebar-->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    {content_for_layout}
	</div>	<!--/.main-->


	<!-- <script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script> -->

</body>
</html>
