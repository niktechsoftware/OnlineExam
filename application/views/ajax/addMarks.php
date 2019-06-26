
<?php
$i = 1;
//print_r($marksList);
if(isset($marksList)):
?>		
		<div class="row">
			<div class="col-md-12">
		    <table class="table table-borered table-striped">
		        <tr style="color:black;">
		        	<th style="width:50px;">Max Marks</th>
		            <th style="width:50px;">Negative Marks</th>
		            <th style="width:50px;">Cancellation Marks</th>
		            <th>Edit</th>
		            <th>Delete</th>
		       </tr>
		       <?php 
		            	foreach ($marksList->result() as $row):
		       ?>
		         <tr>
		         	<td>
		         		<input type="text" id="maxMark<?php echo $i;?>" value="<?php echo $row->max_marks;?>">
        			<input type="hidden" id="maxMarksId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
        			</td>
		             <td>
        			<input type="text" id="negMarks<?php echo $i;?>" size="13" value="<?php echo $row->negative_marks;?>" >
        			<input type="hidden" id="maxMarksId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
        			</td>
        			 <td>
        			<input type="text" id="canMarks<?php echo $i;?>" size="13" value="<?php echo $row->cancle_marks;?>" >
        			<input type="hidden" id="maxMarksId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
        			</td>
        			<td>
        			    <a href="#" class="btn btn-sm subject_btn" id="editMarks<?php echo $i;?>"><i class="fa fa-edit"></i> Edit</a>
        			</td>
        			<td>
        			    <a href="#" class="btn btn-sm subject_btn" id="deleteMarks<?php echo $i;?>"><i class="fa fa-trash-o"></i> Delete</a>
        			</td>
			</tr>
			<?php 	$i++;
	                endforeach;
	                ?>
			</table>
		</div>
		</div>
<?php
endif;
?>
<script>
	    <?php for($j = 1; $j < $i; $j++){ ?>
			    $("#editMarks<?php echo $j; ?>").click(function(){
		    		var marksId = $('#maxMarksId<?php echo $j; ?>').val();	
		    		var maxMarks = $('#maxMark<?php echo $j; ?>').val();
		    		var negMarks = $('#negMarks<?php echo $j;?>').val();
		    		var cancleMarks = $('#canMarks<?php echo $j;?>').val();
		    		// alert(marksId);
		    		// alert(maxMarks);
		    		// alert(negMarks);
		    		// alert(cancleMarks);
		    		alert("your Marks is  successfully updated");
		    		var form_data = {
							marksId : marksId,
							maxMarks : maxMarks,
							negMarks : negMarks,
							cancleMarks : cancleMarks
						};
				$.ajax({
					url: "<?php echo site_url("branchController/updateMarks") ?>",
					type: 'POST',
					data: form_data,
					success: function(msg){
						$("#maxMarks1").html(msg);
					}
				});
		        });
	
			    $("#deleteMarks<?php echo $j; ?>").click(function(){
		    	var marksId = $('#maxMarksId<?php echo $j; ?>').val();
		    		$.post("<?php echo site_url('branchController/deleteMarks') ?>", {marksId : marksId}, function(data){
		                $("#maxMarks1").html(data);
		                //alert(data);
		    		})
		        });
		           
                    <?php } ?>   
</script>