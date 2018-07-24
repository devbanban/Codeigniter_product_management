<?php //print_r($_SESSION);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		devbanban.com Product management by Codeigniter
	</title>
	<!-- tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- bootstrap 3.3.4-->
	<?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
	<!-- font awesome icons-->
	<?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
	<!-- ionicons-->
	<?php echo link_tag('bootstrap/css/ionicons.min.css'); ?>
	<!--Theme style-->
	<?php echo link_tag('dist/css/AdminLTE.min.css'); ?>
	<!--Theme skin -->
	<?php echo link_tag('dist/css/skins/skin-blue.min.css'); ?>
	<!--Theme skin -->
	<?php echo link_tag('plugins/datatables/dataTables.bootstrap.css'); ?>
	<!--My Custom-->
	<?php echo link_tag('dist/css/mycustom.css'); ?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 2.1.4 -->
	<script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript">
	</script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js" type="text/javascript">
	</script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>dist/js/app.min.js" type="text/javascript">
	</script>
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
<!-- Main Header -->
<header class="main-header">

	<!-- Logo -->
	<a href="<?php base_url(); ?>" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini">
			<b>
				A
			</b>LT
		</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg">
			<b>
				Admin
			</b>LTE
		</span>
	</a>

	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">
				Toggle navigation
			</span>
		</a>
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- User Account Menu -->
				<li class="dropdown user user-menu">
					<!-- Menu Toggle Button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!-- The user image in the navbar-->
						<img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs">
							<?php echo $this->session->userdata('display_name')?>
						</span>
					</a>
					<ul class="dropdown-menu">
						<!-- The user image in the menu -->
						<li class="user-header">
							<img src="<?php echo base_url()?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
							
							<p>
								<?php // echo $this->session->userdata('username'); ?>
								<small>
									menu
								</small>
							</p>
						</li>
						<!-- Menu Body -->
						<!--                                    <li class="user-body">
						<div class="col-xs-4 text-center">
						<a href="#">Followers</a>
						</div>
						<div class="col-xs-4 text-center">
						<a href="#">Sales</a>
						</div>
						<div class="col-xs-4 text-center">
						<a href="#">Friends</a>
						</div>); ?>
						</li>-->
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?php echo  base_url('user/profile'); ?>" class="btn btn-default btn-flat">
									Profile
								</a>
							</div>
							<div class="pull-right">
								<a href="<?php echo  base_url('user/logout'); ?>" class="btn btn-default btn-flat">
									Sign out
								</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="#">
						<i class="fa fa-gears">
						</i>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>
					<?php echo $this->session->userdata('display_name'); ?>
				</p>
				<!-- Status -->
				<a href="#">
					<i class="fa fa-circle text-success">
					</i>Online
				</a>
			</div>
		</div>

		<!-- search form (Optional) -->
	
		<!-- /.search form -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<li class="header">
				MENU
			</li>
			<!-- Optionally, you can add icons to the links -->
			<li class="<?php echo activate_menu('admin'); ?>">
				<a href="<?php echo base_url('admin'); ?>">
					<i class="fa fa-link">
					</i>
					<span>
						- จัดการ admin 
					</span>
				</a>
			</li>
			<li class="<?php echo activate_menu('member'); ?>">
				<a href="<?php echo base_url('member'); ?>">
					<i class="fa fa-link">
					</i>
					<span>
						- จัดการสมาชิก
					</span>
				</a>
			</li>
			<li class="<?php echo activate_menu('imgtype'); ?>">
				<a href="<?php echo base_url('imgtype'); ?>">
					<i class="fa fa-link">
					</i>
					<span>
						- จัดการประเภทสินค้า
					</span>
				</a>
			</li>

			<li class="<?php echo activate_menu('prd'); ?>">
				<a href="<?php echo base_url('prd'); ?>">
					<i class="fa fa-link">
					</i>
					<span>
						- จัดการสินค้า
					</span>
				</a>
			</li>	
		</ul><!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>