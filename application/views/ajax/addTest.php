<?php
$i = 1;
if(isset($testListview)):
?>
	<div class="text-white text-sm pull-left space10">
			<table class=" table-bordered table-hover table">
				<tr style="color:black;">
					<th>Test Name </th>
					<th>Test Descripton</th>
					<th>Test Marks</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			<?php foreach ($testListview->result() as $row): ?>
				<tr>
					<td>
						<input type="text" id="testnm<?php echo $i;?>" size="13" value="<?php echo $row->test_name;?>">
						<input type="hidden" id="testId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
					</td>
					<td>
						<input type="text" id="testDesc<?php echo $i;?>" size="13" value="<?php echo $row->test_description;?>" onkeyup="this.value=this.value.toUpperCase();">
						<input type="hidden" id="testId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
					</td>
					<td>
						<input type="number" id="testMarks<?php echo $i;?>" size="13" value="<?php echo $row->test_marks;?>">
						<input type="hidden" id="testId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
					</td>
					<td>
						<a href="#" class="btn btn-sm subject_btn" id="edittest<?php echo $i;?>"><i class="fa fa-edit"></i> Edit</a>
					</td>
					<td>
						<a href="#" class="btn btn-sm subject_btn" id="deleteTest<?php echo $i;?>"><i class="fa fa-trash-o"></i> Delete</a>
					</td>
				</tr>
		<?php
			$i++;
			endforeach;
			?>
			</table>
				</div>
			<?php
		endif;
		?>

<script>

	    <?php for($j = 1; $j < $i; $j++){ ?>

			    $("#edittest<?php echo $j;?>").click(function(){
		    		var testId = $('#testId<?php echo $j;?>').val();	
		     		var testName = $('#testnm<?php echo $j;?>').val();
		     		var testDesc = $('#testDesc<?php echo $j;?>').val();
		     		var testMark = $('#testMarks<?php echo $j;?>').val();
		     		alert("your test is successfully updated");
		     		var form_data = {
							testId : testId,
							testName : testName,
							testDesc : testDesc,
							testMark : testMark
						};
				$.ajax({
					url: "<?php echo site_url("examconfiguration/updateTest") ?>",
					type: 'POST',
					data: form_data,
					success: function(msg){
						$("#addTest1").html(msg);
					}
				});
		        });
			    $("#deleteTest<?php echo $j; ?>").click(function(){
		    		var testId = $('#testId<?php echo $j; ?>').val();
		    		$.post("<?php echo site_url('examconfiguration/deleteTest') ?>", {testId : testId}, function(data){
		                $("#addTest1").html(data);
		    		})
		        });  
                         input.addEventListener("keyup", function () {
                          var x = document.getElementById("testnm<?php echo $j;?>");
                             x.value = x.value.toUpperCase();
                          
                  });
                    <?php } ?>   
</script>