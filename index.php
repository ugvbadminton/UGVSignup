<!--<?php
$remarks=$_GET['remarks'];
if ($remarks==null and $remarks=="")
{
echo ' Đăng ký tại đây ';
}
if ($remarks=='success')
{
echo ' Bạn đã đăng ký thành công !  ';
}
?>-->

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>UGV SIGN UP</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<span>SIGN UP FORM</span>
				<h1>University of Greenwich Vietnam Badminton Club</h1>
				<nav>
					<a href="#" class="bp-icon bp-icon-prev" data-info="back to Homepage"><span>Back to Homepage</span></a>
				</nav>
			</header>	
			<div class="main">
				<form class="cbp-mc-form" action="register.php" onsubmit="return validateForm()" method="post">
                    
					<div class="cbp-mc-column">
						<label for="first_name">First Name</label>
	  					<input type="text" id="first_name" name="first_name" placeholder="Van A">
	  					<label for="last_name">Last Name</label>
	  					<input type="text" id="last_name" name="last_name" placeholder="Nguyen">
	  					<label for="email">Email Address</label>
	  					<input type="email" id="email" name="email" placeholder="anguyen@email.com">
	  					<label for="gender">Gender</label>
	  					<select id="gender" name="gender">
	  						<option>Choose one on the list below</option>
	  						<option value="male">Male</option>
	  						<option value="female">Female</option>
	  					</select>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="phone">Phone Number</label>
	  					<input type="text" id="phone" name="phone" placeholder="0123456789">
	  					<label for="sid">Student ID</label>
	  					<input type="text" id="sid" name="sid" placeholder="anvfpt1231">
                        <label for="fbn">Facebook Name</label>
	  					<input type="text" id="fbn" name="fbn" placeholder="A Nguyen">
	  					<label>Occupation</label>
	  					<select id="oc" name="oc">
	  						<option>Choose an occupation</option>
	  						<option value="student">Student</option>
	  						<option value="teacher">Teacher</option>
	  						<option value="graduated">Graduated</option>
	  					</select>
	  				</div>
	  				<div class="cbp-mc-column">
						<label for="school">Your School (if you're a student)</label>
	  					<input type="text" id="school" name="school" placeholder="Unniversity of Greenwich Vietnam">
	  					<label for="major">Your Major</label>
	  					<input type="text" id="major" name="Major" placeholder="Information Technology">
	  					<label for="com">Company</label>
	  					<input type="text" id="com" name="com" placeholder="FPT Software">
                        <label>Sign up as</label>
	  					<select id="Sua" name="Sua">
	  						<option>Choose a type of member</option>
	  						<option value="month">Monthly Member</option>
	  						<option value="week">Weekly Member</option>
	  					</select>
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input name="submit" class="cbp-mc-submit" type="submit" value="Sign Me Up!"/></div>
				</form>
			</div>
		</div>
	</body>
</html>
