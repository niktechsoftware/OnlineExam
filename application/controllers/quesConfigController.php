<?php
	class QuesConfigController extends CI_Controller{
		function updatePeriod(){
			
		$i=1;
		$num=$this->input->post("nop");
		?>
		<!----->
						<div class="text-black text-large exam_panel">
                           <div class="form-group">
                             <div class="row">
                              <div class="col-sm-6">
                                <h6>Number of option</h6>
                              </div>
                               <div class="col-sm-6">
                                 <select class="form-control" id="nop" name="nop" >
                                    <option value="-nop-">-NOP-</option>
                                    <option value="2">2</option>
                                    <option value="4">3</option>
                                    <option value="5">4</option>
                                    <option value="6">5</option>
                                   
                                  </select>
                               </div>
                             </div>
                           </div>
                          <div class="col-md-12" id="sectionList">
                          	<?php echo  $ques = $this->input->post("quesID");?>
                          </div>
                          
                          </div>
				<!----->
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
						<?php// echo  $ques;?>
		        		<?php while($num >= $i){ ?>
		        		<tbody>
		        			<tr>
		        				<td><?php echo $i;echo $ques; ?></td>
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
		<script type="text/javascript">
	 $(document).ready(function() {
	$("#nop").change(function(){
          var nop = $("#nop").val();
          //alert(nop);
           $.post("<?php echo base_url('quesConfigController/updatePeriod') ?>", {nop : nop},function(data){
                    $("#sectionList").html(data);
          }); 
        });
});
        ////
</script>
<?php 
	}
	
	function insertPeriod(){
	 $ques = $this->input->post("quesID");
		 $num = $this->input->post("num");	
		$this->load->model("branchmodel");
	 	for($i=1;$i<=$num;$i++)
		{ //print_r($ques);
			$data = array(
				"question_id" => $ques,
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
