<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			 จัดการ admin 
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo  base_url('admin'); ?>">
					<i class="fa fa-dashboard">
					</i>หน้าแรก
				</a>
			</li>
			<li>
				<a href="<?php echo  base_url('admin'); ?>">
					ชื่อ
				</a>
			</li>
			<li class="active">
				<?php echo $result->admin_name?>
			</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Your Page Content Here -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">
					แก้ไขข้อมูล
				</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" action="<?php echo  base_url('admin/postdata'); ?>" method="post">
				<input type="hidden" name="id" value="<?php echo $result->id?>">
				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputEmail1">
							ชื่อ
						</label> <?php echo $this->session->flashdata('error_admin_name')?>
						<input type="text" id="admin_name" class="form-control" name="admin_name" value="<?php echo  $result->admin_name ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">
							username
						</label> <?php echo $this->session->flashdata('error_username')?>
						<input type="text" id="username" class="form-control" name="username" value="<?php echo  $result->username ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">
						  password
						</label> <?php echo $this->session->flashdata('error_password')?>
						<input type="text" id="password" class="form-control" name="password" value="<?php // echo  $result->password ?>">
					</div>

				</div><!-- /.box-body -->

				<div class="box-footer">
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-fw fa-save">
						</i>บันทึกข้อมูล
					</button>
					<a class="btn btn-danger" href="<?php echo  base_url('admin'); ?>" role="button">
						<i class="fa fa-fw fa-close">
						</i>ยกเลิก
					</a>
				</div>
			</form>
		</div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->