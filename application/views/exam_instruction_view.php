<form method = "post" action="<?php echo base_url('studentController/exam_start');?>">
<div class="container">
    <div class="row">
    <div class="panel panel-calendar  exam_panel_body" style="padding:50px;">
                <div class="panel-heading bg_info border-light">
                    <h5 class="panel-title text-center">Online Examination</h5>
                </div>
               <div class="panel-body">
                    <div class="text-black text-large exam_panel">
                        <center><p style="font-size: 25px;"><b><u>INSTRUCTION FOR TEST</u> </b></p></center>
                        <div style="padding-top:25px">
                            <h6><b>Please read the following instruction carefully</b></h6>
                        </div>
                    </div>
                    <div>
                        <ol>
                            <li>Read carefully instruction before starting the test, you can read the instruction between the exam after clicking <b>"INSTRCTION BUTTON".</b></li>
                            <li>You have <b>120</b> minutes to complete the test.</li>
                            <li>The test contains <b>100</b> questions.</li>
                            <li>You will be awarded <b>1</b> marks for each correct answer.</li>
                            <li>There is <b>.25</b> negative marks for each worng answer.</li>
                            <li>A number list of all question appears at the right side of the window. you can access the question in any order within a section or access section by clicking on the question number given on the number list. </li>
                            <li>you can unmark your answer by clicking <b>"Clear Response"</b> option.</li>
                            <li>For the next question click the <b>"SAVE & NEXT" button.</b></li>
                            <li>Do not click the button <b>"SUBMIT TEST"</b> before completing the test. A test once submitted can not be resumed.</li>
                            <li>If your system get hangged or you face any other problem in internet connectivity <b>"Don't worry, Kindly close the window of the test and you can resume your test from where you had left."</b> </li>
                        </ol>
                    </div>
                    <div style="padding-left:15px;">
                        <span>Select your language :</span>
                        <select>
                            <option>English</option>
                            <option>Hindi</option>
                        </select>
                    </div>
                    <div style="color:red; padding-top:10px;">
                        <input id="check_box" type="checkbox" onclick= tog()>
                        <span>I  have read and understood all the instructions. All computer hardware alloted to me are in proper working condition. I agree that in case of adhering to the instructions. I will be disqualified from giving exam. </span>
                    </div>
                    <div style="padding-top:10px;">
                        <center><input id="start_test"  class="btn btn-primary" style="display:none" type="submit" id="start_id" name="start_test" value="START YOUR TEST"></center>
                    </div>
               </div>
</div>

    </div>

</div>

</form>
<script> 
function tog(){
    var id1= document.getElementById("start_test");
    if(id1.style.display!="none"){
        id1.style.display ="none";
    }else{
        id1.style.display ="block";
    }
}
// $(document).ready(function(){
//     $("#start_test").hide();
//     $("#check_box").check(function(){
//         if(this.checked){
//             $("#start_test").show();
//         }
        
//     });
// });
    

</script>

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="#">Online Examination</a>
</nav>
<div style="padding-top:50px"><center><p style="font-size: 25px;"><b>INSTRUCTION FOR TEST </b></p></center></div>  
<div>
    <h2>Please read the following instruction carefully</h2>
</div>
<div>
    <ol>
        <li>Read carefully instruction before starting the test, you can read the instruction between the exam after clicking <b>"INSTRCTION BUTTON".</b></li>
        <li>You have <b>120</b> minutes to complete the test.</li>
        <li>Test contains <b>100</b>questions</li>
        <li></li>
        <li></li>
    </ol>
</div> -->