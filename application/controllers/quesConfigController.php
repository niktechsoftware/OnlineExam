<?php
	class QuesConfigController extends CI_Controller{
		function updatePeriod(){
			echo  $ques = $this->input->post("quesID");
		$i=1;
		$num=$this->input->post("nop");
		?>
		<form method="post" action="<?php echo base_url(); ?>quesConfigController/insertPeriod">	
			<div class="panel">
				<div class="panel-heading bg-warning">
					<h4 class="panel-title">Create Option</h4>
				</div>
				<div class="panel-body" >
					<table class="table table-bordered table-hover ">
						<thead>
							<tr>
								<th>#</th>
								
								<th>Option Description</th>
							</tr>
						</thead>
		        		<?php while($num >= $i){ ?>
		        		<tbody>
		        			<tr>
		        				<td><?php echo $i; ?></td>
		            			<td>
		            				<table width="90%">
		                				<tr>
		                    				<td>
		                    					<textarea class="form-control"  name="option<?php echo $i; ?>"></textarea>
		                    					<input type="text" name="ques<?php echo $i;?>" value="<?php echo $ques;?>">
		                        			<!--  -->
	                            			</td>
		                      			</tr>
		                  			 </table>
		               			 </td>
		           				</tr>
		      	  		 </tbody>
		           		 <?php $i++; } ?>
		     		</table>
				</div>
			</div>
				<div class="row space15">
					<div class="col-md-5">
						<input type="hidden" name="num" value="<?php echo $this->input->post("nop"); ?>" />
							<button type="submit" class="btn btn-info">
							Click to Save <i class="fa fa-save"></i>
							</button>
					</div>										
				</div>
		</form>
<?php 
	}
	
	function insertPeriod(){
	 $ques = $this->input->post("quesID");
		 $num = $this->input->post("num");	
		$this->load->model("branchmodel");
	 	for($i=1;$i<=$num;$i++)
		{ //print_r($ques);
			$data = array(
				"question_id" => $this->input->post("quesID$i"),
				"option_no" => $i,
				"option_value" =>$this->input->post("option$i")
			);
			$var = $this->branchmodel->insertoption($data);
			
		}
		//exit();
		redirect("branchController/quesConfigur");
	}
	
	}
?>