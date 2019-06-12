<?php
$i = 1;
if(isset($examList)):
?>
		<div class="text-white text-sm pull-left space10 ">
		    <table class="table table-borered table-striped">
		        <tr style="color:black;">
		            <th>Exam Name</th>
		            <th>Edit</th>
		            <th>Delete</th>
		       </tr>
		       <?php 
		            	foreach ($examList->result() as $row):
		       ?>
		         <tr>
		             <td>
        			<input type="text" id="examValue<?php echo $i;?>" size="13" value="<?php echo $row->exam_head;?>" >
        			<input type="hidden" id="examId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
        			</td>
        			<td>
        			    <a href="#" class="btn btn-sm subject_btn" id="edit<?php echo $i;?>"><i class="fa fa-edit"></i> Edit</a>
        			</td>
        			<td>
        			    <a href="#" class="btn btn-sm subject_btn" id="delete<?php echo $i;?>"><i class="fa fa-trash-o"></i> Delete</a>
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
	    <?php for($j = 1; $j < $i; $j++){ ?>
			    $("#edit<?php echo $j; ?>").click(function(){
		    		var examId = $('#examId<?php echo $j; ?>').val();	
		    		var examName = $('#examValue<?php echo $j; ?>').val();
		    		alert("your exam is successfully updated");
		    		var form_data = {
							examId : examId,
							examName : examName
						};
				$.ajax({
					url: "<?php echo site_url("examconfiguration/updateExam") ?>",
					type: 'POST',
					data: form_data,
					success: function(msg){
						$("#examAdd1").html(msg);
					}
				});
		        });
	
			    $("#delete<?php echo $j; ?>").click(function(){
		    		var examId = $('#examId<?php echo $j; ?>').val();	
		    		//alert(streamName);
		    		$.post("<?php echo site_url('examconfiguration/deleteExam') ?>", {examId : examId}, function(data){
		                $("#examAdd1").html(data);
		                //alert(data);
		    		})
		        });
		           input.addEventListener("keyup", function () {
                          var x = document.getElementById("examValue<?php echo $j;?>");
                             x.value = x.value.toUpperCase();
                         
                  });
                    <?php } ?>   
</script>