

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url();?>assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?php echo base_url();?>assets/js/plugins.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url();?>assets/js/scripts/form-layouts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 08:01:15 GMT -->
</html>

<script >
       function namevalidation() {
                                var text_value = document.getElementById("name").value;
                                value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z )]*/g, "");
                                document.getElementById("name").value=value;
                                 }


                           function quantity() {
                var text_value = document.getElementById("quantity").value;
                value = text_value.replace(/[^(0-9-.)]*/g, "");
                document.getElementById("quantity").value=value;
            }
                
                                     function mobilevalidation1()
                             {
                                 var text_value = document.getElementById("itemNo").value;
                                 if (!text_value.match(/[0-9]$/))
                                 {
                                     document.getElementById("mobile").innerHTML = "Invalid Item Number";
                                    document.getElementById("itemNo").focus();
                                     if(text_value=="")
                                     {
                                     document.getElementById("mobile").innerHTML = " ";
                                     } 
                                 }                       
                             } 
</script>