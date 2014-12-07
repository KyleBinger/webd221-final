<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="Kevin + Kyle">
	<title>UIBrush | Contact Us </title>
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/font_awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/main.css"><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

	<?php include "header.php"; ?>
	
			<div id="imageSlider">
				<div class="container clearfix">
					<div class="sliderNav">
						<img src="assets/image_slider_left_main.png">
					</div>
					<div id="sliderText">
						<h1><span class="background1">Welcome To UIBrush</span></h1>
						<h3><span class="background2">We Provide Ultimate Free PSD Templates</span></h3>
					</div>
					<div id="slider2" class="sliderNav">
						<img src="assets/image_slider_right_main.png">
					</div>
				</div>
			</div>
			<div id="overlay1">
				<div class="container clearfix">
					<h3><span class="span2">Lorem ipsum dolor sit amet </span><span class="span3">consectetuer adipiscing elit</span></h3>
				</div>
				
			</div>
		</div>
	</header>
		
	<div id="overview">
		<div class="container clearfix">
			<h1 id="overviewTitle"><span class="underline">UIBrush</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. Ut enim ad minim veniam,<br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br>
voluptate velit esse cillum.</p>
		

			<div class="blurb">
				<i class="fa fa-list-ul"></i>
				<h2>Innovative Design</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br> incididunt ut labore eturet dolore magna<br> aliqua.</p>
			</div>

			<div class="blurb">
				<i class="fa fa-code"></i>
				<h2>Clean Coding</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br> incididunt ut labore eturet dolore magna<br> aliqua.</p>
			</div>

			<div class="blurb">
				<i class="fa fa-location-arrow"></i>
				<h2>Quick Delivery</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br> incididunt ut labore eturet dolore magna<br> aliqua.</p>
			</div>

			<div class="blurb">
				<i class="fa fa-phone"></i>
				<h2>Best Support</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br> incididunt ut labore eturet dolore magna<br> aliqua.</p>
			</div>
		</div>
		
	</div>

	<div id="recentProjects">
		<div class="container clearfix">
			<h1 id="overviewTitle"><span class="underline">Recent Projects</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore eturet dolore magna aliqua.</p>
		

			<div class="portfolio">
				<img src ="assets/portfolio.jpg">
				<div id="grayBox">
					<h2><span class="span4">Portfolio One</span></h2>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>

			<div class="portfolio">
				<img src ="assets/portfolio.jpg">
				<div id="grayBox">
					<h2><span class="span4">Portfolio Two</span></h2>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>

			<div class="portfolio">
				<img src ="assets/portfolio.jpg">
				<div id="grayBox">
					<h2><span class="span4">Portfolio Three</span></h2>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>

			<div class="portfolio">
				<img src ="assets/portfolio.jpg">
				<div id="grayBox">
					<h2>Portfolio Four</h2>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
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