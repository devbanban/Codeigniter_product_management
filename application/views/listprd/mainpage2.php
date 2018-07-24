<?php // print_r($_SESSION);?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <?php // $this->load->view('template/leftindex'); ?>
        </div>
        <div class="col-md-8">
            <div class="col-sm-4">
                <form action="" method="GET" name="search">
                    <input type="search" name="keyword" class="form-control" placeholder="ค้นหา"/>
                </form>
                
            </div>
            <div class="col-sm-4" align="right">
                <div id="" class="dataTables_filter">
                    <a class="btn btn-default" href="<?php echo  base_url('listprd'); ?>" role="button">Refresh</a>
                    <?php
                    @$chklg2 = $_SESSION['login_id'];
                    if($chklg2 !=''){   ?>
                    <a class="btn btn-info" href="<?php echo  base_url('user2/profile'); ?>" role="button"> profile </a>
                    <a class="btn btn-danger" href="<?php echo  base_url('user2/logout'); ?>" role="button"> logout </a>
                    <? }else{}?>
                    
                </div>
            </div>
            <br><br>
            <!--start prd -->
            <br>
            
            <?php if(!empty($results)){ foreach ($results as $data) { ?>
            <div class="col-sm-4">
                <div align="center">
                    <a target="_blank" href="<?php echo  base_url('uploads/'.$data->img); ?>">
                    <img src="<?php echo base_url().'uploads/'.$data->img; ?>" width="100%"></a>
                    <br>
                    <?php echo  $data->img_name; ?>
                    <b>
                    <font color="blue">
                    <?php echo  number_format($data->img_price,2) ; ?>
                    </font>
                    </b>
                    บาท
                    <br>
                    <a href="<?php echo base_url('listprd/read/'.$data->img_id); ?>" class="btn btn-info btn-sm">
                        รายละเอียด
                    </a>
                    
                    
                    <br><br>
                </div>
            </div>
            <?php } }  ?>
            
            <!--end prd -->
            
            
        </div>
        <div class="col-md-2">
            <?php $this->load->view('topsale/showtop'); ?>
        </div>
    </div>
</div>