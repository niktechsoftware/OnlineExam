    <!-----> <?php //print_r($var1);?>
                        <div class="text-black text-large exam_panel">
                           <div class="form-group">
                             <div class="row">
                                <div class="col-md-12">
                                  <p style="color: red;"><strong>Note :</strong> Option No should be in alphabetic just like  A, B.. etc.</p>
                                  <!-- <form method="post" action="<?php echo base_url()?>branchController/addQuesOptionValue"  class="form-detail" > -->
                                 <table class="table table-bordered">
                                   <thead>
                                     <tr>
                                       <th>S No.</th>
                                       <th>Question Id</th>
                                       <th>Option No.</th>
                                       <th width="500px;">Option Description</th>
                                       <th>Action</th>
                                     </tr>
                                  </thead>
                                  <tbody>
                                    <?php for($i=1; $i<=5;$i++){?>
                                    <tr>
                                       <th><?php echo $i;?>.</th>
                                       <th ><?php echo $var1->id;?>
                                         <input type="hidden" name="ques_id1" id="ques_id<?php echo $i;?>" value="<?php echo $var1->id;?>">
                                       </th>
                                       <th>A
                                        <input type="hidden" name="option1" id="option<?php echo $i;?>" value="A"></th>
                                       <th><textarea  type="text" class="form-control" name="optDesc1" id="optDesc<?php echo $i;?>" placeholder="Enter Option Description"></textarea></th>
                                       <th><button class="btn btn-primary" name="add<?php echo $i;?>" id="add<?php echo $i;?>">Add</button></th>
                                        <script type="text/javascript">
                                            $('#add<?php echo $i;?>').click(function(){
                                              var quesID = $('#ques_id<?php echo $i;?>').val();
                                              var option = $('#option<?php echo $i;?>').val();
                                              var optionDesc = $('#optDesc<?php echo $i;?>').val();
                                              alert(quesID);
                                              alert(option);
                                              alert(optionDesc);
                                             var form_data = {
                                                        quesID : quesID,
                                                        option : option,
                                                        optionDesc : optionDesc
                                                      };
                                                  $.ajax({
                                                    url: "<?php echo site_url("branchController/addQuesOptionValue") ?>",
                                                    type: 'POST',
                                                    data: form_data,
                                                    success: function(data){
                                                      $("#add<?php echo $i;?>").html(data);
                                                    }
                                                  });

                                            });
                                          </script>
                                    </tr><?php } ?>
                                   
                                    
                                  </tbody>
                                 </table>
                              
                                </div>
                             </div>
                           </div>
                          
                          </div>
                           <!----->

