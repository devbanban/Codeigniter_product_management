<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Your Page Content Here -->
		<div class="example-modal">
			<div class="modal" style="display: block;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">
								ข้อความแจ้งเตือน
							</h4>
						</div>
						<div class="modal-body">
							<p>
								คุณต้องการลบข้อมูลนี้หรือไม่
							</p>
						</div>
						<div class="modal-footer">
							<a class="btn btn-default pull-left" href="<?= base_url($backlink) ?>" role="button">
								ไม่ใช่
							</a>
							<a class="btn btn-primary" href="<?= base_url($deletelink) ?>" role="button">
								ใช่ ยืนยันการลบ
							</a>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
