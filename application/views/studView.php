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
                        $id= $this->uri->segment(3);
                        //print_r($id);
                        $this->db->where('id',$id);
                        $row = $this->db->get('stud_registration')->row();
                        //print_r($row);
                  ?>
                  <table class="table table-bordered">
                  	<tr>
                  		<th>Name</th>
                  		<td><input type="text" name="name" class="form-control" required="" value="<?php echo $row->name;?>"></td>
                  		<th>Date Of Birth</th>
                  		<td><input type="date" name="dob" class="form-control" required="" value="<?php echo $row->dob;?>"></td>
                  	</tr>
                  	<tr>
                  		<th>Email Id</th>
                  		<td><input type="email" name="email" class="form-control" required="" value="<?php echo $row->email_id;?>"></td>
                  		<th>Mobile Number</th>
                  		<td><input type="number" name="mobile" class="form-control" required="" value="<?php echo $row->mobile_no;?>"></td>
                  	</tr>
                  	<tr>
                  		<th>Education</th>
                  		<td><select class="form-control" name="education" >
                  			<option value="">-Select Class-</option>
                  			<option value="10th" <?php if($row->education =="10th") echo 'selected="selected"'; ?> >10th</option>
                  			<option value="12th" <?php if($row->education =="12th") echo 'selected="selected"'; ?>>12th</option>
                  			<option value="B.SC" <?php if($row->education =="B.SC") echo 'selected="selected"'; ?>>B.SC</option>
                  			<option value="B.COM" <?php if($row->education =="B.COM") echo 'selected="selected"'; ?>>B.COM</option>
                  			<option value="BCA" <?php if($row->education=="BCA") echo 'selected="selected"'; ?>>BCA</option>
                  			<option value="MBA" <?php if($row->education =="MBA") echo 'selected="selected"'; ?>>MBA</option>
                  			<option value="MCA" <?php if($row->education =="MCA") echo 'selected="selected"'; ?>>MCA</option>
                  			</select>
                  		</td>
                  		<th>Adhar Card No</th>
                  		<td><input type="number" name="adhar_card" class="form-control" required="" value="<?php echo $row->aadhar_card_no;?>"></td>
                  	</tr>
                  	<tr>
                  		<th>Image</th>
                  		<td><input type="file" name="photo" class="form-control" required=""></td>
                  		<th>Religion</th>
                  		<td><input type="text" name="religion" class="form-control" required="" value="<?php echo $row->religion;?>"></td>
                  	</tr>
                  	<tr>
                  		<th>Category</th>
                  		<td><select name="category" class="form-control">
                  			<option value="">-Select Category</option>
                  			<option value="GEN" <?php if($row->category =="GEN") echo 'selected="selected"'; ?>>GEN</option>
                  			<option value="OBC" <?php if($row->category =="OBC") echo 'selected="selected"'; ?>>OBC</option>
                  			<option value="SC/ST" <?php if($row->category =="SC/ST") echo 'selected="selected"'; ?>>SC/ST</option>
                  		</select></td>
                  		<th>Gender</th>
                  		<td><input type="radio" name="gender"  value="0" <?php if($row->gender =="0") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Male
                  			<input type="radio" name="gender" value="1" <?php if($row->gender =="1") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Female</td>
                  	</tr>
                  	<tr>
                  		<th>Father Name</th>
                  		<td><input type="text" name="fname" class="form-control" required="" value="<?php echo $row->father_name;?>"></td>
                  		<th>Mother Name</th>
                  		<td><input type="text" name="mname" class="form-control" required="" value="<?php echo $row->mother_name;?>"></td>
                  	</tr>
                  	<tr>
                  		<th>If You Given Any Exam</th>
                  		<td><input type="radio" name="estatus" value="1" <?php if($row->exam_status =="1") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Yes
                  			<input type="radio" name="estatus" value="0" <?php  if($row->exam_status =="0") echo 'checked="checked"'; ?>>&nbsp;&nbsp;No</td>
                  			<th>Exam Name</th>
                  		<td><input type="text" name="ename" class="form-control" value="<?php echo $row->exam_name?>" ></td>
                  	</tr>
                  	<tr>
                  		<th>If  Any Disabilities</th>
                  		<td><input type="radio" name="disability" value="1" <?php if($row->disabilities_status =="1") echo 'checked="checked"'; ?>>&nbsp;&nbsp;Yes
                  			<input type="radio" name="disability" value="0" <?php if($row->disabilities_status =="1") echo 'checked="checked"'; ?>>&nbsp;&nbsp;No</td>
                  			<th>Disability Description</th>
                  		<td><input type="text" name="disDescription" class="form-control" value="<?php echo $row->disabilities_descrp?>" ></td>
                  	</tr>
                  	
                  	<tr><th colspan="4">Permanent Address</th></tr>
                  	<tr>
                  		<th>Address</th>
                  		<td><textarea name="per_address" class="form-control" required="" ><?php echo $row->permanent_add?></textarea></td>
                  		<th>City</th>
                  		<td><input type="text" name="per_city" class="form-control"  value="<?php echo $row->permanent_city?>""></td>
                  	</tr>

                  	<tr>
                  		<th>State</th>
                  		<td><input type="text" name="per_state" class="form-control" value="<?php echo $row->permanent_state?>"" ></td>
                  		<th>Pincode</th>
                  		<td><input type="number" name="per_pincode" class="form-control" required="" value="<?php echo $row->permanent_pincode?>""></td>
                  	</tr>
                  	<tr>
                  		<th>Country</th>
                  		<td><input type="text" class="form-control" name="per_country" required="" value="<?php echo $row->permanent_country?>""></td>
                  	</tr>
                  	<tr>
                  		<th colspan="4">Local Address</th>
                  	</tr>
                  	<tr>
                  		<th>Address</th>
                  		<td><textarea name="loc_address" class="form-control" required="" ><?php echo $row->local_address?></textarea></td>
                  		<th>City</th>
                  		<td><input type="text" name="loc_city" class="form-control" value="<?php echo $row->local_city;?>"></td>
                  	</tr>
                  	<tr>
                  		<th>State</th>
                  		<td><input type="text" name="loc_state" class="form-control" value="<?php echo $row->local_state?>" ></td>
                  		<th>Pincode</th>
                  		<td><input type="number" name="loc_pincode" class="form-control" required="" value="<?php echo $row->local_pincode?>"></td>
                  	</tr>
                  	<tr>
                  		<th>Country</th>
                  		<td><input type="text" class="form-control" name="loc_country" required="" value="<?php echo $row->local_country?>"></td>
                  	</tr>
                  	<tr>
                  		<th>Username</th>
                  		<td><input type="text" name="username" class="form-control" required="" value="<?php echo $row->username?>"></td>
                  		<th></th>
                  		<td></td>
                  	</tr>
                  	<!-- <tr>
                  		<td class="text-center"><input type="submit" name="branchSubmit" class="btn btn-md btn-primary" required="" value="Submit"></td>
                  		<td class="text-center"> <input type="reset" name="branchreset" class="btn btn-md btn-primary" required="" value="Reset"></td>
                  	</tr> -->
                  </table>        
					
               </div>
                </div>
            </div>
		</form>
	</div>
</div>