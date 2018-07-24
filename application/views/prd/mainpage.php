<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการสินค้า
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url('prd'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">จัดการสินค้า</li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ตารางข้อมูล</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-success" href="<?php echo  base_url('prd/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                            <a class="btn btn-default" href="<?php echo  base_url('prd'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="" class="dataTables_filter">
                            <form action="" method="GET" name="search">
                            	<label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหา"></label>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 20%;">ชือภาพ</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">รายละเอียดภาพ </th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">ภาพ</th>

                                        
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($results)){ foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td>
                                            <a href="<?php echo base_url('prd/edit/'.$data->img_id); ?>">
                                            <?php echo  $data->img_name; ?>
                                            </a> 
                                            <br>
                                           
                                            </td>
                                            <td>
                                             <?php echo $data->img_detail; ?>
                                             [ ราคา : <?php echo  $data->img_price; ?>]
                                             <br>
                                             ประเภท : <?php echo  $data->imgtype_name; ?>
                                             </td>
                                             <td>

                        <a target="_blank" href="<?php echo  base_url('uploads/'.$data->img); ?>">

                                             <img src="uploads/<?php echo $data->img; ?>" width="100px">
                                             </a>
                                              
                                            </td> 
                                            <td>
                                            	<a class="btn btn-danger btn-xs" href="<?php echo  base_url('prd/confrm/'.$data->img_id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
                                            </td>
                                        </tr>
                                    <?php } } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Total <?php echo  $total_rows; ?> entries</div>
                        </div>
                        <div class="col-sm-7">
                            <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
                                <?php echo $link; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->