<?php // print_r($_SESSION);

?>
    <div class="container">
        <div class="row">



                        <div class="col-md-2">                             
                            <?php $this->load->view('template/leftindex'); ?>
                        </div>
<div class="col-md-10">  
                    <?php if(!empty($result)){ ?>
                        <div class="col-sm-6">
    
  
                    <a target="_blank" href="<?php echo  base_url('uploads/'.$result->img); ?>">
                        <img src="<?php echo base_url().'uploads/'.$result->img; ?>" width="100%"></a>
                        <br><br><br><br><br>
                       
                        </div>  
                        <div class="col-sm-6">                    
                                    <b>
                                      <b> <?php echo  $result->img_name; ?></b>    
                                    <font color="blue">
                                    <?php echo  number_format($result->img_price,2) ; ?>
                                    </font> 
                                    </b> 
                                    บาท 
                                    <br>
                                    <b>  รายละเอียด  </b> 
                                   <br>
                                   ประเภท : 
                                   <?php echo $result->imgtype_name; ?>
                                   <br>
                                    <?php echo $result->img_detail; ?>
                                    <br> 
                       
                        
                        <?php 
                        @$chklg = $_SESSION['login_id'];
                            if($chklg !=''){     
                        ?>
                    <a href="<?php echo site_url('listprd/booking/'.$result->img_id); ?>" class="btn btn-primary btn-md">
                                        จอง </a> 
                                           <?php } else {  
                                                // echo "จอง";
                                                // echo  "<br>";
                                                // echo "(สมาชิกเท่านั้น)";
                                            }

                                                ?>
                                                <br><br>
                                                 <br><br>
                                </div> 
                     </div>
                                    <?php } ?>
                         

                            <!--end prd -->

            </div> 
</div> 

                         