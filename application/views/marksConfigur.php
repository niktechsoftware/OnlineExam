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
             	<div class="col-sm-6">
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
             </div>
         </div>
     </div>
     </div>
 </div>
</div>
</div>
