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
						<li><a href="#">Experience</a></li>
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
					<div class="text-container">
						<h2>You can filter your strangers by one of these categories:</h2>
						<h3>Gender:</h3>
						<div class="steps__inner">
							<div class="step">
								<p><a href="male.php" class="button button__accent">Male</a></p>
							</div>
							<div class="step">
								<p><a href="female.php" class="button button__accent">Female</a></p>
							</div>
						</div>
						<h3>Area of Study / Profession </h3>
						<form action="action_profession.php" method="post">
							<select name='profession'>

								<option value="Agriculture">Agriculture, Food and Natural Resources</option>
								<option value="Architecture">Architecture and Construction</option>
								<option value="Arts">Arts</option>
								<option value="Video">Video Technology and Communications</option>
								<option value="Business">Business Management and Administration</option>
								<option value="Education">Education and Training</option>
								<option value="Finance">Finance</option>
								<option value="Government">Government and Public Administration</option>
								<option value="Health">Health Science</option>
								<option value="Hospitality">Hospitality and Tourism</option>
								<option value="Human">Human Services</option>
								<option value="Information">Information Technology</option>
								<option value="Law">Law, Public Safety, Corrections and Security</option>
								<option value="Manufacturing">Manufacturing</option>
								<option value="Marketing">Marketing, Sales and Service</option>
								<option value="Science">Science, Technology, Engineering and Mathematics</option>
								<option value="Transportation">Transportation, Distribution and Logistics</option>
								<option value="Athlete">Athlete, Sports</option>
								<option value="Student">Student</option>
								<option value="Unemployed">Unemployed</option>
							</select>

							<input type="submit" class="button button__accent" value="Choose Food!" />
						</form>
						<h3>Favorite hobby</h3>
						<form action="action_hobby.php" method="post">
							<select name='hobby'>
								<option value="Scrapbooking">Scrapbooking</option>
								<option value="Drawing">Drawing</option>
								<option value="Painting">Painting</option>
								<option value="Reading">Reading</option>
								<option value="Photography">Photography</option>
								<option value="Calligraphy">Calligraphy</option>
								<option value="Cooking">Cooking</option>
								<option value="Films">Films</option>
								<option value="Sports">Sports</option>
								<option value="Pottery">Pottery</option>
								<option value="Knitting">Knitting</option>
								<option value="Crochet">Crochet</option>
								<option value="Wood">Wood Crafting</option>
								<option value="Writing">Writing</option>
								<option value="Boardgames">Boardgames</option>
								<option value="Videogames">Videogames</option>
							</select>

							<input type="submit" class="button button__accent" value="Choose Hobby!" />
						</form>
						<h3>Favorite food</h3>
						<form action="action_food.php" method="post">
							<select name='food'>
								<option value="Italian">Italian</option>
								<option value="Chinese">Chinese</option>
								<option value="Japanese">Japanese</option>
								<option value="Thai">Thai</option>
								<option value="French">French</option>
								<option value="Spanish">Spanish</option>
								<option value="Mexican">Mexican</option>
								<option value="Indian">Indian</option>
								<option value="Brazilian">Brazilian</option>
								<option value="Portuguese">Portuguese</option>
							</select>

							<input type="submit" class="button button__accent" value="Choose Food!" />
						</form>
						<h3>Favorite movie genre</h3>
						<form action="action_film.php" method="post">
							<select name='film'>

								<option value="Action">Action</option>
								<option value="Animation">Animation</option>
								<option value="Comedy">Comedy</option>
								<option value="Drama">Drama</option>
								<option value="Fantasy">Fantasy</option>
								<option value="Historical">Historical</option>
								<option value="Horror">Horror</option>
								<option value="Mystery">Mystery</option>
								<option value="Romance">Romance</option>
								<option value="Scifi">Science Fiction</option>
								<option value="Thriller">Thriller</option>
							</select>

							<input type="submit" class="button button__accent" value="Choose film!" />
						</form>
						<h2>Or you can choose not to</h2>
						<p><a href="aleatory.php" class="button button__accent">Without filter</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>

<script src='js/app.min.js'></script>
</body>
</html>