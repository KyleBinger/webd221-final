<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="Kevin + Kyle">
	<title>UIBrush | Contact Us </title>
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/font_awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/about.css"><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

	<?php include "header.php"; ?>
	
		<div id="aboutImage">
			<div class="container clearfix">
				<div id="sliderText">
					<h1>Who <span class="span1">We Are</span></h1>
					<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio<br> 
nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
				</div>
			</div>
		</div>

	</header>
		
	<div id="about">
		<div class="container clearfix">
			<h1><span class="underline">About Us</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.  Lorem ipsum dolor<br> sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<br> ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>
		
		</div>
		
	</div>

	<div id="ourTeam">
		<div class="container clearfix">
			<h1 id="overviewTitle"><span class="underline">Our Team</span></h1>
		
			<div class="teamMembers">
				<img src="assets/team.png">
				<h2>Kyle Binger</h2>
				<p>Financial Manager</p>
				<p><span class="span4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></p>
			</div>

			<div class="teamMembers">
				<img src="assets/team.png">
				<h2>Kyle Binger</h2>
				<p>Project Manager</p>
				<p><span class="span4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></p>
			</div>

			<div class="teamMembers">
				<img src="assets/team.png">
				<h2>Kyle Binger</h2>
				<p>Marketing Executive</p>
				<p><span class="span4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></p>
			</div>

			<div class="teamMembers">
				<img src="assets/team.png">
				<h2>Kyle Binger</h2>
				<p>CEO</p>
				<p><span class="span4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></p>
			</div>

		</div>
		
	</div>

	<div id="ourMission">
		<div class="container clearfix">
			<div id="missionText">
				<h1><span class="underline">Our Mission</span></h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>
			</div>

			<div id="missionImage">
				<img src="assets/mission.png">
			</div>

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