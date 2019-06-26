<div class="row">
	<div class="col-md-12">
      <?php   $uname= $this->session->userdata('username');
      $uid = $this->session->userdata('id');
      $this->db->where('branch_id',$uid);
      $examhead = $this->db->get('exam_head')->result();
                 // print_r($examhead );
                 // print_r($uname);?>
		<h3><?php echo $subtitle;?></h3>
		
			 <div class="panel panel-calendar  exam_panel_body">
                <div class="panel-heading bg_info border-light">
                    <h5 class="panel-title text-center">Subject Detail</h5>
                </div>
               <div class="panel-body">
               <div class="text-black text-large exam_panel">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Test Name</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                  <select name="testName" id="testName" class="form-control" >
                                    <option value="">-Select Test Name-</option>

                                      <?php
                                        foreach ($examhead as $exam) {
                                       $examID=$exam->id;
                                        $this->db->where('exam_head_id',$examID);
                                      $row = $this->db->get('test_name')->result();
                                          foreach($row as $row1){
                                      ?>
                                    <option value="<?php echo $row1->id;?>"><?php echo $row1->test_name;?></option>
                                  <?php }}?>
                                  </select>
                                </div>
                              </div>
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-calendar  exam_panel_body">
                        <div class="panel-heading bg_info border-light">
                          <h5 class="panel-title">Subject Name</h5>
                        </div>
                        <div class="panel-body" id="subDetailID">
                          
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
             </div>
           </div>
         </div>
       </div>

               	