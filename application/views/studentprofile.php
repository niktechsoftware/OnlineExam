<div class="row">
	<div class="col-md-12">
		<h3><?php echo $subtitle;?></h3>
		<form method="post" action="<?php echo base_url()?>studentController/studRegistration"  class="form-detail" enctype="multipart/form-data">
			 <div class="panel panel-calendar  exam_panel_body">
                <div class="panel-heading bg_info border-light">
                    <h5 class="panel-title text-center">Registration Form</h5>
                </div>
               <div class="panel-body">
               <div class="text-black text-large exam_panel">
                  <?php
                     $uname=  $this->session->userdata('username');

                        $this->db->where('username',$uname);
                        $row = $this->db->get('stud_registration')->row();
                        //print_r($row);
                  ?>
                  <div class="row">
                        <div class="col-md-12">
                              <div class="row">
                                    <div class="col-md-4">
                                           <div class="row">
                                                <div class="col-md-3">
                                                      <label>Image</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                        <img width="200px" height="200px;" src="<?php echo base_url()?>assets/images/student/<?php echo $row->photo;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Username</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                              <?php echo $row->username?>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-md-8">
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Name</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                          <input type="text" name="name" class="form-control" required="" value="<?php echo $row->name;?>"><i class="fa fa-edit" style="font-size:24px"></i>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Date Of Birth</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                          <input type="date" name="dob" class="form-control" required="" value="<?php echo $row->dob;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Email Id</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                          <input type="email" name="email" class="form-control" required="" value="<?php echo $row->email_id;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Mobile Number</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                          <input type="number" name="mobile" class="form-control" required="" value="<?php echo $row->mobile_no;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                           <div class="row">
                                                <div class="col-md-3">
                                                      <label>Education</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                         <select class="form-control" name="education" >
                                                            <option value="">-Select Class-</option>
                                                            <option value="10th" <?php if($row->education =="10th") echo 'selected="selected"'; ?> >10th</option>
                                                            <option value="12th" <?php if($row->education =="12th") echo 'selected="selected"'; ?>>12th</option>
                                                            <option value="B.SC" <?php if($row->education =="B.SC") echo 'selected="selected"'; ?>>B.SC</option>
                                                            <option value="B.COM" <?php if($row->education =="B.COM") echo 'selected="selected"'; ?>>B.COM</option>
                                                            <option value="BCA" <?php if($row->education=="BCA") echo 'selected="selected"'; ?>>BCA</option>
                                                            <option value="MBA" <?php if($row->education =="MBA") echo 'selected="selected"'; ?>>MBA</option>
                                                            <option value="MCA" <?php if($row->education =="MCA") echo 'selected="selected"'; ?>>MCA</option>
                                                            </select>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Adhar Card No</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                         <input type="number" name="adhar_card" class="form-control" required="" value="<?php echo $row->aadhar_card_no;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                           <div class="row">
                                                <div class="col-md-3">
                                                      <label>Religion</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                        <input type="text" name="religion" class="form-control" required="" value="<?php echo $row->religion;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Category</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                       <select name="category" class="form-control">
                                                            <option value="">-Select Category</option>
                                                            <option value="GEN" <?php if($row->category =="GEN") echo 'selected="selected"'; ?>>GEN</option>
                                                            <option value="OBC" <?php if($row->category =="OBC") echo 'selected="selected"'; ?>>OBC</option>
                                                            <option value="SC/ST" <?php if($row->category =="SC/ST") echo 'selected="selected"'; ?>>SC/ST</option>
                                                      </select>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                           <div class="row">
                                                <div class="col-md-3">
                                                      <label>Gender</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                            <input type="radio" name="gender"  value="0" <?php if($row->gender =="0") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Male
                                                            <input type="radio" name="gender" value="1" <?php if($row->gender =="1") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Female
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                           <div class="row">
                                                <div class="col-md-3">
                                                      <label>Father Name</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                            <input type="text" name="fname" class="form-control" required="" value="<?php echo $row->father_name;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Mother Name</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                           <input type="text" name="mname" class="form-control" required="" value="<?php echo $row->mother_name;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>If You Given Any Exam</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                           <input type="radio" name="estatus" value="1" <?php if($row->exam_status =="1") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Yes
                                                                  <input type="radio" name="estatus" value="0" <?php  if($row->exam_status =="0") echo 'checked="checked"'; ?>>&nbsp;&nbsp;No
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Exam Name</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                           <input type="text" name="ename" class="form-control" value="<?php echo $row->exam_name?>" >
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                           <div class="row">
                                                <div class="col-md-3">
                                                      <label>If  Any Disabilities</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                          <input type="radio" name="disability" value="1" <?php if($row->disabilities_status =="1") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Yes
                                    <input type="radio" name="disability" value="0" <?php if($row->disabilities_status =="1") echo 'checked="checked"'; ?>>&nbsp;&nbsp;No
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Disability Description</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="disDescription" class="form-control" value="<?php echo $row->disabilities_descrp?>" >
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <label>Permanent Address</label>
                                                </div>
                                          </div><hr>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Address</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                         <textarea name="per_address" class="form-control" required="" ><?php echo $row->permanent_add?></textarea>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>City</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="per_city" class="form-control"  value="<?php echo $row->permanent_city?>"">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>State</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                        <input type="text" name="per_state" class="form-control" value="<?php echo $row->permanent_state?>"" >
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Pincode</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                       <input type="number" name="per_pincode" class="form-control" required="" value="<?php echo $row->permanent_pincode?>"">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Country</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                     <input type="text" class="form-control" name="per_country" required="" value="<?php echo $row->permanent_country?>"">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <label>Local Address</label>
                                                </div>
                                          </div><hr>
                                           <div class="row">
                                                <div class="col-md-3">
                                                      <label>Address</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                    <textarea name="loc_address" class="form-control" required="" ><?php echo $row->local_address?></textarea>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>City</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                   <input type="text" name="loc_city" class="form-control" value="<?php echo $row->local_city;?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                           <div class="row">
                                                <div class="col-md-3">
                                                      <label>State</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                  <input type="text" name="loc_state" class="form-control" value="<?php echo $row->local_state?>" >
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Pincode</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                 <input type="number" name="loc_pincode" class="form-control" required="" value="<?php echo $row->local_pincode?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                      <label>Country</label>
                                                </div>
                                                <div class="col-md-9">
                                                      <div class="form-group form-primary">
                                                <input type="text" class="form-control" name="loc_country" required="" value="<?php echo $row->local_country?>">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
					
               </div>
                </div>
            </div>
		</form>
	</div>
</div>