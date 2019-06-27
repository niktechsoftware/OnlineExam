<div class="row">
	<div class="col-md-12">
		<h3><?php echo $subtitle;?></h3>
		<form method="post"  name="form1" action="<?php echo base_url()?>branchController/studRegistration"  class="form-detail" enctype="multipart/form-data">
			 <div class="panel panel-calendar  exam_panel_body">
                <div class="panel-heading bg_info border-light">
                    <h5 class="panel-title text-center">Registration Form</h5>
                </div>
               <div class="panel-body">
               <div class="text-black text-large exam_panel">
                  <table class="table table-bordered">
                  	<tr>
                  		<th>Name</th>
                  		<td><input type="text" name="name" class="form-control" required=""></td>
                  		<th>Date Of Birth</th>
                  		<td><input type="date" name="dob" class="form-control" required=""></td>
                  	</tr>
                  	<tr>
                  		<th>Email Id</th>
                  		<td><input type="email" name="email" class="form-control" required=""></td>
                  		<th>Mobile Number</th>
                  		<td><input type="number" name="mobile" class="form-control" required=""></td>
                  	</tr>
                  	<tr>
                  		<th>Education</th>
                  		<td><select class="form-control" name="education">
	                  			<option value="">-Select Class-</option>
	                  			<option value="10th">10th</option>
	                  			<option value="12th">12th</option>
	                  			<option value="B.SC">B.SC</option>
	                  			<option value="B.COM">B.COM</option>
	                  			<option value="BCA">BCA</option>
	                  			<option value="MBA">MBA</option>
	                  			<option value="MCA">MCA</option>
                  			</select>
                  		</td>
                  		<th>Adhar Card No</th>
                  		<td><input type="text" name="adhar_card" data-type="adhaar-number" maxlength="12" class="form-control" required=""></td>
                  	</tr>
                  	<tr>
                  		<th>Image</th>
                  		<td><input type="file" name="photo" class="form-control" required=""></td>
                  		<th>Religion</th>
                  		<td><input type="text" name="religion" class="form-control" required=""></td>
                  	</tr>
                  	<tr>
                  		<th>Category</th>
                  		<td><select name="category" class="form-control">
                  			<option value="">-Select Category</option>
                  			<option value="GEN">GEN</option>
                  			<option value="OBC">OBC</option>
                  			<option value="SC/ST">SC/ST</option>
                  		</select></td>
                  		<th>Gender</th>
                  		<td><input type="radio" name="gender"  value="0">&nbsp;&nbsp;Male
                  			<input type="radio" name="gender" value="1">&nbsp;&nbsp;Female</td>
                  	</tr>
                  	<tr>
                  		<th>Father Name</th>
                  		<td><input type="text" name="fname" class="form-control" required=""></td>
                  		<th>Mother Name</th>
                  		<td><input type="text" name="mname" class="form-control" required=""></td>
                  	</tr>
                  	<tr>
                  		<th>If You Given Any Exam</th>
                  		<td ><input type="radio" name="estatus"  onclick="toggle();"  value="1">&nbsp;&nbsp;Yes
                  			<input type="radio" name="estatus"  checked="checked" id="estatus" value="0">&nbsp;&nbsp;No</td>
                  			<th>Exam Name</th>
                  		<td ><input type="text" name="ename" id="ename" class="form-control" style="display:none;"></td>
                  	</tr>
                  	<tr>
                  		<th>If  Any Disabilities</th>
                  		<td><input type="radio" name="disability" onclick="toggle1();" value="1">&nbsp;&nbsp;Yes
                  			<input type="radio" name="disability" checked="checked" value="0">&nbsp;&nbsp;No</td>
                  			<th>Disability Description</th>
                  		<td><input type="text" name="disDescription" id="disDescription" class="form-control"  style="display:none;"></td>
                  	</tr>
                  	

                  	<tr><th colspan="4">Permanent Address</th></tr>
                  	<tr>
                  		<th>Address</th>
                  		<td><textarea name="per_address" class="form-control" required=""></textarea></td>
                  		<th>City</th>
                  		<td><input type="text" name="per_city" class="form-control" ></td>
                  	</tr>

                  	<tr>
                  		<th>State</th>
                  		<td><input type="text" name="per_state" class="form-control" ></td>
                  		<th>Pincode</th>
                  		<td><input type="number" name="per_pincode" maxlength="6" class="form-control" required=""></td>
                  	</tr>
                  	<tr>
                  		<th>Country</th>
                  		<td><input type="text" class="form-control" name="per_country" required=""></td>
                  	</tr>
                        <tr><th colspan="4"><input type="checkbox" name="billingtoo" onclick="FillBilling(this.form)"></th></tr>
                  	<tr>
                  		<th colspan="4">Local Address</th>
                  	</tr>
                  	<tr>
                  		<th>Address</th>
                  		<td><textarea name="loc_address" class="form-control" required=""></textarea></td>
                  		<th>City</th>
                  		<td><input type="text" name="loc_city" class="form-control" ></td>
                  	</tr>
                  	<tr>
                  		<th>State</th>
                  		<td><input type="text" name="loc_state" class="form-control" ></td>
                  		<th>Pincode</th>
                  		<td><input type="number" name="loc_pincode" class="form-control" maxlength="6" required=""></td>
                  	</tr>
                  	<tr>
                  		<th>Country</th>
                  		<td><input type="text" class="form-control" name="loc_country" required=""></td>
                              <th>Password</th>
                              <td><input type="password" name="pwd" class="form-control" required=""></td>
                  	</tr>
                  	
                  	<tr>
                  		<td class="text-center"><input type="submit" name="branchSubmit" class="btn btn-md btn-primary" required="" value="Submit"></td>
                  		<td class="text-center"> <input type="reset" name="branchreset" class="btn btn-md btn-primary" required="" value="Reset"></td>
                  	</tr>
                  </table>        
					
               </div>
                </div>
            </div>
		</form>
	</div>
</div>
<!-- <script type="text/javascript">
      $('document').ready(function(){
             $("#estatus").change(function()
     {
      if($(this).val() == 0)
      {alert($(this).val());
       $("#ename").hide();
      }
      else
      {
       $("#ename").show();
      }
    }
      });
</script> -->
