<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="Kevin + Kyle">
	<title>UIBrush | Contact Us </title>
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/font_awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/contact.css"><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
	
	<?php include "header.php"; ?>
	
		<div id="contactImage">
			<div class="container clearfix">
				<div id="sliderText">
					<h1>Talk <span class="span1">To Us</span></h1>
					<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio<br> 
nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
				</div>
			</div>
		</div>

	</header>
		
	<div id="contact">
		<div class="container clearfix">
			<h1><span class="underline">Contact Us</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud<br> exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.  Lorem ipsum dolor<br>       sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>
		
		</div>
		
	</div>

	<div id="contactForm">
		<div class="container clearfix">
			<div id="contactFormImage">
				<img src="assets/map.jpg">
			</div>

			<div id="contactFormInfo">
				<h3>Contact Details:</h3>
				<div class="info clearfix">
					<i class="fa fa-phone"></i>
					<p>(+91) 0975 720 3582</p>
				</div>
				<div class="info clearfix">
					<i class="fa fa-envelope-o"></i>
					<p>Email@domain.com</p>
				</div>
				<div class="info clearfix">
					<i class="fa fa-map-marker"></i>
					<p>No.235, New St, 25th Sector,<br>London, England</p>
				</div>
			</div>

			<form>
				<input type="text" name="name" placeholder="Name"><br>
				<input type="email" name="email" placeholder="Email"><br>
				<textarea placeholder="Message"></textarea><br>
				<input id="submit" type="submit" value="Submit"><br>
			</form>
		</div>
	</div>

	<?php include "footer.php"; ?>

<script>
	$(document).ready(function(){
		$(".fa-bars").on("click", function(){
			$(".dropdown").toggle();
		});
	});
</script>

</body>
</html>	