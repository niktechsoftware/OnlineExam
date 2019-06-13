<?php
$i = 1;
if(isset($questionList)):
?>
		<div class="text-white text-sm pull-left space10 ">
		    <table class="table table-borered table-striped">
		        <tr style="color:black;">
		            <th>Question</th>
		            <th>Edit</th>
		            <th>Delete</th>
		       </tr>
		       <?php 
		            	foreach ($questionList->result() as $row):
		       ?>
		         <tr>
		              <td>
        			<textarea type="text" id="queValue<?php echo $i;?>" size="13"  onkeyup="this.value = this.value.toUpperCase();" ><?php echo $row->question;?></textarea>
        			<input type="hidden" id="queId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
        			</td>
        			<td>
        			    <a href="#" class="btn btn-sm subject_btn" id="editQues<?php echo $i;?>"><i class="fa fa-edit"></i> Edit</a>
        			</td>
        			<td>
        			    <a href="#" class="btn btn-sm subject_btn" id="deleteQues<?php echo $i;?>"><i class="fa fa-trash-o"></i> Delete</a>
        			</td>
			</tr>
			<?php 	$i++;
	                endforeach;
	                ?>
			</table>
		</div>
<?php
endif;
?>
<script>
	    <?php for($j=1; $j<$i;$j++){?>
	    	$('#editQues<?php echo $j;?>').click(function(){
	    		var quesId = $('#queId<?php echo $j;?>').val();
	    		var quesnm = $('#queValue<?php echo $j;?>').val();
	    		
	    		alert("your Question is successfully updated");
		    		var form_data = {
							quesId : quesId,
							quesnm : quesnm
						};
				$.ajax({
					url: "<?php echo site_url("examconfiguration/updateQuestion") ?>",
					type: 'POST',
					data: form_data,
					success: function(msg){
						$("#questionAdd1").html(msg);
					}
				});
	    	});
	    	$('#deleteQues<?php echo $j;?>').click(function(){
	    		var quesId = $('#queId<?php echo $j;?>').val();
	    		
	    			$.post("<?php echo site_url('examconfiguration/deleteQuestion') ?>", {quesId : quesId}, function(data){
		                $("#questionAdd1").html(data);
		                //alert(data);
		    		})
	    	})
	    <?php }?>
</script>