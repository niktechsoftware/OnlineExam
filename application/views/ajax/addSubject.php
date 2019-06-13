<?php
$i = 1;
if(isset($subjectListView)):
?>
		<div class="text-white text-sm pull-left space10">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-hover" style="color: black;">
						<thead>
							<th>Subject Name</th>
							<th>Ques No</th>
							<th>Edit</th>
							<th>Delete</th>
						</thead>
						<?php foreach ($subjectListView->result() as $row):?>
						<tbody>
							<td>
								<input type="text" id="subValue<?php echo $i;?>" size="13" value="<?php echo $row->subject_name;?>">
								<input type="hidden" id="subjId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
							</td>
							<td>
								<input type="number" id="subjectQuestion<?php echo $i;?>" size="13" value="<?php echo $row->subject_ques_no;?>" >
								<input type="hidden" id="subjId<?php echo $i;?>" size="13" value="<?php echo $row->id; ?>">
							</td>
							<td>
								<a href="" class="btn btn-sm subject_btn" id="editSubject<?php echo $i;?>"><i class="fa fa-edit"></i> Edit</a>
							</td>
							<td>
								<a href="" class="btn btn-sm subject_btn" id="deleteSubject<?php echo $i;?>"><i class="fa fa-trash-o"></i> Delete</a>
							</td>
						</tbody>
						<?php 
							$i++;
							endforeach;?>
					</table>
				</div>
			</div>
		</div>
<?php
endif;
?>
<script>
	    <?php  for($j = 1; $j < $i; $j++){?>
			    $("#editSubject<?php echo $j; ?>").click(function(){
			    	var subId = $('#subjId<?php echo $j;?>').val();
		    		var subName = $('#subValue<?php echo $j;?>').val();
		     		var questionNo = $('#subjectQuestion<?php echo $j;?>').val();
		  			
		  	 		alert("your Subject is successfully updated");
		     		var form_data = {
				 			subId : subId,
				 			subName : subName,
				 			questionNo : questionNo
				 		};
				 $.ajax({
				 	url: "<?php echo site_url("examconfiguration/updateSubject") ?>",
				 	type: 'POST',
				 	data: form_data,
				 	success: function(msg){
				 		$("#addSubject1").html(msg);
				 	}
				 });
		        });
			    $("#deleteSubject<?php echo $j; ?>").click(function(){
		    		var subId = $('#subjId<?php echo $j; ?>').val();
		    		
		    		$.post("<?php echo site_url('examconfiguration/deleteSubject') ?>", {subId : subId}, function(data){
		                $("#addSubject1").html(data);
		                //alert(data);
		    		})
		        });
	                 var input = document.getElementById("subValue<?php echo $j;?>");
                         input.addEventListener("keyup", function () {
                         var text_value = document.getElementById("subValue<?php echo $j;?>").value;
                                    if (!text_value.match(/^[A-Za-z]+$/)) {
                                        document.getElementById("name2").innerHTML = "Only Alphabets Allow";
                                         $('#edit<?php echo $j;?>').attr('disabled', 'disabled');
                                           $(document).on('click', 'a', function(e) {
                                          if ($(this).attr('disabled') == 'disabled') {
                                             e.preventDefault();
                                                }
                                                window.location.reload();
                                            });
                                        document.getElementById("subValue<?php echo $j;?>").focus();
                                        if (text_value == "") {
                                            document.getElementById("name2").innerHTML = " ";
                                             window.location.reload();
                                            document.getElementById("subValue<?php echo $j;?>").focus();
                                        }
                                    }
                         });
                         input.addEventListener("keyup", function () {
                          var x = document.getElementById("subValue<?php echo $j;?>");
                             x.value = x.value.toUpperCase();
                       

                  });
                    <?php } ?>   
</script>