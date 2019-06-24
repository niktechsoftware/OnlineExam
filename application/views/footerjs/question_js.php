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
    // js code of select box for select box
    $("#examQuesList").change(function(){
                    var examnm = $("#examQuesList").val();
                    $.post("addTest2",{examnm : examnm}, function(data){
                    $("#testQuesList").html(data);
                        });
                });
    $("#testQuesList").change(function(){
                    var subnm = $("#testQuesList").val();
                    $.post("addSubject3",{subnm : subnm}, function(data){
                    $("#subQuesList").html(data);
                        });
                });
    //end select code
             // start add Question code
      $("#addQuestionButton").click(function(){
         var questionName = $('#addQuestion').val();
         var subject_id = $('#subQuesList').val();
            alert("Your Quesiton Succesfully Added");
         $.post("<?php echo base_url('branchController/addQuestion')?>",{
          subject_id : subject_id,
          questionName : questionName}, function(data)
            { $("#questionAdd1").html(data);
         });
         $("#addQuestion").val("");
      });
      /// side show value in Question section
      var questionName = $('#addQuestion').val();
      var subject_id = $('#subQuesList').val();
           $.post("<?php echo base_url('branchController/addQuestion')?>",{subject_id : subject_id,
            questionName : questionName
         }, function(data){
            $("#questionAdd1").html(data);
         });

      // end add Question code
      //upload  question sheet code start
        $('#uploadQuesButton').click(function(){
          var image = $('#image_file').val();
          alert(image);
          alert(" your file Succesfully upload");
          $.post("<?php echo base_url('branchController/uploadQues')?>",{image : image},function(data){
            $("").html(data);
          });
        });
      //upload question sheet code end
      //code of option start
        //select box code start
           $("#examOptList").change(function(){
                    var examnmOpt = $("#examOptList").val();
                    $.post("addTestOpt",{examnmOpt : examnmOpt}, function(data){
                    $("#testListOpt").html(data);
                        });
                });
           $("#testListOpt").change(function(){
                    var testnmOpt = $("#testListOpt").val();
                    $.post("addSubjectOpt",{testnmOpt : testnmOpt}, function(data){
                    $("#subjectListOpt").html(data);
                        });
                });
           $("#subjectListOpt").change(function(){
            var subjectnmOpt = $("#subjectListOpt").val();
            $.post("addQuesOpt",{subjectnmOpt : subjectnmOpt},function(data){
              $("#quesListopt").html(data);
            });

           });
           $("#quesListopt").change(function(){
            var quesOptionId = $("#quesListopt").val();
            $.post("addQuesOption",{quesOptionId : quesOptionId},function(data){
              $("#quesOption").html(data);
            });

           });
           
        //select box code end
               // $("createBody").hide();
        
        //   $('#quesListopt').change(function(){
        //     var quesID = $('#quesListopt').val();
        //      $.post("<?php //echo base_url('branchController/quesConfigur') ?>", {quesID : quesID
        //  }, function(data){
        //         $("#optno").html(data);
        // });
        //   });
        // ////
      //code of option end
      ///code of max marks start
          ////select
          $("#examMarksList").change(function(){
                    var examnmMarks = $("#examMarksList").val();
                    $.post("addTestMarks",{examnmMarks : examnmMarks}, function(data){
                    $("#testListMarks").html(data);
                        });
                });
           $("#testListMarks").change(function(){
                    var testnmMarks = $("#testListMarks").val();
                   // alert(testnmOpt);
                    $.post("addSubjectMarks",{testnmMarks : testnmMarks}, function(data){
                    $("#subjectListMarks").html(data);
                   // alert(data);
                        });
                });
                   $("#subjectListMarks").change(function(){
            var subjectnmMarks = $("#subjectListMarks").val();
           // alert(subjectnmOpt);
            $.post("addQuesMarks",{subjectnmMarks : subjectnmMarks},function(data){
              $("#quesListMarks").html(data);
             // alert(data);
            });

           });
          ////select
           $("#addMarksButton").click(function(){
         var questionName = $('#addQuestion').val();
         var subject_id = $('#subQuesList').val();
            alert("Your Quesiton Succesfully Added");
         $.post("<?php echo base_url('branchController/addQuestion')?>",{
          subject_id : subject_id,
          questionName : questionName}, function(data)
            { $("#maxMarks").html(data);
         });
         $("#addQuestion").val("");
      });
      /// side show value in Question section
      var questionName = $('#addQuestion').val();
      var subject_id = $('#subQuesList').val();
           $.post("<?php echo base_url('branchController/addQuestion')?>",{subject_id : subject_id,
            questionName : questionName
         }, function(data){
            $("#maxMarks").html(data);
         });
          
      ///code of max marks end

  });

  </script>


