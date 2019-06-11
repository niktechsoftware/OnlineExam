
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com//polygon/adminty/default/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 05:33:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap/css/bootstrap.min.css">

    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" method="post" action="<?php echo base_url()?>login/studIndexReg" enctype="multipart/form-data">
                        <div class="text-center">
                            <img src=" <?php echo base_url();?>assets/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card" style="max-width: 750px;">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="name" class="form-control" required="" placeholder="Enter Your name">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="date" name="dob" class="form-control" required="" placeholder="Date Of Birth">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="email" name="email" class="form-control" required="" placeholder="Enter Your Email Address">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="number" name="mobile" class="form-control" required="" placeholder="Enter Your Mobile No.">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="fname" class="form-control" required="" placeholder="Enter Your Father Name">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="mname" class="form-control" required="" placeholder="Enter Your Mother Name">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <select name="education" class="form-control" required="">
                                                <option value="">-Select Qualification-</option>
                                                <option value="10th">10th</option>
                                                <option value="12th">12th</option>
                                                <option value="B.SC">B.SC</option>
                                                <option value="B.COM">B.COM</option>
                                                <option value="BCA">BCA</option>
                                                <option value="MBA">MBA</option>
                                                <option value="MCA">MCA</option>
                                            </select>
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="number" name="adhar" class="form-control" required="" placeholder="Enter Your Adhar Card No.">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>If You Given Any Exam</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-primary">
                                                    <input type="radio" name="examStatus" value="1">&nbsp;&nbsp;Yes
                                                     <input type="radio" name="examStatus" value="0">&nbsp;&nbsp;No
                                                    <span class="form-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="examDes" class="form-control" required="" placeholder="Enter Your Exam Description">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="file" name="photo" class="form-control" required="" placeholder="Upload Your Photo">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-primary">
                                                    <input type="radio" name="gender" value="1">&nbsp;&nbsp;Male
                                                     <input type="radio" name="gender" value="0">&nbsp;&nbsp;Female
                                                    <span class="form-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="religion" class="form-control" required="" placeholder="Enter Your Religion">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                           <select name="category" class="form-control">
                                                <option value="">-Select Category</option>
                                                <option value="GEN">GEN</option>
                                                <option value="OBC">OBC</option>
                                                <option value="SC/ST">SC/ST</option>
                                            </select>
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>If You Any Disablities</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-primary">
                                                    <input type="radio" name="disability" value="1">&nbsp;&nbsp;Yes
                                                     <input type="radio" name="disability" value="0">&nbsp;&nbsp;No
                                                    <span class="form-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="disabilityDes" class="form-control" required="" placeholder="Enter Your Disability Description">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <textarea name="per_address" class="form-control" required="" placeholder="Enter Your Address"></textarea>
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="per_city" class="form-control" required="" placeholder="Enter Your City">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="per_state" class="form-control" required="" placeholder="Enter Your State">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="per_country" class="form-control" required="" placeholder="Enter Your Country">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group form-primary">
                                    <input type="number" name="per_pincode" class="form-control" required="" placeholder=" Enter Your Pincode">
                                    <span class="form-bar"></span>
                                </div>
                                <hr>
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <textarea name="local_add" class="form-control" required="" placeholder="Enter Your Local Address"></textarea>
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="local_city" class="form-control" required="" placeholder="Enter Your Local City">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="local_state" class="form-control" required="" placeholder="Enter Your Local State">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="local_country" class="form-control" required="" placeholder="Enter Your Local Country">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group form-primary">
                                    <input type="number" name="local_pincode" class="form-control" required="" placeholder=" Enter Your Local Pincode">
                                    <span class="form-bar"></span>
                                </div>
                                <hr>
                                 <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="" placeholder=" Enter Your Password">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Send me the <a href="#!">Newsletter</a> weekly.</span>
                                            </label>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="index.html"><b class="f-w-600">Back to website</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?php echo base_url();?>assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery/js/jquery.min.js"></script>
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/popper.js/js/popper.min.js"></script>
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/modernizr/js/modernizr.js"></script>
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/i18next/js/i18next.min.js"></script>
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="1b5704857393a9a9940c9eda-text/javascript" src="<?php echo base_url();?>assets/js/common-pages.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="1b5704857393a9a9940c9eda-text/javascript"></script>
<script type="1b5704857393a9a9940c9eda-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url();?>assets/js/rocket-loader.min.js" data-cf-settings="1b5704857393a9a9940c9eda-|49" defer=""></script></body>


<!-- Mirrored from colorlib.com//polygon/adminty/default/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 05:33:28 GMT -->
</html>
