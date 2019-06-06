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
		       <?php foreach ($questionList->result() as $row):?>
		         <tr>
		             <td>
        			<input type="text" id="quesValue<?php echo $i;?>" size="13" value="<?php echo $row->question;?>" onkeyup="this.value = this.value.toUpperCase();" >
        			<input type="hidden" id="quesId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
        			</td>
        			<td>
        			    <a href="#" class="btn btn-sm subject_btn" id="editQuestion<?php echo $i;?>"><i class="fa fa-edit"></i> Edit</a>
        			</td>
        			<td>
        			    <a href="#" class="btn btn-sm subject_btn" id="deleteQuestion<?php echo $i;?>"><i class="fa fa-trash-o"></i> Delete</a>
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
			   $("#editQuestion<?php echo $j; ?>").click(function(){
		    		var quesId = $('#quesId<?php echo $j;?>').val();	
		    		var quesName = $('#quesValue<?php echo $j;?>').val();
		    		alert(quesId);
		    		alert(quesName);
		    		alert("your Question is successfully updated");
		    		var form_data = {
							quesId : quesId,
							quesName : quesName
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
	
			    $("#deleteQuestion<?php echo $j; ?>").click(function(){
		    		var quesId = $('#quesId<?php echo $j; ?>').val();	
		    		alert(quesId);
		    		$.post("<?php echo site_url('examconfiguration/deleteQuestion') ?>", {quesId : quesId}, function(data){
		                $("#questionAdd1").html(data);
		                //alert(data);
		    		})
		        });
                         input.addEventListener("keyup", function () {
                          var x = document.getElementById("quesValue<?php echo $j;?>");
                             x.value = x.value.toUpperCase();
                         
                  });
        <?php } ?>   
</script>