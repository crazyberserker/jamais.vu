<?php
include_once('./config/init.php');
include_once('./database/user.php');
include_once('./database/questions.php');


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
					<div class="text-container">
						<h1 class="app__main__title">Profile</h1>
						<?php	
							$user1 = $_SESSION['user1'];
							$user2 = $_SESSION['user2'];
							getPhoto($user2);					
						?>
					</div>
					
					<div class="container">
						<div class="control-group">
							<form action="action_questionaire.php" method="post">	

								<h3>Based on the picture try to guess this person's personality and favourite things. <br>
								Can you make a good bet? </h2>
							
							<div class="select">
										<h4>Q1: The person in the photo has a ___________ face.</h4>
											<select name="q1">
												<option value="baby">baby</option>
												<option value="sad">sad</option>
												<option value="familiar">familiar</option>
												<option value="lovely">lovely</option>
												<option value="serious">serious</option>
												<option value="happy">happy</option>
												<option value="calm">calm</option>
												<option value="friendly">friendly</option>
												<option value="honest">honest</option>
												<option value="anxious">anxious</option>
												<option value="gentle">gentle</option>
												<option value="intelligent">intelligent</option>
												<option value="angry">angry</option>
												<option value="expressive">expressive</option>
												<option value="tired">tired</option>
											</select>
               							
										<div class="select__arrow"></div>
							</div>
							<div class="select">
										<h4>Q2: He/She seems ___________</h4>
											<select name="q2">
												<option value="discreet">discreet</option>
												<option value="comfortable">comfortable</option>
												<option value="fancy">fancy</option>
												<option value="rebel">rebel</option>
												<option value="plain">plain</option>
												<option value="conspicuous">conspicuous</option>
												<option value="peculiar">peculiar</option>
												<option value="funny">funny</option>
												<option value="formal">formal</option>
												<option value="trendy">trendy</option>
												<option value="professional">professional</option>
												<option value="retro">retro</option>
												<option value="style">in style</option>
												<option value="fabulous">fabulous</option>
												<option value="ecofriendly">eco-friendly</option>
												<option value="dramatic">dramatic</option>
												<option value="sophisticated">sophisticated</option>
											</select>
               							
										<div class="select__arrow"></div>
							</div>
							<div class="select">
										<h4>Q3: But I think deep down he/she is ___________</h4>
											<select name="q3">
												<option value="clever">clever</option>
												<option value="grumpy">grumpy</option>
												<option value="kind">kind</option>
												<option value="lazy">lazy</option>
												<option value="discreet">discreet</option>
												<option value="cheerful">cheerful</option>
												<option value="optimistic">optimistic</option>
												<option value="talkative">talkative</option>
												<option value="calm">calm</option>
												<option value="nervous">nervous</option>
												<option value="emotional">emotional</option>
												<option value="funny">funny</option>
												<option value="shy">shy</option>
												<option value="creative">creative</option>
												<option value="happy">happy</option>
												<option value="smart">smart</option>
												<option value="serious">serious</option>
												<option value="wise">wise</option>
												<option value="cultured">cultured</option>
												<option value="talented">talented</option>
											</select>
               							
										<div class="select__arrow"></div>
							</div>

									<h4>Q4: How old is this person?</h4>
									<label> Age</label>
									<input type="number" name="q4" id='age' placeholder="Type the age">		
							
								<div class="select">
										<h4>Q5: Favorite music genre:</h4>
											<select name="q5">
												<option value="Alternative">Alternative</option>
												<option value="Blues">Blues</option>
												<option value="Classical">Classical</option>
												<option value="Country">Country</option>
												<option value="Electronic">Electronic</option>
												<option value="Hiphop">Hip Hop</option>
												<option value="Indie">Indie</option>
												<option value="Jazz">Jazz</option>
												<option value="Metal">Country</option>
												<option value="Newage">New Age</option>
												<option value="Opera">Opera</option>
												<option value="Pop">Pop</option>
												<option value="Rap">Rap</option>
												<option value="RB">R&B</option>
												<option value="Reggae">Reggae</option>
											    <option value="Rock">Rock</option>
											</select>
               							
										<div class="select__arrow"></div>
								</div>
								<div class="select">
									<h4>Q6: Favorite movie genre:</h4>
										<select name="q6">
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
               							
									<div class="select__arrow"></div>
								</div>
								<div class="select">
									<h4>Q7: Favorite Food:</h4>
										<select name="q7">
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
               							
									<div class="select__arrow"></div>
								</div>
								<div class="select">
									<h4>Q8: Profession / Area of Study:</h4>
										<select name="q8">
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
               							
									<div class="select__arrow"></div>
								</div>
								<div class="select">
									<h4>Q9: Hobby:</h4>
										<select name="q9">
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
               							
									<div class="select__arrow"></div>
								</div>
								<input type="submit" class="button button__accent" value="Submit me!" />
							</form>
						</div>
					</div>
			</div>
			</div>
		</div>
	</div>

<script src='js/app.min.js'></script>
</body>
</html>