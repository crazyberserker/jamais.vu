<!DOCTYPE html>
<html lang='en'>
<head>
	<meta class="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Authentication @Evie</title>
	<link rel='stylesheet' href='css/style.min.css' />
</head>
<body>
	<!-- navbar -->
	<div class="navbar">
		<nav class="nav__mobile"></nav>
		<div class="container">
			<div class="navbar__inner">
			<a href="index.php" class="navbar__logo"><img src="./images/logo.png" alt="Logo" width="100"></a>
				<nav class="navbar__menu">
					<ul>
						<li><a href="regist.php">Regist</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</nav>
				<div class="navbar__menu-mob"><a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a></div>
			</div>
		</div>
	</div>
	<!-- Authentication pages -->
	<div class="auth">
		<div class="container">
			<div class="auth__inner">
				<div class="auth__media">
					<img src="./images/undraw_selfie.svg">
				</div>
				<div class="auth__auth">
					<h1 class="auth__title">Registration</h1>
					<p>Fill all the fields to proceed</p>
					<form method="POST" action="action_regist.php" autocompelete="new-password" role="presentation" class="form">
						<input name="username" class="fakefield">
						<label>Username</label>
						<input type="text" name="username" id='username' placeholder="Type your username" >
						<label>Password</label>
						<input type="password" name="password" id='password' placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" autocomplete="off" >
						<label>Email</label>
						<input type="email" name="email" id='email' placeholder="email@email.com" autocomplete="off">
						<label>Gender</label>
								<div class="select">
										<select name="gender">
											<option value="Female">Female</option>
											<option value="Male">Male</option>
											<option value="Other">Other</option>
										
										</select>
               							
									<div class="select__arrow"></div>
								</div>
						<label>First Name</label>
						<input type="text" name="first_name" id='first_name' placeholder="Type your first name">
						<label> Last Name</label>
						<input type="text" name="last_name" id='last_name' placeholder="Type your last name">
						<label> Age</label>
						<input type="number" name="age" id='age' placeholder="Type your age">
						<label> Hometown</label>
						<input type="text" name="hometown" id='hometown' placeholder="Type your City">
						<label> Favorite music genre</label>
						<div class="select">
								<select name="music">
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
						<label> Favorite type movie genre </label>
						<div class="select">
								<select name="film">
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
						
						<label> Field of Study or Profession </label>
						<div class="select">
								<select name="profession">
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
						<label> Favorite hobby </label>
						<div class="select">
										<select name="hobby">
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
								<label> Favorite Food </label>
						<div class="select">
								<select name="food">
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
						<button type='submit' class="button button__accent">Regist</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<script src='js/app.min.js'></script>
</body>
</html>