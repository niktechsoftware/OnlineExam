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
                   <a class="nav-link" data-toggle="tab" href="#addmaxMarks" role="tab">Add Max Marks</a>
                   <div class="slide"></div>
                 </li>
               </ul>
               <!-- Tab panes -->
               <div class="tab-content card-block">
                 <div class="tab-pane active" id="quesadd" role="tabpanel">
                    <div class="row" >
          <div class="col-sm-3">
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
          <div class="col-sm-3">
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
          <div class="col-sm-3">
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
          <div class="col-sm-3">
            <div class="panel">
              <div class="panel-heading bg-primary">
                <h6 class="panel-title">Question No</h6>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <select id="subQuesNoList" class="form-control" name="subQuesNoList" >
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
                 <div class="row" style="padding-top: 20px;">
                   <div class="col-sm-7">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title">Add /Upload Question</h5>
                        </div>
                        <div class="panel-body" id="questionValue">
                          
                        </div>
                      </div>
                    </div>
                   <div class="col-sm-5">
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
                              <h6 class="panel-title">Question No.</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="quesListopt" name="quesListopt"  class="form-control">
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                       </div>
               
                    <!--------->
                    <div class="row exam_panel">
                   <div class="col-sm-12">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title">Add Option Number</h5>
                        </div>
                        <div class="panel-body" id="quesOption">
                        
                        </div>
                      </div>
                    </div>
                     <!-- <div class="col-sm-5">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title"> Test Name List</h5>
                        </div>
                        <div class="panel-body" id="addOption1">
                         
                        </div>
                      </div>
                    </div> -->
                 </div>
                 </div>
                 <!---end add option section----->
                 <!----option value tab start--->
                 <div class="tab-pane" id="addmaxMarks" role="tabpanel">
                         <!---------->
                <div class="row" >
                        <div class="col-sm-4">
                          <div class="panel">
                            <div class="panel-heading bg-primary">
                              <h6 class="panel-title ">Exam Head</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select id="examMarksList" class="form-control">
                                  <option>-Select Exam-</option>
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
                                <select id="testListMarks" class="form-control">

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
                                <select id="subjectListMarks" class="form-control">
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                       </div>
               
                    <!--------->
                    <div class="row exam_panel">
                   <div class="col-sm-5">
                       <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                            <h5 class="panel-title">Add Marks</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel" style="padding: 10px;
">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                  <h6 >Max Marks</h6>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                  <input type="number" name="maxMarks" class="form-control" id="maxMarks">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                 <h6>Negative Marks</h6>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-5">
                                &nbsp;&nbsp;<input type="radio" name="nev_status" id="nev_status" value="1">Yes&nbsp;
                                 <input type="radio" name="nev_status" id="nev_status" value="0">No
                                </div>
                                <div class="col-md-7">
                                 <input type="number" name="negMarks" class="form-control" id="negMarks">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                <h6>Cancellation Marks</h6>
                                </div>
                              </div>
                            </div>
                           <div class="form-group">
                              <div class="row">
                                <div class="col-md-5">
                                 &nbsp;&nbsp; <input type="radio" name="cance_status" id="cance_status" value="1">Yes&nbsp;
                                 <input type="radio" name="cance_status" id="cance_status" value="0">No
                                </div>
                                <div class="col-md-7">
                                 <input type="number" name="canceMarks" id="canceMarks" class="form-control">
                                </div>
                              </div>
                            </div>
                             <div class="form-group">
                              <div class="row">
                                <div class="col-md-12 text-center">
                                  <a href="#" class="btn btn-sm btn-round btn-primary" id="addMaxMarksButton"><i class="ion-checkmark-round"></i>
                                    Add Max Marks</a>
                                </div>
                              </div>
                            </div>
                            <div class="alert alert-warning"> Type a Max Marks,Negative Marks and Cancellation Marks if you want to give  and press Add Max Marks Button.If Marks  added successfully then it show in right side panel where you can change the Marks and Delete it.
                            </div>
                          </div>
                        </div>
                     </div>
                    </div>
                     <div class="col-sm-7">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg-info border-light">
                          <h5 class="panel-title"> Marks List </h5>
                        </div>
                        <div class="panel-body" id="maxMarks1">
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