
<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <!-- <div class="pcoded-navigatio-lavel">Navigation</div> -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">   <!--active pcoded-trigger-->
                                    <a href="<?php echo base_url('index.php/welcome/home');?>">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                         <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                       <!--  <li class="active">
                                            <a href="index.html">
                                                <span class="pcoded-mtext">Default</span>
                                            </a>
                                        </li> -->
                                        <!-- <li class="">
                                            <a href="dashboard-crm.html">
                                                <span class="pcoded-mtext">CRM</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-analytics.html">
                                                <span class="pcoded-mtext">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>
                                <?php if(($this->session->userdata("login_type")==1) || ($this->session->userdata("login_type")==2) ):?>
                
                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Configuration</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                        <a href="<?php echo base_url();?>examconfiguration/examConfigur">
                                                <span class="pcoded-mtext">Exam Configure</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url();?>examconfiguration/quesConfigur">
                                                <span class="pcoded-mtext">Question Configure</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Admin</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                        <a href="<?php echo base_url();?>examconfiguration/examConfigur">
                                                <span class="pcoded-mtext">Show Branch</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url();?>examconfiguration/quesConfigur">
                                                <span class="pcoded-mtext">Show Student</span>
                                            </a>
                                        </li>
                                         <li class="">
                                            <a href="<?php echo base_url();?>adminController/branchRequest">
                                                <span class="pcoded-mtext">Request Branch</span>
                                            </a>
                                        </li>
                                         <li class="">
                                            <a href="<?php echo base_url();?>adminController/studentRequest">
                                                <span class="pcoded-mtext">Request Student</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul><?php  endif;?>
                          <?php  if(($this->session->userdata("login_type")==1) || ($this->session->userdata("login_type")==2) ):?>
                
                            <ul class="pcoded-item pcoded-left-item">
                             <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext" >Branch</span>
                                    </a>
                                    <ul class="pcoded-submenu"><?php if(($this->session->userdata("login_type")==1)):?>
                                        <li class=" ">
                                            <a href="<?php echo base_url();?>branchController/branchIndex">
                                                <span class="pcoded-mtext" >Registration</span>
                                            </a>
                                        </li><?php  endif;?><?php if(($this->session->userdata("login_type")==2)):?>
                                        <li class=" ">
                                            <a href="<?php echo base_url();?>branchController/viewBranch">
                                                <span class="pcoded-mtext" >View Profile</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?php echo base_url();?>branchController/viewBranch">
                                                <span class="pcoded-mtext" >Student Request</span>
                                            </a>
                                        </li><?php  endif;?>
                               </ul>
                           </li><?php  endif;?>
                           </ul>
                         <!--  <div class="pcoded-navigatio-lavel">Student</div> -->
                         
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext" >Student</span>
                                    </a>
                                    <ul class="pcoded-submenu"><?php if(($this->session->userdata("login_type")==2)):?>
                                        <li class=" ">
                                            <a href="<?php echo base_url();?>studentController/studentIndex">
                                                <span class="pcoded-mtext" >Registration</span>
                                            </a>
                                        </li><?php  endif;?>
                                        <?php if(($this->session->userdata("login_type")==3)):?>

                                        <li class=" ">
                                            <a href="<?php echo base_url();?>studentController/studentprofile">
                                                <span class="pcoded-mtext" >View Profile</span>
                                            </a>
                                        </li><?php  endif;?>
                                     <?php  if(($this->session->userdata("login_type")==3) || ($this->session->userdata("login_type")==2) ):?>
                
                                        <li class=" ">
                                            <a href="<?php echo base_url();?>studentController/studentIndex">
                                                <span class="pcoded-mtext" >Exam Section</span>
                                            </a>
                                        </li><?php  endif;?>
                                        
                                    </ul>
                                </li>
                        </div>
                    </nav>
                    <!---This is Contend File --->
                    <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->