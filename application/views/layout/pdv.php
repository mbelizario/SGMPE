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
    <link href="<?php echo base_url('public/css/jquery-confirm.css')?>" rel="stylesheet">

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
<script src="<?php echo base_url('public/js/plugins/jquery-confirm.js')?>"></script>
<body>
<input type="hidden" id="url" value="<?php echo $this->uri->segment(1)?>">
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

<div class="col-lg-12">
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
<script>
    /*    $(document).ready(function(){
            var url = $("#url").val();
            if(url === "products" || url === "productCategories")
                $('#sub-item-1').toggle();
            else if(url === "billsToPay" || url === "billsToReceive")
                $('#sub-item-2').toggle();



        });*/



</script>

</body>
</html>
