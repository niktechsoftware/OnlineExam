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
						<th> <a href="<?php echo base_url(); ?>adminController/branchView/<?php echo $row->id;?>" ><?php echo $row->username;?></a></th>
						<th><?php echo $row->branch_name;?></th>
						<th><?php echo $row->mobile_no;?></th>
						<th><?php echo $row->email_id;?></th>
						<?php 		
							if($row->status == 0){ ?>
								<th><a href="" class="btn btn-sm btn-info" id="branchStatus<?php echo $i;?>" value="0"><i class="fa fa-trash-o"></i>Approve For Activation</a></th>
							<?php }
							else{?>
							<th><a href="#" class="btn btn-sm btn-success" id="branchStatus<?php echo $i;?>" value="1"><i class="fa fa-trash-o"></i>Approved</a></th>
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
	<?php for($j = 1; $j < $i; $j++){ ?>
			    $("#branchStatus<?php echo $j; ?>").click(function(){
		    		var examId = $('#branchStatus<?php echo $j; ?>').val();	
		    		
		    		alert(examId);
		  //   		var form_data = {
				// 			examId : examId,
				// 			examName : examName
				// 		};
				// $.ajax({
				// 	url: "<?php //echo site_url("examconfiguration/updateExam") ?>",
				// 	type: 'POST',
				// 	data: form_data,
				// 	success: function(msg){
				// 		$("#examAdd1").html(msg);
				// 	}
				// });
		        });
			<?php }?>
</script>