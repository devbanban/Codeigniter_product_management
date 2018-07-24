<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการสมาชิก
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url('member'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  base_url('member'); ?>">จัดการสมาชิก</a></li>
            <li class="active">เพิ่มข้อมูลใหม่</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="container">
        <div class="row">
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">เพิ่มข้อมูล</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <form role="form" action="<?php echo  base_url('member/postdata'); ?>" method="post" class="form-horizontal">
                
                <div class="box-body">
                <div class="form-group">
                <div class="col-sm-4">
                        <label for="exampleInputEmail1">
                            username
                        </label> 
                        <?php echo $this->session->flashdata('error_username')?>
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $this->session->flashdata('username'); ?>">
                </div>
                <div class="col-sm-4">  
                    <label for="exampleInputEmail1">
                            password
                        </label> <?php echo $this->session->flashdata('error_password')?>
                        <input type="password" id="password" class="form-control" name="password" value="<?php echo  $this->session->flashdata('password'); ?>">
                </div>

            </div>
                 
                        
             
            <div class="form-group">
                    <div class="col-sm-4">  
                        <label for="exampleInputEmail1">
                            ชื่อ
                        </label> <?php echo $this->session->flashdata('error_name')?>
                        <input type="text" id="name" class="form-control" name="name" value="<?php echo $this->session->flashdata('name'); ?>">
                    </div>

                    <div class="col-sm-4">      
                        <label for="exampleInputEmail1">
                            สกุล
                        </label> <?php echo $this->session->flashdata('error_lastname')?>
                        <input type="text" id="lastname" class="form-control" name="lastname" value="<?php echo  $this->session->flashdata('lastname'); ?>">
                    </div>

            </div>



            <div class="form-group">
            <div class="col-sm-8">
                        <label>
                            ที่อยู่
                        </label>
                        <textarea rows="3" class="form-control" id="address" name="address"><?php echo  $this->session->flashdata('address'); ?></textarea>
            </div>
        </div>

                    <div class="form-group">
                    <div class="col-sm-4">  
                        <label for="exampleInputEmail1">
                            email
                        </label> <?php echo $this->session->flashdata('error_email')?>
                        <input type="email" id="email" class="form-control" name="email" value="<?php echo  $this->session->flashdata('email'); ?>">
                    </div>
                    <div class="col-sm-4">  
                        <label for="exampleInputEmail1">
                         เบอร์โทร
                        </label> <?php echo $this->session->flashdata('error_tel')?>
                        <input type="text" id="tel" class="form-control" name="tel" value="<?php echo  $this->session->flashdata('tel'); ?>">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-4">  
                        <label for="exampleInputEmail1">
                            เพศ
                        </label> 
                        <?php // echo $this->session->flashdata('error_gender')?>

                        <select name="gender" id="gender">
                            <option value="1">ชาย</option>
                            <option value="2">หญิง</option>
                             
                        </select>

                    </div>
                    <div class="col-sm-4">  
                        <label for="exampleInputEmail1">
                         วันเกิด
                        </label> <?php echo $this->session->flashdata('error_brithday')?>
                        <input type="date" id="brithday" class="form-control" name="brithday" value="<?php echo  $this->session->flashdata('brithday'); ?>">
                    </div>
                    </div>

                     

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-fw fa-save">
                        </i>บันทึกข้อมูล
                    </button>
                    <a class="btn btn-danger" href="<?php echo  base_url('member'); ?>" role="button">
                        <i class="fa fa-fw fa-close">
                        </i>ยกเลิก
                    </a>
                </div>
            </form>
        </div>
        </div> </div> </div> 
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->