
 <div class="text-black text-large exam_panel">
                            <table class="table table-bordered" id="quesValuee">
                              <thead>
                                <tr>
                                  <th>Subject Name</th>
                                  <th>Question No</th>
                                  <th>Question Description</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php 
                                  foreach($var1 as $var){
                                    for($i=1; $i<=$var->subject_ques_no;$i++){?>
                                <tr>
                                  <th><?php echo $var->subject_name;?>
                                     <input type="hidden" name="subject_id" id="subject_id<?php echo $i;?>" value="<?php echo $var->id;?>">
                                  </th>
                                  <th><?php echo $i;?>
                                     <input type="hidden" name="ques_no" id="ques_no<?php echo $i;?>" value="<?php echo $i;?>">
                                  </th>
                                  <th><textarea type="text" id="addQuestion<?php echo $i;?>" onkeyup="this.value = this.value.toUpperCase();" placeholder="Enter Question" class="form-control"></textarea></th>
                                  <th><button class="btn btn-sm btn-round btn-primary" id="addQuesButton"><i class="ion-checkmark-round"></i>
                              Add Question</button></th>

                              <script type="text/javascript">
                                // start add Question code
                                $('#addQuesButton1').click(function(){
                                  var subjectId = $('#subject_id1').val();
                                  alert("hiii");
                                });
                                 </script> 
                                </tr>
                              <?php } }?>
                              </tbody>
                              <tfoot>
                                <th>Subject Name</th>
                                  <th>Question No</th>
                                  <th>Question Description</th>
                                  <th>Action</th>
                              </tfoot>
                            </table>
                            <form enctype="multipart/form-data" action="/upload/image" method="post">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-8">
                                   <input type="file" name="fileUpload" id="image_file">
                                </div>
                                <div class="col-md-4">
                                   <a href="#" class="btn btn-sm btn-round btn-primary" id="uploadQuesButton"><i class="ion-checkmark-round"></i>
                              Upload Question</a>
                                </div>
                              </div>
                            </div>
                          </form>
                            <div class="alert alert-warning"> Type a <strong>Question </strong> and press Add Question Button.If Question added
                              successfully then it show in right side panel where you can Edit the question and Delete it.<p>Also you can upload document of Questions.</p>
                            </div>
                          </div>
                       