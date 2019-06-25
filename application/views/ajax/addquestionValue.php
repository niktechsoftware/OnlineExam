<?php print_r($var1);exit();?>

 <div class="text-black text-large exam_panel">
                           <!--  <?php //foreach ()?> -->
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-8">
                                   <textarea type="text" id="addQuestion" onkeyup="this.value = this.value.toUpperCase();" placeholder="Enter Question" class="form-control"></textarea>
                                </div>
                                <div class="col-md-4">
                                   <a href="#" class="btn btn-sm btn-round btn-primary" id="addQuestionButton"><i class="ion-checkmark-round"></i>
                              Add Question</a>
                                </div>
                              </div>
                            </div><!-- <?php //} ?> -->
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