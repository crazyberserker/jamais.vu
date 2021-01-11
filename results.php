<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
include('./database/questions.php');

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
						<h3 class="app__main__title">This is my information</h3>
						<?php

						?>
					</div>
					<div class="table-title">
						<h3>User Information table</h3>
					</div>
					
					<table class="table-fill">
						<thead>
							<tr>
								<th class="text-left">Class</th>
								<th class="text-left">User Information</th>
							</tr>
						</thead>
						<tbody class="table-hover">
							<h1>My Answers</h1>
							<?php
								
									
									$id = $_SESSION['ID'];
									getPhoto($use1);
									echo "<br>";
									$user = get_ALL_my_Informations($user1);							
							?>
							</tbody>
							<h1>Correct information</h1>
							<tbody class="table-hover">
							<h1>My Answers</h1>
							<?php
									$username = $_SESSION['user2'];
							
									echo "<br>";
									$user = get_ALL_my_Informations($user2);							
							?>
							</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<script src='js/app.min.js'></script>
</body>
</html>