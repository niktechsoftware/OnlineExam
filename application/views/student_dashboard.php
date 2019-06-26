 <script>           
.console-large div {
    margin: 22px;
    width: 150px;
    height: 140px !important;
    padding: 0px;
    cursor: pointer;
    text-align: center;
    float: left;
    background-color: #3399ff;
    border-radius: 16px!important;
    color: #fff;
    border: 2px solid;
}
</script>
                                 <?php $id=$this->session->userdata('id');
                                                   // $this->db->where('admin_id',$id);
                                                    $this->db->where('status',1);
                                                     $branch=   $this->db->get('branch')->result();
                                                    $bran=COUNT($branch);

                                                    ?>
                                       
                                                    <!-- <div class="console-large" title="My Tests - " style="background-color: rgb(51, 133, 255); border-color: rgb(51, 133, 255);"><a href="https://stportal.mahendras.org/Dashboard/MyTests.aspx"><img src="/images/icon_unknown_16px.gif" alt="My Tests" width="16px" height="16px" style="border-width: 0px; display: none;"><img src="/Portals/0/page-icons/MyTests.png" alt="My Tests" width="32px" height="32px" style="border-width: 0px;"></a><h3>My Tests</h3><div class="console-large"></div></div> -->

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-12">
                                                                <a href= "<?php echo base_url('studentController/select_test');?>"><h4 class="text-white text-center">Online<br>Test</h4></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-12">
                                                                <h4 class="text-white text-center">Results & Solutions</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-blue update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-12">
                                                                <h4 class="text-white text-center">Test Schedules</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-12">
                                                                <h4 class="text-white text-center">Payment & Dues</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                               <?php 

                                            //  $id=$this->session->userdata('id');
                                            //        // $this->db->where('admin_id',$id);
                                            //       $this->db->where('status',1);
                                            //          $std=   $this->db->get('stud_registration')->result();
                                            //         $stdcount=COUNT($std);


                                            ?>
                                    <!--        <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">Total Student</h4>
                                                                <h5 class="text-white m-b-0"><?php// echo $stdcount?></h5>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-2" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php// $id=$this->session->userdata('id');
                                                   // $this->db->where('admin_id',$id);
                                                   // $this->db->where('status',0);
                                                     //$branch=   $this->db->get('branch')->result();
                                                    //$bran=COUNT($branch);


                                            ?>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">Branch Request</h4>
                                                                <h5 class="text-white m-b-0"><?php //echo $bran;?></h5>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-3" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>

                                             <?php 

                                            //  $id=$this->session->userdata('id');
                                            //        // $this->db->where('admin_id',$id);
                                            //       $this->db->where('status',0);
                                            //          $std=   $this->db->get('stud_registration')->result();
                                            //         $stdcount=COUNT($std);


                                            ?>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-lite-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">Student Request</h4>
                                                                <h5 class="text-white m-b-0"><?php //echo $stdcount;?></h5>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-4" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <!-- task, page, download counter  end -->

                                            <!--  sale analytics start -->
                                            <!-- <div class="col-xl-9 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Sales Analytics</h5>
                                                        <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-trash-2 close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="sales-analytics" style="height: 265px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-12">
                                                <div class="card user-card2">
                                                    <div class="card-block text-center">
                                                        <h6 class="m-b-15">Project Risk</h6>
                                                        <div class="risk-rate">
                                                            <span><b>5</b></span>
                                                        </div>
                                                        <h6 class="m-b-10 m-t-10">Balanced</h6>
                                                        <a href="#!" class="text-c-yellow b-b-warning">Change Your Risk</a>
                                                        <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                                                            <div class="col m-t-15 b-r-default">
                                                                <h6 class="text-muted">Nr</h6>
                                                                <h6>AWS 2455</h6>
                                                            </div>
                                                            <div class="col m-t-15">
                                                                <h6 class="text-muted">Created</h6>
                                                                <h6>30th Sep</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-warning btn-block p-t-15 p-b-15">Download Overall Report</button>
                                                </div>
                                            </div>
                                             sale analytics end -->

                                            <!-- <div class="col-xl-8 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Application Sales</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-trash-2 close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover  table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            Application</th>
                                                                        <th>Sales</th>
                                                                        <th>Change</th>
                                                                        <th>Avg Price</th>
                                                                        <th>Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Able Pro</h6>
                                                                                <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>16,300</td>
                                                                        <td><canvas id="app-sale1" height="50" width="100"></canvas></td>
                                                                        <td>$53</td>
                                                                        <td class="text-c-blue">$15,652</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Photoshop</h6>
                                                                                <p class="text-muted m-b-0">Design Software</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>26,421</td>
                                                                        <td><canvas id="app-sale2" height="50" width="100"></canvas></td>
                                                                        <td>$35</td>
                                                                        <td class="text-c-blue">$18,785</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Guruable</h6>
                                                                                <p class="text-muted m-b-0">Best Admin Template</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,265</td>
                                                                        <td><canvas id="app-sale3" height="50" width="100"></canvas></td>
                                                                        <td>$98</td>
                                                                        <td class="text-c-blue">$9,652</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Flatable</h6>
                                                                                <p class="text-muted m-b-0">Admin App</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>10,652</td>
                                                                        <td><canvas id="app-sale4" height="50" width="100"></canvas></td>
                                                                        <td>$20</td>
                                                                        <td class="text-c-blue">$7,856</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-center">
                                                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-xl-4 col-md-12"> 
                                                <div class="card user-activity-card">
                                                    <div class="card-header">
                                                        <h5>User Activities</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <div class="u-img">
                                                                    <img src="<?php echo base_url();?>assets/images/breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
                                                                    <img src="<?php echo base_url();?>assets/images/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">John Deo</h6>
                                                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <div class="u-img">
                                                                    <img src="<?php echo base_url();?>assets/images/breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
                                                                    <img src="<?php echo base_url();?>assets/images/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">John Deo</h6>
                                                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <div class="u-img">
                                                                    <img src="<?php echo base_url();?>assets/images/breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
                                                                    <img src="<?php echo base_url();?>assets/images/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">John Deo</h6>
                                                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-5">
                                                            <div class="col-auto p-r-0">
                                                                <div class="u-img">
                                                                    <img src="<?php echo base_url();?>assets/images/breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
                                                                    <img src="<?php echo base_url();?>assets/images/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">John Deo</h6>
                                                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <!-- wather user -->
                                            <!-- <div class="col-xl-6 col-md-12">
                                                <div class="card latest-update-card">
                                                    <div class="card-header">
                                                        <h5>Latest Updates</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="latest-update-box">
                                                            <div class="row p-b-15">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">4 hrs ago</p>
                                                                    <i class="feather icon-briefcase bg-simple-c-pink update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>+ 5 New Products were added!</h6>
                                                                    <p class="text-muted m-b-0">Congratulations!</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-15">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">1 day ago</p>
                                                                    <i class="feather icon-check bg-simple-c-yellow  update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>Database backup completed!</h6>
                                                                    <p class="text-muted m-b-0">Download the <span class="text-c-blue">latest backup</span>.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-0">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">2 day ago</p>
                                                                    <i class="feather icon-facebook bg-simple-c-green update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>+1 Friend Requests</h6>
                                                                    <p class="text-muted m-b-10">This is great, keep it up!</p>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover m-b-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="b-none">
                                                                                        <a href="#!" class="align-middle">
                                                                                        <img src="<?php echo base_url();?>assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                        <div class="d-inline-block">
                                                                                            <h6>Jeny William</h6>
                                                                                            <p class="text-muted m-b-0">Graphic Designer</p>
                                                                                        </div>
                                                                                    </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="text-center">
                                                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="col-lg-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="<?php echo base_url();?>assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600"><?php echo $this->session->userdata("name");
                                                                 echo "<br>";echo $this->session->userdata("username");// echo "<br>"; echo $this->session->userdata("mobile");?></h6>
                                                                <p>Web Designer</p>
                                                                <i class="feather icon-edit m-t-10 f-16"><a style="color:white; font-size:16px;" href="<?php echo base_url('studentController/student_dashboard');?>">Edit</a></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sg-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6><?php echo $this->session->userdata("email");?></h6>
                                                                        <!-- <h6 class="text-muted f-w-400"><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="19737c7760597e74787075377a7674">[email&#160;protected]</a></h6> -->
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Phone</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $this->session->userdata("mobile");?></h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Recent</p>
                                                                        <h6 class="text-muted f-w-400">Guruable Admin</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Most Viewed</p>
                                                                        <h6 class="text-muted f-w-400">Able Pro Admin</h6>
                                                                    </div>
                                                                </div>
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- wather user -->

                                            <!-- social download  start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-blue">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Mail</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-pink">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">twitter</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card social-card bg-simple-c-green">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Instagram</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <!-- social download  end -->
                                            </div>
                                            </div>