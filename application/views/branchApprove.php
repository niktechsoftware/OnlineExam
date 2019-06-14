
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
						<?php 

$a=$this->session->userdata('username');
$this->db->where('username',$a);
$branchId=$this->db->get('branch')->row();
$this->db->where('branch_id',$branchId->id);
							$this->db->where('status',0);
						$view = $this->db->get('sub_branch')->result();
						$i=1;
					 foreach($view as $row){
					 	//print_r($row);
					 ?>
						<tr>
						<th><?php echo $i;?></th>
						<th> <a href="<?php echo base_url(); ?>subbranchController/branchView/<?php echo $row->id;?>" ><?php echo $row->username;?></a></th>
						<th><?php echo $row->branch_name;?></th>
						<th><?php echo $row->mobile_no;?></th>
						<th><?php echo $row->email_id;?></th>
						<?php 		
							if($row->status == 0){ ?>
								<th><a href="" class="btn btn-sm btn-info" id="<?php echo $row->id;?>" value="0" onclick="myFunction(this)"><i class="fa fa-trash-o"></i>Approve For Activation</a></th>
							<?php }
							else{?>
							<th><a href="#" class="btn btn-sm btn-success" id="<?php echo $row->id;?>" value="1" onclick="myFunction(this)"><i class="fa fa-trash-o"></i>Approved</a></th>
						<?php }
							?></th>
						
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
<script>
	
			
			function myFunction(stID) {
 	let status = stID.id;
 	//alert(status);
 $.ajax({
					url: "<?= base_url() ?>subbranchController/updatestatus",
					type: 'POST',
					data: {"status": status},
					success: function(data){
						$("#status").html(data);
					}
				});
}
</script>