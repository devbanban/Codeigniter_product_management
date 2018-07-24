
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>iKKYU TATTO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <?php echo link_tag('bootstrap/css/bootstrap.css'); ?>
	<!-- font awesome icons-->
	<?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
	<!-- ionicons-->
	<?php echo link_tag('bootstrap/css/ionicons.min.css'); ?>
	<!--Theme style-->
	<?php echo link_tag('dist/css/AdminLTE.min.css'); ?>
	<!--Theme skin -->
	<?php //echo link_tag('dist/css/skins/skin-black.min.css'); ?>
	<!--Theme skin -->
	<?php //echo link_tag('plugins/datatables/dataTables.bootstrap.css'); ?>
	<!--My Custom-->
	<?php echo link_tag('dist/css/mycustom.css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="layout-top-nav">
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">

              <a href="<?php echo base_url(); ?>" class="navbar-brand"><b>iKKYU TATTO</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>">หน้าหลัก</a></li>
              <li><a href="<?php echo base_url('listprd'); ?>">สินค้า</a></li>
              <li><a href="<?php echo base_url('order/m_q');?>">คิวจอง</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url('register/newdata'); ?>">สมัครสมาชิก</a></li>
              <li><a href="<?php echo base_url('user2/login'); ?>">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <img src="<?php echo base_url('img/benner1.jpg'); ?>" width="100%">
    </div>
    <div class="col-md-12">
        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">

              <a href="<?php echo base_url(); ?>" class="navbar-brand"><b>iKKYU TATTO</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>">หน้าหลัก</a></li>
              <li><a href="<?php echo base_url('listprd'); ?>">สินค้า</a></li>
               <li><a href="<?php echo base_url('order/m_q');?>">คิวจอง</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url('register/newdata'); ?>">สมัครสมาชิก</a></li>
              <li style="padding-right: 10px"><a href="<?php echo base_url('user2/login'); ?>"">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div>
    </div>
</div>
<br>

        
   
