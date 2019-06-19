 <div class="page-body">
<?php
   $username=$this->session->userdata('username');
  //print_r($id);
?>
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
                   <a class="nav-link active" data-toggle="tab" href="#examadd" role="tab">Add Exam Head</a>
                   <div class="slide"></div>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" data-toggle="tab" href="#addtestPanel" role="tab">Add Test</a>
                   <div class="slide"></div>
                 </li>
                  <li class="nav-item">
                   <a class="nav-link" data-toggle="tab" href="#addsub" role="tab">Add Subject</a>
                   <div class="slide"></div>
                 </li>
               </ul>
               <!-- Tab panes -->
               <div class="tab-content card-block">
                 <div class="tab-pane active" id="examadd" role="tabpanel">
                   
                 <div class="row" style="padding-top: 20px;">
                   <div class="col-sm-6">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Add Exam Head</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-8">
                                  <span id="name" style="color:red;"></span>
                                   <input type="text" id="addExam"  onkeyup="this.value = this.value.toUpperCase();">
                                </div>
                                <div class="col-md-4">
                                  <a href="#" class="btn btn-sm btn-round btn-primary" id="addExamButton"><i class="ion-checkmark-round"></i>
                              Add Exam Head</a>
                                </div>
                              </div>
                            </div>
                            <div class="alert  txt_css"> Type a Exam Head name and press Add Exam Head Button.If Exam Head added
                              successfully then it show in right side panel where you can change the name and Delete it.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Exam List</h5>
                        </div>
                        <div class="panel-body" id="examAdd1">
                        </div>
                      </div>
                    </div>
                 </div>
                 </div>
<!---- test section start----->
                 <div class="tab-pane" id="addtestPanel" role="tabpanel">

                    <!---------->
                <div class="row" >
                        <div class="col-sm-6">
                          <div class="panel">
                            <div class="panel-heading bg_info">
                              <h6 class="panel-title ">Exam Head</h6>
                            </div>
                            <div class="panel-body">
                               <div class="form-group">
                                <?php 
                                $username=$this->session->userdata('username');
                                 $this->db->where('username' ,$username);
                                 $branch = $this->db->get('branch')->row();
                                 $this->db->where('branch_id',$branch->id);
                                   $view=  $this->db->get("exam_head")->result(); 
                                   ?>
                                   <select id="examListshow" class="form-control" required="">
                                      <option value="">Select Exam Head</option>
                                        <?php foreach($view as $row)
                                        { ?>
                                      <option value="<?php echo $row->id;?>"><?php echo $row->exam_head;?></option>
                                      <?php  }?>
                                  </select>
                                 </div>
                              </div>
                          </div>
                        </div>
                         <div class="col-sm-6">
                          
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Add Test Name</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-4"> Name</div>
                                <div class="col-md-8">
                                  <input type="text" id="addTest" onkeyup="this.value = this.value.toUpperCase();">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-4">Description</div>
                                <div class="col-md-8">
                                  <input type="text" id="descTest" onkeyup="this.value = this.value.toUpperCase();">
                                </div>
                              </div>
                            </div>
                             <div class="form-group">
                              <div class="row">
                                <div class="col-md-4">Marks</div>
                                <div class="col-md-8">
                                  <input type="number" id="marksTest" >
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12 text-center">
                                 <a href="#" class="btn btn-sm btn-round btn-primary" id="addTestButton"><i class="ion-checkmark-round"></i>
                              Add Test </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                         </div>
                       </div>
               
                    <!--------->
                    <div class="row exam_panel">
                  
                     <div class="col-sm-12">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">  Test Name List</h5>
                        </div>
                        <div class="panel-body" id="addTest1">
                         
                        </div>
                      </div>
                    </div>
                 </div>
                 </div>
                 <!---end add option section----->
                 <!----option value tab start--->
                 <div class="tab-pane" id="addsub" role="tabpanel">
                  <!----------->
                    <div class="row" >
                        <div class="col-sm-6">
                          <div class="panel">
                            <div class="panel-heading bg_info">
                              <h6 class="panel-title ">Exam Head</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                 <?php  $username=$this->session->userdata('username');
                                 $this->db->where('username' ,$username);
                                 $branch = $this->db->get('branch')->row();
                                 $this->db->where('branch_id',$branch->id);
                                   $view=  $this->db->get("exam_head")->result(); 
                                  // $view=  $this->db->get("exam_head")->result(); 
                                  ?>
                                   <select id="examListsubShow" class="form-control" required="">
                                      <option value="">Select Exam Head</option>
                                        <?php foreach($view as $row){ 
                                        ?>
                                          <option value="<?php echo $row->id;?>"><?php echo $row->exam_head;?></option>
                                         <?php  }?>
                                     </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="panel">
                            <div class="panel-heading bg_info">
                              <h6 class="panel-title">Test Name</h6>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <select  id="testListshow" class="form-control" name="testListshow" required="">

                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                       </div>
                     
                  <!---------->
                    <div class="row exam_panel">
                   <div class="col-sm-5">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Add Subject Name</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                           <div class="form-group">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Subject Name</label>
                              </div>
                              <div class="col-md-8">
                                <span id="name" style="color:red;"></span>
                                 <input type="text" id="addSubject" onkeyup="this.value = this.value.toUpperCase();">
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                             <div class="row">
                              <div class="col-md-4">
                                <label>Question No</label>
                              </div>
                              <div class="col-md-8">
                                <span id="name" style="color:red;"></span>
                                <input type="number" id="addQuestion" >
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-12">
                                 <a href="#" class="btn btn-sm btn-round btn-primary" id="addSubjectButton"><i class="ion-checkmark-round"></i>
                              Add Subject</a>
                              </div>
                            </div>
                          </div>
                             <div class="alert txt_css"> Type a <strong>Subject Name </strong>and <strong>Question No.</strong>  and press Add Subject Button.If Subject Name and Question No. added successfully then it show in right side panel where you can change the all detail and Delete it.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-7">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title"> Subject List</h5>
                        </div>
                        <div class="panel-body" id="addSubject1">
                          
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