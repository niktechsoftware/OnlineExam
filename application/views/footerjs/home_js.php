    <script data-cfasync="false" src="<?php echo base_url();?>assets/js/email-decode.min.js"></script><script type="59edefb75604f457019ed4b6-text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery/js/jquery.min.js"></script>
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

<!-- Mirrored from colorlib.com//polygon/adminty/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 05:29:56 GMT -->
<script >
    
  $(document).ready(function() {
    // add exam code start
      $("#addExamButton").click(function(){
        var examName = $('#addExam').val();
        //alert("Your exam is successfully created");
        $.post("<?php echo base_url('examconfiguration/addExam') ?>", {examName : examName}, function(data){
                $("#examAdd1").html(data);
        });
        $('#addExam').val("");
        });
       var examName = $('#addExam').val();
     $.post("<?php echo base_url('examconfiguration/addExam') ?>", {examName : examName}, function(data){
                $("#examAdd1").html(data);
        });
 // End exam code
      // start add test code
        $("#addTestButton").click(function(){
          var examHead = $('#examListshow').val();
          var testnm = $('#addTest').val();
          var testDes = $('#descTest').val();
          var testmark = $('#marksTest').val();
          alert(examHead);alert(testnm); alert(testDes); alert(testmark);
          alert("Your Test  Successfully Added");
          $.post("<?php echo base_url('examconfiguration/addtest')?>",{
            examHead : examHead,
            testnm :testnm,
            testDes : testDes,
            testmark : testmark
          }, function(data){
            $("#addTest1").html(data);
          });
          $('#addTest').val("");
          $('#descTest').val("");
          $('#marksTest').val("");
        });
        var examHead = $('#examListshow').val();
          var testnm = $('#addTest').val();
          var testDes = $('#descTest').val();
          var testmark = $('#marksTest').val();
          $.post("<?php echo base_url('examconfiguration/addtest')?>",{
            examHead : examHead,
            testnm :testnm,
            testDes : testDes,
            testmark : testmark
          }, function(data){
            $("#addTest1").html(data);
          });
      // End add test code
        //start add subject code
          //js code 
             $("#examListsubShow").change(function(){
                    var testnm = $("#examListsubShow").val();
                    $.post("addSubject2",{testnm : testnm}, function(data){
                    $("#testListshow").html(data);
                        });
                });
             
          //js code end
          $("#addSubjectButton").click(function(){
              var examsubject = $('#examListsubShow').val();
              var examTest = $('#testListshow').val();
              var subName = $('#addSubject').val();
              var subQuesNo = $('#addQuestion').val();
               alert(examsubject); alert(examTest);alert(subName); alert(subQuesNo);
               alert("Your Subject successfully Added");
                $.post("<?php echo base_url('examconfiguration/addSubject')?>",{
            examsubject : examsubject,
            examTest :examTest,
            subName : subName,
            subQuesNo : subQuesNo
          }, function(data){
            $("#addSubject1").html(data);
          });
             });
          var examsubject = $('#examListsubShow').val();
              var examTest = $('#testListshow').val();
              var subName = $('#addSubject').val();
              var subQuesNo = $('#addQuestion').val();
                $.post("<?php echo base_url('examconfiguration/addSubject')?>",{
            examsubject : examsubject,
            examTest :examTest,
            subName : subName,
            subQuesNo : subQuesNo
          }, function(data){
            $("#addSubject1").html(data);
          });
        //End add subject code
  });

  </script>


