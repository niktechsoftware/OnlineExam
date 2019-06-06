    <!-- Required Jquery -->
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/jquery/js/jquery.min.js"></script>
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/popper.js/js/popper.min.js"></script>
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/modernizr/js/modernizr.js"></script>
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/i18next/js/i18next.min.js"></script>
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="ce147e44f513e2d53eae8579-text/javascript"
      src="<?php echo base_url();?>assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/pcoded.min.js" type="ce147e44f513e2d53eae8579-text/javascript">
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.concat.min.js"
      type="ce147e44f513e2d53eae8579-text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/vartical-layout.min.js"
      type="ce147e44f513e2d53eae8579-text/javascript"></script>
    <!-- Custom js -->
    <script type="ce147e44f513e2d53eae8579-text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="<?php echo base_url();?>assets/js/google.js" type="ce147e44f513e2d53eae8579-text/javascript">
    </script>
    <script type="ce147e44f513e2d53eae8579-text/javascript">
window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
    </script>
    <script src="<?php echo base_url();?>assets/js/rocket-loader.min.js" data-cf-settings="ce147e44f513e2d53eae8579-|49"
      defer=""></script>

    <script>
jQuery(document).ready(function() {


  $("#validId").hide();
  $("#categoryname").hide();
  $("#sub_categoryname").hide();
  $("#extraqunatity").hide();
  $("#updatequantity").hide();
  $("#hsn").change(function() {


    var cat = $("#hsn").val();
    //	alert(cat);
    $.post("<?php echo site_url("product/checkp_code") ?>", {
      cat: cat
    }, function(data) {
      var d = jQuery.parseJSON(data);
      //alert(data);
      $("#validId").show();

      $("#validId").html(d.msg);
      // $("#hsn").val(d.hsn);
      $("#cname").val(d.cname);
      $("#name").val(d.name);
      $("#quantity").val(d.quantity);
      $("#sno").val(d.sno);
      $("#scname").val(d.scname);
      $("#categoryname1").val(d.cat);
      $("#sub_categoryname1").val(d.subcat);
      $("#size").val(d.size);
      $("#price").val(d.price);
      if (d.quantity > 0) {
        $("#extraqunatity").show();
        $("#cate").hide();
        $("#sub_category1").hide();
        $("#categoryname").show();
        $("#sub_categoryname").show();
        $("#file1").hide();
        $("#file2").hide();
        $("#file3").hide();
        $("#file4").hide();
        $("#productadd").hide();
        $("#updatequantity").show();

      }


    });

  });

  $("#extraqunatity1").change(function() {
    var oldQt = Number($("#quantity").val());
    var newQt = Number($("#extraqunatity1").val());
    var add = oldQt + newQt;
    $("#quantity").val(add);

  });



  $("#updatequantity").click(function() {

    var hsn = $("#hsn").val();
    var Qt = ($("#quantity").val());
    alert(hsn + Qt);
    $.post("<?php echo site_url('product/updatequantity')?>", {
      hsn: hsn,
      Qt: Qt
    }, function(data) {
      $("#updatequantity").html(data);
      alert("quantity update successfully");
      window.location.reload();

    });


  });




  $("#textArea1").keyup(function() {
    var totalc = $("#textArea1").val();
    // alert(totalc);
    $.post("<?php echo site_url('sms/countChar1') ?>", {
      totalc: totalc
    }, function(data) {
      $("#totalCharacter1").val(data);
      // alert(data);
    });
  });

  $("#textArea2").keyup(function() {
    var totalc = $("#textArea2").val();
    // alert(totalc);
    $.post("<?php echo site_url('sms/countChar2') ?>", {
      totalc: totalc
    }, function(data) {
      $("#totalCharacter2").val(data);
      // alert(data);
    });
  });

  $("#textArea3").keyup(function() {
    var totalc = $("#textArea3").val();
    // alert(totalc);
    $.post("<?php echo site_url('sms/countChar3') ?>", {
      totalc: totalc
    }, function(data) {
      $("#totalCharacter3").val(data);
      // alert(data);
    });
  });

  $("#textArea4").keyup(function() {
    var totalc = $("#textArea4").val();

    $.post("<?php echo site_url('sms/countChar4') ?>", {
      totalc: totalc
    }, function(data) {
      $("#totalCharacter4").val(data);
    });
  });


});
    </script>






    </body>


    <!-- Mirrored from colorlib.com//polygon/adminty/default/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 05:30:49 GMT -->

    </html>