<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			 จัดการสินค้า
			 
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url('prd'); ?>">
					<i class="fa fa-dashboard">
					</i>หน้าแรก
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('prd'); ?>">
					 จัดการสินค้า
				</a>
			</li>
			<li class="active">
				เพิ่มข้อมูลใหม่
			</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div> 
			<div class="col-sm-7">
		<!-- Your Page Content Here -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">
					เพิ่มข้อมูล
				</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" action="<?php echo base_url('prd/adding'); ?>" method="post" enctype="multipart/form-data">
				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputEmail1">
							ประเภท
						</label> <?php echo $this->session->flashdata('err_imgtype_id'); ?>
						<select class="form-control" name="imgtype_id">
							<option value="">
								เลือกข้อมูล
							</option>
							<?php
							foreach($results as $result){
								?>
								<option value="<?php echo $result->imgtype_id; ?>">
									<?php echo $result->imgtype_name; ?>
								</option>
								<?php
							} ?>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">
							ชื่อภาพ
						</label> <?php echo $this->session->flashdata('err_img_name'); ?>
						<input type="text" id="img_name" class="form-control" name="img_name" value="<?php echo $this->session->flashdata('img_name'); ?>">
					</div>
					<div class="form-group">
						<label>
							รายละเอียด
						</label>
						<textarea rows="3" class="form-control" id="img_detail" name="img_detail"><?php echo $this->session->flashdata('img_detail'); ?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">
							ราคา 
						</label> <?php echo $this->session->flashdata('err_img_price'); ?>
						<input type="number" id="topic" class="form-control" name="img_price" value="<?php echo $this->session->flashdata('img_price'); ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">
							อัพโหลดไฟล์ภาพ
						</label> <?php echo $this->session->flashdata('err_img'); ?>
						<input type="file" name="img" id="img" >
					</div>
					
				</div><!-- /.box-body -->

				<div class="box-footer">
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-fw fa-save">
						</i>บันทึกข้อมูล
					</button>
					<a class="btn btn-danger" href="<?php echo base_url('prd'); ?>" role="button">
						<i class="fa fa-fw fa-close">
						</i>ยกเลิก
					</a>
				</div>
			</form>
		</div>
		</div>
		</div>
		</div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script type="text/javascript">
	$('#register_date').datepicker().on(picker_event,function(e)
		{
		});
</script>