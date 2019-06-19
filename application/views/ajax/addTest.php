<?php
$i = 1;
if(isset($testListview)):
	//print_r($testListview);
?>
	<div class="text-white text-sm pull-left space10">
			<table class=" table-bordered table-hover table">
				<tr style="color:black;">
					<th>Exam Name</th>
					<th>Test Name </th>
					<th>Test Descripton</th>
					<th>Test Marks</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			<?php foreach ($testListview->result() as $row):
				$exam_id = $row->exam_head_id;
				$this->db->where('id',$exam_id);
				$exam = $this->db->get('exam_head')->result();
				//print_r($exam);
			 ?>

				<tr>
					<?php foreach($exam as $examm):?>
					<td>
						<lable style="color: black;"><?php echo $examm->exam_head;?></lable>

						<input type="hidden" id="testId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
					</td>
					<?php endforeach;?>
					<td>
						<input type="text" id="testnm<?php echo $i;?>" size="13" value="<?php echo $row->test_name;?>" onkeyup="this.value=this.value.toUpperCase();">
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
<script type="text/javascript">
	<?php for($j=1; $j<$i; $j++){ ?>
			$('#edittest<?php echo $j;?>').click(function(){
					var testId = $('#testId<?php echo $j;?>').val();
					var testnm = $('#testnm<?php echo $j;?>').val();
					var testDesc = $('#testDesc<?php echo $j;?>').val();
					var testMarks = $('#testMarks<?php echo $j;?>').val();
					alert(testId);
					alert(testnm);
					alert(testDesc);
					alert(testMarks);
					alert("your test is successfully updated");
		     		var form_data = {
							testId : testId,
							testnm : testName,
							testDesc : testDesc,
							testMarks : testMark
						};
				$.ajax({
					url: "<?php echo site_url("branchController/updateTest") ?>",
					type: 'POST',
					data: form_data,
					success: function(msg){
						$("#addTest1").html(msg);
					}
				});
			});
			$("#deleteTest<?php echo $j; ?>").click(function(){
		    		var testId = $('#testId<?php echo $j; ?>').val();
		    		$.post("<?php echo site_url('branchController/deleteTest') ?>", {testId : testId}, function(data){
		                $("#addTest1").html(data);
		    		})
		        }); 
			 // input.addEventListener("keyup", function () {
    //                       var x = document.getElementById("testnm<?php echo $j;?>");
    //                          x.value = x.value.toUpperCase();
                          
    //               });
		<?php } ?>
</script>
