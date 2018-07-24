
<?php // print_r($_SESSION);?>

    <div class="container">
        <div class="row">
                        <div class="col-md-2">                             
                            <?php $this->load->view('template/leftindex'); ?>
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
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1">
                                        ชือภาพ</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">รายละเอียดภาพ</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                        <center> ราคา </center> </th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                         <center> ภาพ </center> </th>

                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                        <center> จองคิว </center> </th>

                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($results)){ foreach ($results as $data1) { ?>
                                        <tr role="row">
                                            <td>
                                           <!--
                                            <a href="<?php //echo base_url('prd/edit/'.$data->img_id); ?>">
                                               --> 
                                            <?php echo  $data1->img_name; ?>

                                           <!--  </a> --> 
                                            <br>
                                           
                                            </td>
                                            <td>
                                             <?php echo $data1->img_detail; ?>
                                             <br>
                                             ประเภท : <?php echo  $data1->imgtype_name; ?>
                                             </td>


                                            <td align="right">
                                            <b>
                                             <?php echo  number_format($data1->img_price,2) ; ?>
                                             </b> 
                                             </td>


                                             <td align="center">

                        <a target="_blank" href="<?php echo  base_url('uploads/'.$data1->img); ?>">

                                             <img src="uploads/<?php echo $data1->img; ?>" width="100px">
                                             </a>
                                              
                                            </td> 
                                            <td align="center">
                                            <?php 
                                                @$chklg = $_SESSION['login_id'];
                                                if($chklg !=''){     
                                                ?>
                                        <a href="<?php echo base_url('prd/edit/'.$data1->img_id); ?>" class="btn btn-primary btn-sm">
                                        จอง </a> 
                                           <?php } else {  
                                                echo "จอง";
                                                echo  "<br>";
                                                echo "(สมาชิกเท่านั้น)";
                                            }

                                                ?>

                                            </td>
                                        </tr>
                                    <?php } } ?>
                                </tbody>

                            </table>

                            <!--end prd -->


                           
                             
                        </div>
                        <div class="col-md-2">                             
                            <?php $this->load->view('topsale/mainpage'); ?>
                        </div>

</div> 
</div> 

                         