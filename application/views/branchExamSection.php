<div class="row">
	<div class="col-md-12">
		 
		<h3><?php echo $subtitle;?></h3>
		
			 <div class="panel panel-calendar  exam_panel_body">
                <div class="panel-heading bg_info border-light">
                    <h5 class="panel-title text-center">Exam Section</h5>
                </div>
               <div class="panel-body">
               <div class="text-black text-large exam_panel">
               		<div class="row">
               			<div class="col-md-12">
               				<div class="row">
               					<div class="col-md-4">
                          <div class="panel panel-calendar  exam_panel_body">
                            <div class="panel-heading bg_info border-light">
                                <h5 class="panel-title text-center">Exam Head</h5>
                            </div>
                           <div class="panel-body">
                           <div class="text-black text-large exam_panel"> 
                              <?php
                                $id=$this->session->userdata('id');
                               // print_r($id);
                                $this->db->where('branch_id',$id);
                                $row= $this->db->get('exam_head');
                              ?>
                              <select class="form-control" name="examHead">
                                <option value="">-select Exam Head-</option>
                                <?php
                                  foreach($row->result() as $r){
                                ?>
                                <option value="<?php echo $r->id;?>"><?php echo $r->exam_head;?></option>
                              <?php } ?>
                              </select>
                           </div>
                         </div>
                       </div>

                        </div>
               					<div class="col-md-4">
                      <div class="panel panel-calendar  exam_panel_body">
                            <div class="panel-heading bg_info border-light">
                                <h5 class="panel-title text-center">Exam Head</h5>
                            </div>
                           <div class="panel-body">
                           <div class="text-black text-large exam_panel"> 
                             
                           </div>
                         </div>
                       </div>    
                        </div>
               					<div class="col-md-4">
                          <div class="panel panel-calendar  exam_panel_body">
                            <div class="panel-heading bg_info border-light">
                                <h5 class="panel-title text-center">Exam Head</h5>
                            </div>
                           <div class="panel-body">
                           <div class="text-black text-large exam_panel"> 
                             
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