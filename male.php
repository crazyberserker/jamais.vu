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
				
				<li><a href="My_Information.php">Males</a></li>
				
				
					<form action="action_question-part.php" method="post">
            		<p>
						<?php 
							$username = $_SESSION['username'];
							$gender = ('Male');		
							$user = getFemalesOrMale($gender);
						?>
           					 <p>
                				<select name='username2'>
                    				<?php combobox($user, $valor_selecionado); ?>
									<?php $_SESSION['user1'] = $username;?>
                				</select>
								<input type="submit" class="button button__accent" value="Choose!"/>
            				</p>
        				</form>
					</p>
					<p><a href="experience.php" class="button button__accent">Back</a></p>
				</div>
			</div>
		</div>
	</div>

<script src='js/app.min.js'></script>
</body>
</html>