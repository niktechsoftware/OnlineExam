<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <title>hello </title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="#">
  <meta name="keywords"
    content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
  <meta name="author" content="#">
  <!-- Favicon icon -->
  <link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
  <!-- Google font-->
  <link href="<?php echo base_url();?>assets/css/opensans.css" rel="stylesheet">
  <!-- Required Fremwork -->
  <link rel="stylesheet" type="text/css"
    href="<?php echo base_url();?>assets/bower_components/bootstrap/css/bootstrap.min.css">
  <!-- themify-icons line icon -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/themify-icons/themify-icons.css">
  <!-- ico font -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/icofont/css/icofont.css">
  <!-- feather Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/feather/css/feather.css">
  <!-- jpro forms css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/pages/j-pro/css/demo.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/pages/j-pro/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/pages/j-pro/css/j-pro-modern.css">
  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.css">
</head>

<body>

  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">

          <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="feather icon-menu"></i>
            </a>
            <a href="index.html">
              <img class="img-fluid" src="<?php echo base_url();?>assets/images/logo.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
              <i class="feather icon-more-horizontal"></i>
            </a>
          </div>

          <div class="navbar-container container-fluid">
            <ul class="nav-left">
              <li class="header-search">
                <div class="main-search morphsearch-search">
                  <div class="input-group">
                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                  </div>
                </div>
              </li>
              <li>
                <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                  data-cf-modified-170829b1a3f152d4925103c1-="">
                  <i class="feather icon-maximize full-screen"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">

            </ul>
          </div>
        </div>
      </nav>

      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

          <!-- <div class="pcoded-content">
            <div class="pcoded-inner-content"> -->

          <div class="main-body">
            <div class="page-wrapper">



              <div class="page-body">
                <div class="row">
                  <div class="col-sm-12">
                    <!-- Register your self card start -->
                    <div class="card" style="background-image: url(<?php echo base_url();?>assets/images/gallery/flat-bg.jpg); 
                    background-attachment: fixed;   
                      background-position: center;
                      background-repeat: no-repeat;
                      background-size: cover;
                      position: relative;">
                      <div class="card-header">
                        <h5>Register Here</h5>

                      </div>
                      <div class="card-block">
                        <div class="j-wrapper j-wrapper-640">
                          <form action="<?php echo base_url();?>index.php/customer/customer_value" method="post"
                            class="j-pro" novalidate="">
                            <div class="j-content">

                              <div>
                                <label class="j-label">Up Line Userame</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="joinerid">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="joinerid" name="joinerid">
                                  </div>
                                </div>
                              </div>

                              <div>
                                <label class="j-label">Name</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="usernm">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="name" name="usernm" onkeyup="namevalidation();">
                                  </div>
                                </div>
                              </div>

                              <div>
                                <label class="j-label"> Father Name</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="f_name">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="fname" name="f_name" onkeyup="fnameval();">
                                  </div>
                                </div>
                              </div>

                              <div class="j-unit">
                                <label class="j-label">Gender</label>
                                <select name="gender" require>
                                  <option value="" selected="">Choose Gender</option>
                                  <option value="1">Male</option>
                                  <option value="0">Female</option>
                                </select>
                                <i></i>
                                </label>
                              </div>
                              <div>
                                <label class="j-label"> Mobile Number</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="mobile">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="mobile" data-type="mobile" name="mobile">
                                  </div>
                                </div>
                              </div>


                              <div>
                                <div>
                                  <label class="j-label">Email</label>
                                </div>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="email">
                                      <i class="icofont icofont-envelope"></i>
                                    </label>
                                    <input type="email" id="email" name="email" require>
                                  </div>
                                </div>
                              </div>

                              <div>
                                <label class="j-label">Address</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="address">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="address" name="address" require>
                                  </div>
                                </div>
                              </div>

                              <?php $dt= $this->db->get("branch")->result();?>

                              <div class="j-unit">
                                <label class="j-label">District</label>
                                <select name="district" require>
                                  <option value="" selected="">Choose District</option>
                                  <?php foreach($dt as $row):  ?>
                                  <option value="<?php echo $row->id;?>"><?php echo $row->district;?></option>
                                  <?php endforeach ;?>
                                </select>
                                <i></i>
                                </label>
                              </div>


                              <div>
                                <label class="j-label">State</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="state">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="state" name="state"  >
                                  </div>
                                </div>
                              </div>

                              <div>
                                <label class="j-label">State Pin</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="pin">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="pin"  maxlength="6" data-type="pin" name="pin">
                                  </div>
                                </div>
                              </div>

                              <div>
                                <label class="j-label">Adhar Number</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="aadhar">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="aadhar" maxlength="12" data-type="adhar" name="aadhar">
                                  </div>
                                </div>
                              </div>

                              <div>
                                <label class="j-label">PAN Number</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="pan">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="pan"  maxlength="10" name="pan">
                                  </div>
                                </div>
                              </div>

                              <div>
                                <label class="j-label">Amount</label>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="amount">
                                      <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="amount" data-type="amount" name="amount">
                                  </div>
                                </div>
                              </div>

                              <div>
                                <div>
                                  <label class="j-label ">Password</label>
                                </div>
                                <div class="j-unit">
                                  <div class="j-input">
                                    <label class="j-icon-right" for="password">
                                      <i class="icofont icofont-lock"></i>
                                    </label>
                                    <input type="password" id="password" name="password">
                                  </div>
                                </div>
                              </div>

                              <div class="j-response"></div>

                            </div>

                            <div class="j-footer">
                              <button type="submit" class="btn btn-primary">Register</button>
                            </div>

                          </form>
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
  </div>
  <!-- Required Jquery -->
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/jquery/js/jquery.min.js"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/popper.js/js/popper.min.js"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>
  <!-- j-pro js -->
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/pages/j-pro/js/jquery.ui.min.js"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/pages/j-pro/js/jquery.j-pro.js"></script>
  <!-- jquery slimscroll js -->
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
  <!-- modernizr js -->
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/modernizr/js/modernizr.js"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/modernizr/js/css-scrollbars.js"></script>

  <!-- i18next.min.js -->
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/i18next/js/i18next.min.js"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
  </script>
  <script type="170829b1a3f152d4925103c1-text/javascript"
    src="<?php echo base_url();?>assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
  <!-- Custom js -->


  <script src="<?php echo base_url();?>assets/js/pcoded.min.js" type="170829b1a3f152d4925103c1-text/javascript">
  </script>
  <script src="<?php echo base_url();?>assets/js/vartical-layout.min.js"
    type="170829b1a3f152d4925103c1-text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.concat.min.js"
    type="170829b1a3f152d4925103c1-text/javascript"></script>
  <script type="170829b1a3f152d4925103c1-text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="<?php echo base_url();?>assets/js/google.js" type="170829b1a3f152d4925103c1-text/javascript">
  </script>
  <script type="170829b1a3f152d4925103c1-text/javascript">
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
  </script>
  <script src="<?php echo base_url();?>assets/js/rocket-loader.min.js" data-cf-settings="170829b1a3f152d4925103c1-|49"
    defer=""></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
      <script>
                           
                              function namevalidation() {
                                var text_value = document.getElementById("name").value;
                                value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z )]*/g, "");
                                document.getElementById("name").value=value;
                                 }

                                function fnameval() {
                                var text_value = document.getElementById("fname").value;
                                value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z )]*/g, "");
                                document.getElementById("fname").value=value;
                                 }
                                 function cityval() {
                                var text_value = document.getElementById("city").value;
                                value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z )]*/g, "");
                                document.getElementById("city").value=value;
                                 }
                                 jQuery(document).ready(function() {
                            $('[data-type="mobile"]').keyup(function() {
					                       var value = $(this).val();
                                 
					                       value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("");
					                       $(this).val(value);
				                  	});
                     $('[data-type="pin"]').keyup(function() {
                          var value = $(this).val();
                          value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("");
                          $(this).val(value);
				            	});
                      $('[data-type="adhar"]').keyup(function() {
                          var value = $(this).val();
                          value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
                          $(this).val(value);
				            	});
                      $('[data-type="amount"]').keyup(function() {
                          var value = $(this).val();
                          value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("");
                          $(this).val(value);
				            	});
      });
      </script>
</body>

</html>
