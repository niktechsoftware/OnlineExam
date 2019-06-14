<div class="row">
	<div class="col-md-12">
      <?php  $id= $this->uri->segment(3);
                  $uname= $this->session->userdata('username');
                  //print_r($id);
                 // print_r($uname);?>
		<h3><?php echo $subtitle;?></h3>
		<form method="post" action="<?php echo base_url()?>adminController/editbranchRegistration"  class="form-detail" enctype="multipart/form-data">
			 <div class="panel panel-calendar  exam_panel_body">
                <div class="panel-heading bg_info border-light">
                    <h5 class="panel-title text-center">Branch Registration</h5>
                </div>
               <div class="panel-body">
               <div class="text-black text-large exam_panel">
               	<?php 
               	//$this->db->where('username',$uname);
                  $this->db->where('id',$id);
               	$row = $this->db->get('branch');
                 // print_r($row);
                  if($row->num_rows()>0)
                  {                 
?>
                 <div class="row">
                    <div class="col-md-12">
                       <div class="row">
                          <div class="col-md-4">
                           <div class="row">
                                 <div class="col-md-3"><label> Photo</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <img width="200px" height="200px;" src="<?php echo base_url()?>assets/images/branch/<?php echo $row->row()->photo;?>">
                                   <input type="file" name="imgPhoto">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                              <hr>
                             <div class="row">
                                 <div class="col-md-3"><label>User Name</label></div>
                                 <div class="col-md-9">
                                    <div class="form-group form-primary">
                                   <label><?php echo $row->row()->username;?></label>
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Password</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="text" name="branch_name" class="form-control" required="" value="<?php echo $row->row()->password;?>" >
                                    <span class="form-bar"></span>
                                  </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                          </div>
                          <div class="col-md-8">
                              
                              <div class="row">
                                 <div class="col-md-3"><label>Branch Name</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                  <input type="text" name="branch_name" class="form-control" required="" value="<?php echo $row->row()->branch_name;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>Mobile No</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="number" name="mobile" class="form-control" required="" value="<?php echo $row->row()->mobile_no;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Email Id</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                   <input type="email" name="email" class="form-control" required="" value="<?php echo $row->row()->email_id;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Address</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                  <textarea name="address" class="form-control" required=""><?php echo $row->row()->address;?></textarea>
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>City</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                  <input type="text" name="branch_city" class="form-control" required="" value="<?php echo $row->row()->city;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                               <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                               <div class="row">
                                 <div class="col-md-3"><label>State</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                 <input type="text" name="branch_state" class="form-control" required="" value="<?php echo $row->row()->state;?>" >
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Country</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                                <input type="text" name="branch_country" class="form-control" required="" value="<?php echo $row->row()->country;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3"><label>Pincode</label></div>
                                 <div class="col-md-8">
                                    <div class="form-group form-primary">
                               <input type="number" name="branch_pincode" class="form-control" required="" value="<?php echo $row->row()->pincode;?>">
                                    <span class="form-bar"></span>
                                </div>
                                 </div>
                                 <div class="col-md-1"><a href="<?php echo base_url()?>adminController/updateBranchDetailView/<?php echo $row->row()->id;?>" ><i class="fa fa-edit" style="font-size:20px"></i></a></div>
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