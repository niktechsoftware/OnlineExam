 <div class="page-body">

   <div class="row">
     <div class="col-sm-12">
       <!-- Material tab card start -->
       <div class="card">
         <div class="card-header">
           <h5 style="color:#8e24aa;"><?php echo $subtitle; ?></h5>
         </div>
       
         <div class="card-block">
           <!-- Row start -->
           <div class="row m-b-30">
             <div class="col-lg-12 col-xl-12">
               <!-- Nav tabs -->
               <ul class="nav nav-tabs md-tabs" role="tablist">
                 <li class="nav-item">
                   <a class="nav-link active" data-toggle="tab" href="#quesadd" role="tab">Add Question</a>
                   <div class="slide"></div>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" data-toggle="tab" href="#addoption" role="tab">Add Options</a>
                   <div class="slide"></div>
                 </li>
                  <li class="nav-item">
                   <a class="nav-link" data-toggle="tab" href="#addoptvalue" role="tab">Add Option Value</a>
                   <div class="slide"></div>
                 </li>
               </ul>
               <!-- Tab panes -->
               <div class="tab-content card-block">
                 <div class="tab-pane active" id="quesadd" role="tabpanel">
                    <div class="row" >
          <div class="col-sm-4">
            <div class="panel">
              <div class="panel-heading bg-primary">
                <h6 class="panel-title ">Exam Head</h6>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  
                  <?php
                      $username = $this->session->userdata('username');
                      $this->db->where('username',$username);
                      $branch = $this->db->get('branch')->row();
                      $this->db->where('branch_id',$branch->id);
                   $examShow = $this->db->get("exam_head")->result();
                   ?>
                  <select id="examQuesList" class="form-control">
                    <option value="">Select Exam Head</option>
                    <?php foreach($examShow as $view){?>
                      <option value="<?php echo $view->id;?>"><?php echo $view->exam_head;?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel">
              <div class="panel-heading bg-primary">
                <h6 class="panel-title">Test</h6>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <select id="testQuesList" class="form-control" name="testQuesList">
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel">
              <div class="panel-heading bg-primary">
                <h6 class="panel-title">Subject</h6>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <select id="subQuesList" class="form-control" name="subQuesList">
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
                 <div class="row" style="padding-top: 20px;">
                   <div class="col-sm-6">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title">Add /Upload Question</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
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
                            </div>
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
                        </div>
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Question List</h5>
                        </div>
                        <div class="panel-body" id="questionAdd1">
                        
                        </div>
                      </div>
                    </div>
                 </div>
                 </div>
<!---- option section start----->
                 <div class="tab-pane" id="addoption" role="tabpanel">

                    <!---------->
                <div class="row" >
                        <div class="col-sm-3">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title ">Exam Head</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="examOptList" class="form-control">
                                  <option>-Select Exam-</option>
                                 <?php foreach($examShow as $view){?>
                               <option value="<?php echo $view->id;?>"><?php echo $view->exam_head;?></option>
                                <?php } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title">Test</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="testListOpt" class="form-control">

                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title">Subject</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="subjectListOpt" class="form-control">
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                         <div class="col-sm-3">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title">Question</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="quesListopt" name="quesListopt" class="form-control">
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                       </div>
               
                    <!--------->
                    <div class="row exam_panel">
                   <div class="col-sm-7">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title">Add Option Number</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                           <div class="form-group">
                             <div class="row">
                              <div class="col-sm-6">
                                <h6>Number of option</h6>
                              </div>
                               <div class="col-sm-6">
                                 <select class="form-control" id="nop" name="nop" >
                                    <option value="-nop-">-NOP-</option>
                                    <option value="2">2</option>
                                    <option value="4">3</option>
                                    <option value="5">4</option>
                                    <option value="6">5</option>
                                   
                                  </select>
                               </div>
                             </div>
                           </div>
                          <div class="col-md-12" id="sectionList"></div>
                           <!--  <div class="alert alert-warning"> Type a Test name and press Add Test Name.If Test Name added
                              successfully then it show in right side panel where you can change the name and Delete it.
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-5">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title"> Test Name List</h5>
                        </div>
                        <div class="panel-body" id="addOption1">
                         
                        </div>
                      </div>
                    </div>
                 </div>
                 </div>
                 <!---end add option section----->
                 <!----option value tab start--->
                 <div class="tab-pane" id="addoptvalue" role="tabpanel">
                  <!----------->
                    <div class="row" >
                        <div class="col-sm-4">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title ">Exam Head</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="streamListshow" class="form-control">
                                  <option value="">Select Exam Head</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title">Test</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="sectionshow" class="form-control">

                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title">Subject</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="classshow" class="form-control">
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                       </div>
                       <div class="row">
                         <div class="col-sm-6">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title">Question</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="classshow" class="form-control">
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title">Option</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="classshow" class="form-control">
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                       </div>
                  <!---------->
                    <div class="row exam_panel">
                   <div class="col-sm-6">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title">Add Subject Name</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                            <span id="name" style="color:red;"></span>
                            <input type="text" id="addStream" onkeyup="myFunction()">
                            <a href="#" class="btn btn-sm btn-round btn-primary" id="addStreamButton"><i class="ion-checkmark-round"></i>
                              Add Subject</a><!--<br--><br><br>
                            <div class="alert alert-warning"> Type a subject  and press Add Subject.If Subject added successfully then it show in right side panel where you can change the name and Delete it.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title"> Subject List</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                            <span id="name" style="color:red;"></span>
                            <input type="text" id="addStream" onkeyup="myFunction()">
                            <a href="#" class="btn btn-sm btn-round btn-primary" id="addStreamButton"><i class="ion-checkmark-round"></i>
                              Edit</a><!--<br-->&nbsp;&nbsp;<a href="#" class="btn btn-sm btn-round btn-primary" id="addStreamButton"><i class="ion-checkmark-round"></i>
                              Delete</a><br><br>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
                 </div>
                 <!---- option value tab end ---->
               </div>
             </div>
           </div>

         </div>
         <!-- Row end -->


         <!-- Row end -->
       </div>
     </div>
     <!-- Material tab card end -->
   </div>
 </div>