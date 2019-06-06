
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Registration Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php base_url();?>assets/css/style.css"/>
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('<?php base_url();?>assets/images/form-v9.jpg')">
			<form class="form-detail" action="<?php base_url();?>index.php/welcome/registration" method="post" enctype="multipart/form-data">
				<h2>Registration Form</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="name" id="full-name" class="input-text" placeholder="Your Name" required>
					</div>
					<div class="form-row">
						<input type="text" name="father" id="father" class="input-text" placeholder="Your Father Name" required >
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="date" name="dob" id="dob"  placeholder="Your Dob" required>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="gender" id="gender" class="input-text" placeholder="Gender" required>
					</div>
					<div class="form-row">
						<input type="file" name="photo" id="photo"  placeholder="Your Photo" required>
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="address" id="address" class="input-text" placeholder="Your Address" required>
					</div>
					<div class="form-row">
						<input type="text" name="city" id="city" class="input-text" placeholder="Your City" required>
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="state" id="state" class="input-text" placeholder="Your State" required>
					</div>
					<div class="form-row">
						<input type="text" name="country" id="country" class="input-text" placeholder="Your Country" required>
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="religion" id="religion" class="input-text" placeholder="Your Religion" required>
					</div>
					<div class="form-row">
						<input type="text" name="category" id="category" class="input-text" placeholder="Your Category" required>
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="number" name="mobile" id="mobile" class="input-text" placeholder="Your Mobile no." maxlength="12" required>
					</div>
					<div class="form-row">
						<input type="number" name="aadhar" id="aadhar" class="input-text" placeholder="Your Aadhar no." maxlength="12" required>
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="number" name="pin" id="pin" class="input-text" placeholder="Your Pincode" maxlength="6" required>
					</div>
					<div class="form-row">
						<input type="text" name="institute" id="institute" class="input-text" placeholder="Your institute Name" required>
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="username" id="username" class="input-text" placeholder="Your Username" required>
					</div>
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					</div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>