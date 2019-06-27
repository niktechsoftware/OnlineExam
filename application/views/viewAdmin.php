<div class="row">
	<div class="col-md-12">
      <?php  //$id= $this->uri->segment(3);
                  $uname= $this->session->userdata('username');
                 // print_r($id);
                 // print_r($uname);?>
		<h3><?php echo $subtitle;?></h3>
		<form method="post" action="<?php echo base_url()?>adminController/branchRegistration"  class="form-detail" enctype="multipart/form-data">
			 <div class="panel panel-calendar  exam_panel_body">
                <div class="panel-heading bg_info border-light">
                    <h5 class="panel-title text-center">Admin Profile</h5>
                </div>
               <div class="panel-body">
               <div class="text-black text-large exam_panel">
               	<?php 
               	$this->db->where('username',$uname);
                  //$this->db->where('id',$id);
               	$row = $this->db->get('general_setting');
                 //print_r($row->result());
                  if($row->num_rows()>0)
                  {                 
?>
                 <div class="row">
                    <div class="col-md-12">
                       <div class="row">
                          <div class="col-md-4">
                           <div class="row">
                                 <div class="col-md-10">
                                    <div class="form-group form-primary">
                                   <img width="150px" height="170px;" src="<?php echo base_url()?>adminform/assets/images/admin/<?php echo $row->row()->photo;?>">
                                    <span class="form-bar"></span>
                                    
                                </div>
                                 </div>
                                  <div class="col-md-2"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                              <hr>
                             <div class="row">
                                 <div class="col-md-4"><label>User Name</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <label><?php echo $row->row()->username;?></label>
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>Password</label></div>
                                 <div class="col-md-7">
                                    <div class="form-group form-primary">
                                    <!--  <?php
                                     $key= $row->row()->password;
                                     $data = $this->encrypt->decode($key);
                                     ?> -->
                                  <input type="text" name="branch_name" class="form-control" required="" value="<?php echo $row->row()->password;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-2"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                          </div>
                          <div class="col-md-8">
                              
                              <div class="row">
                                 <div class="col-md-3"><label>Name</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                  <input type="text" name="branch_name" class="form-control" required="" value="<?php echo $row->row()->name;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>Mobile No</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="number" name="mobile" class="form-control" required="" value="<?php echo $row->row()->mobile_no;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Father Name</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                  <input type="text" name="father_name" class="form-control" required="" value="<?php echo $row->row()->father_name;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>Date Of Birth</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="date" name="dob" class="form-control" required="" value="<?php echo $row->row()->dob;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Email Id</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="email" name="email" class="form-control" required="" value="<?php echo $row->row()->email_id;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Gender</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                        <input type="radio" name="gender"  value="Male" <?php if($row->row()->gender =="male") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Male
                                        <input type="radio" name="gender" value="female" <?php if($row->row()->gender =="female") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Female
                                        <span class="form-bar"></span>
                                    </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Address</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                  <textarea name="address" class="form-control" required=""><?php echo $row->row()->address;?></textarea>
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>City</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                  <input type="text" name="branch_city" class="form-control" required="" value="<?php echo $row->row()->city;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>State</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                 <input type="text" name="branch_state" class="form-control" required="" value="<?php echo $row->row()->state;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Country</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                <input type="text" name="branch_country" class="form-control" required="" value="<?php echo $row->row()->country;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Pincode</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                               <input type="number" name="branch_pincode" class="form-control" required="" value="<?php echo $row->row()->pincode;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>Adhar Card No</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="number" name="adharno" class="form-control" required="" value="<?php echo $row->row()->aadhar_card_no;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>Category</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="text" name="category" class="form-control" required="" value="<?php echo $row->row()->category;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>Religion</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="text" name="religion" class="form-control" required="" value="<?php echo $row->row()->religious;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                  <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateAdmin/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px;color: #c7c2c2;"></i></a></div>
                              </div>
                          </div>
                       </div>
                    </div>
                 </div>      
					<?php }?>

               </div>
                </div>
            </div>
		</form>
	</div>
</div>