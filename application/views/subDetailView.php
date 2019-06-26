<div class="row">
	<div class="col-md-12">
      <?php  $id= $this->uri->segment(3);
                  $uname= $this->session->userdata('username');
                  //print_r($id);
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
                          <h5 class="panel-title">Branch Name</h5>
                        </div>
                        <div class="panel-body">
                          <div class="text-black text-large exam_panel">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                  <select name="branchName" id="branchName" class="form-control" >
                                    <option value="">-Select Branch-</option>
                                      <?php $row = $this->db->get('branch')->result();
                                          foreach($row as $row1){
                                      ?>
                                    <option value="<?php echo $row1->id;?>"><?php echo $row1->branch_name;?></option>
                                  <?php }?>
                                  </select>
                                </div>
                              </div>
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                    </div>
                  </div>
               </div>
             </div>
           </div>
         </div>
       </div>

               	