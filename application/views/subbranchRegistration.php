<div class="row">
	<div class="col-md-12">
		<h3><?php echo $subtitle;?></h3>
		<form method="post" action="<?php echo base_url()?>subbranchController/subbranchRegistration"  class="form-detail" enctype="multipart/form-data">
			 <div class="panel panel-calendar  exam_panel_body">
                <div class="panel-heading bg_info border-light">
                    <h5 class="panel-title text-center">Sub Branch Registration</h5>
                </div>
               <div class="panel-body">
               <div class="text-black text-large exam_panel">
                  <table class="table table-bordered">
                  	<tr>
                  		<th style=" padding-top: 20px;">Sub Branch Name</th>
                  		<td><input type="text" name="branch_name" class="form-control" required="" ></td>
                  	</tr>
                  	<tr>
                  		<th style=" padding-top: 20px;">Mobile No</th>
                  		<td><input type="number" name="mobile" class="form-control" required="" ></td>
                  	</tr>
                  	<tr>
                  		<th style=" padding-top: 20px;">Email Id</th>
                  		<td><input type="email" name="email" class="form-control" required="" ></td>
                  	</tr>
                  	<tr>
                  		<th style=" padding-top: 20px;">Branch Photo</th>
                  		<td><input type="file" name="photo" class="form-control" ></td>
                  	</tr>
                  	<tr>
                  		<th style=" padding-top: 20px;">Address</th>
                  		<td><textarea name="address" class="form-control" required=""></textarea></td>
                  	</tr>
                  	<tr>
                  		<th style=" padding-top: 20px;">City</th>
                  		<td><input type="text" name="branch_city" class="form-control" required="" ></td>
                  	</tr>
                  	<tr>
                  		<th style=" padding-top: 20px;">State</th>
                  		<td><input type="text" name="branch_state" class="form-control" required="" ></td>
                  	</tr>
                  	<tr>
                  		<th style=" padding-top: 20px;">Country</th>
                  		<td><input type="text" name="branch_country" class="form-control" required=""></td>
                  	</tr>
                  	<tr>
                  		<th style=" padding-top: 20px;"">Pincode</th>
                  		<td><input type="number" name="branch_pincode" class="form-control" required=""></td>
                  	</tr>
                  	<!-- <tr>
                  		<th style=" padding-top: 20px;">User Name</th>
                  		<td><input type="text" name="branch_username" class="form-control" required=""></td>
                  	</tr> -->
                  	<tr>
                  		<th style=" padding-top: 20px;">Password</th>
                  		<td><input type="password" name="branch_pwd" class="form-control" required=""></td>
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