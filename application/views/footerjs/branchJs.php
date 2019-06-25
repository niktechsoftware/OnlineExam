
    <script data-cfasync="false" src="<?php echo base_url();?>assets/js/email-decode.min.js"></script>
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery/js/jquery.min.js"></script>
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/bower_components/popper.js/js/popper.min.js"></script>
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/bower_components/modernizr/js/modernizr.js"></script>
    <!-- Chart js -->
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/bower_components/chart.js/js/Chart.js"></script>
    <!-- amchart js -->
    <script src="<?php echo base_url();?>assets/pages/widget/amchart/amcharts.js" type="59edefb75604f457019ed4b6-text/javascript"></script>
    <script src="<?php echo base_url();?>assets/pages/widget/amchart/serial.js" type="59edefb75604f457019ed4b6-text/javascript"></script>
    <script src="<?php echo base_url();?>assets/pages/widget/amchart/light.js" type="59edefb75604f457019ed4b6-text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.concat.min.js" type="59edefb75604f457019ed4b6-text/javascript"></script>
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.js"></script>
    <script src="<?php echo base_url();?>assets/js/pcoded.min.js" type="59edefb75604f457019ed4b6-text/javascript"></script>
    <!-- custom js -->
    <script src="<?php echo base_url();?>assets/js/vartical-layout.min.js" type="59edefb75604f457019ed4b6-text/javascript"></script>
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/js/script.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="<?php echo base_url();?>assets/js/google.js" type="59edefb75604f457019ed4b6-text/javascript"></script>

<script type="59edefb75604f457019ed4b6-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url();?>assets/js/rocket-loader.min.js" data-cf-settings="59edefb75604f457019ed4b6-|49" defer=""></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.4.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script scr="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Mirrored from colorlib.com//polygon/adminty/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 05:29:56 GMT -->
<script>
 
    $(document).ready(function() {

         $('#branchView').DataTable();
         //branch Request
         $('#branchReq').DataTable();

    });
    $(document).ready(function(){

      /// aadhar card validation

   $('[data-type="adhaar-number"]').keyup(function() {
            var value = $(this).val();
            value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
            $(this).val(value);
          });
        $('[data-type="adhaar-number"]').on("change, blur", function() {
          var value = $(this).val();
          var maxLength = $(this).attr("maxLength");
          if (value.length != maxLength) {
            $(this).addClass("highlight-error");
          } else {
            $(this).removeClass("highlight-error");
          }
        });
        //
   
    });
  
  </script>
  <script type="text/javascript">

function FillBilling(f) {

  if(f.billingtoo.checked == true) {
    f.loc_address.value=f.per_address.value;
  f.per_city.value = f.loc_city.value;
  f.loc_state.value = f.per_state.value;
  f.loc_pincode.value = f.per_pincode.value;
  f.per_city.value = f.loc_city.value;
  }
}

function toggle() {
  var element=document.getElementById('ename');

  if ( element.style.display!='none' ) {
    element.style.display='none';
  } else {
    element.style.display='block';
  }
}


function toggle1() {
  var element=document.getElementById('disDescription');

  if ( element.style.display!='none' ) {
    element.style.display='none';
  } else {
    element.style.display='block';
  }
}
</script>

