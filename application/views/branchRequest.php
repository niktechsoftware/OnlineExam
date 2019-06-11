<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-12">
				<h4><?php echo $subtitle;?></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
                    <div class="card-header"></div>
                    <div class="card-block">
                     <div class="dt-responsive table-responsive">

				<table id="branchReq" class="table table-striped table-hover table-bordered nowrap">
					<thead>
						<tr>
						<th> No</th>
						<th>Username</th>
						<th>Branch Name</th>
						<th>Mobile No</th>
						<th>Email Id</th>
						<th>Status</th>
					</tr>
					</thead>

					<tbody>
						<?php $view = $this->db->get('branch')->result();
						$i=1;
					 foreach($view as $row){
					 	//print_r($row);
					 ?>
						<tr>
						<th><?php echo $i;?></th>
						<th><?php echo $row->username;?></th>
						<th><?php echo $row->branch_name;?></th>
						<th><?php echo $row->mobile_no;?></th>
						<th><?php echo $row->email_id;?></th>
						<th><input type="button" name="status" class="btn btn-info btn-sm" value="Inactive" ></th>
						
					</tr>
				<?php $i++;}?>
					</tbody>
					<tfoot>
						<tr>
						<th> No</th>
						<th>Username</th>
						<th>Branch Name</th>
						<th>Mobile No</th>
						<th>Email Id</th>
						<th>Status</th>
					</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
			</div>
		</div>
	</div>
</div>