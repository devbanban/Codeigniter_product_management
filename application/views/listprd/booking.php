
    <div class="container">
        <div class="row">



                        <div class="col-md-2">                             
                            <?php $this->load->view('template/leftindex'); ?>
                        </div>


        <div class="col-md-10">  

          <?php  //  echo $this->session->flashdata('msginfo'); ?>
                    <?php if(!empty($result)){ ?>
                        <div class="col-sm-6">
    
  
                    <a target="_blank" href="<?php echo  base_url('uploads/'.$result->img); ?>">
                        <img src="<?php echo base_url().'uploads/'.$result->img; ?>" width="100%"></a>
                        <br>
                        <b>
                                      <b> <?php echo  $result->img_name; ?></b>    
                                    <font color="blue">
                                    <?php echo  number_format($result->img_price,2) ; ?>
                                   
                                    </font> 

                                    </b> 
                                    บาท   
                                    <br>
                                    <?php echo  $result->img_detail; ?>
                       
                        </div>  
                        <div class="col-sm-6">                    
            <?php @$chklg = $_SESSION['login_id']; ?>                        
            <h4> ::  จองคิว ::  <hr> </h4> 

          
                                
                <form role="form" action="<?php echo  base_url('listprd/dobooking'); ?>" method="post" class="form-horizontal">
                  <input type="hidden" name="user_id" value="<?php echo $chklg;?>">
                  <input type="hidden" name="status" value="1">
                  <input type="hidden" name="pay_id" value="1">
                 
                  <?php 
                  /*
                  date_default_timezone_set('Asia/Bangkok');
                 <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>">
                   <input type="hidden" name="time" value="<?php echo date('H:i:s');?>">
                 */
                  ?>
                   

                  



                 

                    
                    <div class="form-group">
                        <div class="col-sm-2"> มัดจำ </div>
                        <div class="col-sm-6">
                        <?php echo $this->session->flashdata('error_deposits'); ?>
                        <input type="number" id="deposits" class="form-control" name="deposits" value="<?php echo  $this->session->flashdata('deposits'); ?>"  required>
                        </div> 
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2"> เบอร์  </div>
                        <div class="col-sm-8">
                        <?php echo $this->session->flashdata('error_tel'); ?>
                        <input type="text" id="tel" class="form-control" name="tel" value="<?php echo  $this->session->flashdata('tel'); ?>" required>
                        </div> 
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2"> วันที่จอง  </div>
                        <div class="col-sm-8">
                        <?php echo $this->session->flashdata('error_date'); ?>
                        <input type="date" id="date" class="form-control" name="date" value="<?php echo  $this->session->flashdata('date'); ?>" required>
                        </div> 
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2"> เวลา   </div>
                        <div class="col-sm-8">
                        <?php echo $this->session->flashdata('error_time'); ?>
                        <input type="time" id="date" class="form-control" name="time" value="<?php echo  $this->session->flashdata('time'); ?>" required>
                        </div> 
                    </div>

                    <div class="form-group">
                     <div class="col-sm-2"> ลาย  </div>
                     <div class="col-sm-8">
                         <input type="radio"  name="img_id" value="<?php echo  $result->img_id; ?>" required> เลือกทางร้าน 
                         <br>
                          <input type="radio" name="img_id" value="0"> หามาเอง <br>
                    </div>
                    </div>

                <div class="form-group">
                     <div class="col-sm-2"></div>
                     <div class="col-sm-8">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo  base_url('bank'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                </div>
                </div>
            </form>
                                </div> 
                </div> 
                         

                </div>
                </div> 
    <?php } ?>

            
    <?php /*            
                <div class="row">
                    <div class="col-md-3"></div> 
                    <div class="col-md-5">
                                <!-- form booking-->

                               <h4>  จองคิว  <hr> </h4> 
                                
                <form role="form" action="<?php echo  base_url('bank/postdata'); ?>" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="exampleInputEmail1">มัดจำ</label> <?php echo $this->session->flashdata('error_btype'); ?>
                        <input type="text" id="btype" class="form-control" name="btype" value="<?php echo  $this->session->flashdata('btype'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">เบอร์โทร </label> <?php echo $this->session->flashdata('error_bnumber'); ?>
                        <input type="text" id="bnumber" class="form-control" name="bnumber" value="<?php echo  $this->session->flashdata('bnumber'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">รูปภาพ
                        </label> 
                        radio 
                    </div>

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo  base_url('bank'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                </div>
            </form>
*/?>

                         