<div class="page-body">
	<?php
   $username=$this->session->userdata('username');
  //print_r($username);
   $this->db->where('username',$username);
   $branchId = $this->db->get('branch')->row();
   //print_r($branchId->id);
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
                 <div class="tab-pane active" id="addtestPanel" role="tabpanel">
                 	<!-------->
                 		<div class="row" style="padding-top: 20px;">
                   <div class="col-sm-6">
                   		 <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Add Exam Head</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                           	<select class="form-control" name="examName" id="examName"> 
                           		<?php 
                           			$this->db->where('branch_id',$branchId->id);                           			$exam = $this->db->get('exam_head')->result();
                           			//print_r($exam);
                           		?>
                           		<option>-select Exam Head-</option>
                           		<?php 
                           			foreach($exam as $examName){
                           				?>
                           				<option  value="<?php echo $examName->id;?>"><?php echo $examName->exam_head;?></option>
                           				<?php
                           			}
                           		?>
                           	</select>
                          </div>
                        </div>
                      </div>
                   </div>
                 <div class="col-sm-6">
                   		 <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Add Test </h5>
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
                                <div class="col-md-12">
                                 <a href="#" class="btn btn-sm btn-round btn-primary" id="addTestbutton"><i class="ion-checkmark-round"></i>
                              Add Test </a>
                                </div>
                              </div>
                            </div>
                           <div class="alert txt_css"> Type a<strong> Test Name ,Description </strong>and its <strong>Marks </strong>,and press Add Test Button.If All details are added
                              successfully then it show in right side panel where you can change the all details and also you can Delete it.
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>
               	</div>
                 	<!-------->
                 <div class="row" style="padding-top: 20px;">
                   
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
     		  </div>
             </div>
           </div>
          </div>  
     </div>
      </div>
  </div>     
</div>