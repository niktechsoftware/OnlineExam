<html>
  <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 2%;
    padding: 2%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    /* margin-top: 30%; */
    /* margin-bottom: 3%; */
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 25%;
    /* margin-bottom: 5%; */
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 3%;
    margin-top: 2%;
}
.btnRegister{
    float: right;
    /* margin-top: 10%; */
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    /* margin-top: 3%; */
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    /* padding: 2%; */
    height: 20px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 2%;
    /* margin-bottom: -15%; */
    color: #495057;
}
.login-bg {
    background-image: url(<?php echo base_url();?>assets/images/gallery/flat-bg.jpg);
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
}
.a1{
    border: none;
    border-radius: 1.5rem;
    padding: 3%;
    padding-left:10%;
    padding-right:10%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 5%;
    cursor: pointer;
    text-decoration:none;
}
</style>
</head>
<body class="login-bg">
<div class="container register">
  <form action="<?php echo base_url();?>index.php/customer/customer_value" method="post">
                <div class="row">
                    <div class="col-md-3 register-left">
                    <a class="a1"   href="<?php echo base_url();?>" >Home</a><br>
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="no image"/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <a  class="a1" href="<?php echo base_url();?>login" >Login</a><br>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h2 class="register-heading"> Customer's Registration</h2>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                       
                                        <div class="form-group">
                                            <input type="text" name="joinerid" class="form-control" placeholder="Joiner name"/>
                                        </div>
                                         <div class="form-group">
                                            <input type="text" class="form-control" name="usernm" placeholder="Enter Name" />
                                        </div>
                                        <div class="form-group">
                                        <select name="gender" style="width: 360px; height: 40px;">
                                        <option>---Select---</option>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" placeholder="Enter Building No"/>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="state" placeholder="Enter State"/>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" name="aadhar" placeholder="Enter Aadhar"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="f_name" class="form-control" placeholder="Enter Father Name"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email"/>
                                        </div>
                                        <div class="form-group">
                                        <?php 
                                       $dt= $this->db->get("branch")->result();
                                        ?>
                                        <select name="district" style="width: 360px; height: 40px;">
                                        <option>---Select---</option>
                                        <?php foreach($dt as $row):  ?>
                                        
                                        <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                        <?php endforeach ;?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pin" placeholder="Enter Pin"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pan" placeholder="Enter pan"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="amount" placeholder="Enter Amount"/>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Pay For Register"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            </body>
            </html>