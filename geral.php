<?php

include_once('./config/init.php');
  include_once('./database/user.php');
?>



<!DOCTYPE html>
<html lang='en'>
<head>
	<meta class="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> Jamais Vu</title>
	<link rel='stylesheet' href='css/style.min.css' />
	<link rel='stylesheet' href='badass_style.css' />
</head>
<body>
	<!-- navbar -->
	<div class="navbar">
		<nav class="nav__mobile"></nav>
		<div class="container">
			<div class="navbar__inner">
				<a href="geral.php" class="navbar__logo"><img src="./images/logo.png" alt="Logo" width="100"></a>
				<nav class="navbar__menu">
					<ul>
						<li><a href="experience.php">Experience</a></li>
						<li><a href="action_logout.php">Logout</a></li>
					</ul>
				</nav>
				<div class="navbar__menu-mob"><a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a></div>
			</div>
		</div>
	</div>
	<!-- Page content -->
	<div class="app">
		<div class="container">
			<div class="app__inner">
				<div class="app__menu">
					<ul class="vMenu">
						<li><a href="My_Information.php">My Information</a></li>
						<li><a href="Answers.php">Answers</a></li>
						<li><a href="Contact_user.php">Contact User</a></li>
						<li><a href="My_Messages.php">My Messages</a></li>

					</ul>
				</div>
				<div class="app__main">
					<h1 class="app__main__title">Instructions</h1>
					<div class="steps landing__section">
						<div class="container">
							<h2>How does it work?</h2>
							<div class="steps__inner">
								<div class="step">
									<div class="step__media">
										<img src="./images/undraw_responsive.svg" class="step__image">
									</div>
									<h3>1º Register</h3>
									<p>You fill out a form about yourself.</p>
								</div>
								<div class="step">
									<div class="step__media">
										<img src="./images/together.svg" class="step__image">
									</div>
									<h3>2º Guessing</h3>
									<p>You create a profile for a person you don�t know.</p>
								</div>
							</div>
							<div class="steps__inner">
								<div class="step">
									<div class="step__media">
										<img src="./images/undraw_selfie.svg" class="step__image">
									</div>
									<h3>3º About you</h3>
									<p>You can access the profiles that others have created for you .</p>
								</div>
								<div class="step">
									<div class="step__media">
										<img src="./images/undraw_everywhere.svg" class="step__image">
									</div>
									<h3>4º Connecting</h3>
									<p>You can get in touch with people who create profiles for you.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="steps landing__section">
						<div class="container">
							<h2>Tabs</h2>
							<div class="steps__inner">
								<div class="step">
									<div class="step__media">
										<img src="./images/tt.jpeg" class="step__image">
									</div>
									<h3>My information</h3>
									<p>Find the form you filled in about yourself.</p>
								</div>
								<div class="step">
									<div class="step__media">
										<img src="./images/tt.jpeg" class="step__image">
									</div>
									<h3>Answers</h3>
									<p>Find the profiles that others created for you.</p>
								</div>
							</div>
							<div class="steps__inner">
								<div class="step">
									<div class="step__media">
										<img src="./images/tt.jpeg" class="step__image">
									</div>
									<h3>Experience</h3>
									<p>Guess the personality and preferences of strangers.</p>
								</div>
								<div class="step">
									<div class="step__media">
										<img src="./images/tt.jpeg" class="step__image">
									</div>
									<h3>My Messages</h3>
									<p>See who wants to talk with you.</p>
								</div>
							</div>
						</div>
					</div>
			    </div>
			</div>
		</div>
		
	</div>
	
	<script src='js/app.min.js'></script>
</body>
</html>