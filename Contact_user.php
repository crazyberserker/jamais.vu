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
	<link rel='stylesheet' href='css/form.css' />
	
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
						<h3 class="app__main__title">This is Jamais Vu</h3>
						<div class="background">
									<div class="container">
										<div class="screen">
										<div class="screen-header">
											<div class="screen-header-left">
											<div class="screen-header-button close"></div>
											<div class="screen-header-button maximize"></div>
											<div class="screen-header-button minimize"></div>
											</div>
											<div class="screen-header-right">
											<div class="screen-header-ellipsis"></div>
											<div class="screen-header-ellipsis"></div>
											<div class="screen-header-ellipsis"></div>
											</div>
										</div>
										<div class="screen-body">
											<div class="screen-body-item left">
											<div class="app-title">
												<span>CONTACT
												A USER</span>
											</div>
											<div class="screen-body-item">
													<div class="app-form">
													<form method="POST" action="action_email.php" class="form">
														<div class="app-form-group">
														<p>
															<?php 
																$username = $_SESSION['username'];		
																$user = get_ALL_users_exp_on_me($username);
															
																?>
															</p>
															<p>
																<select name='receiver'>
																	<?php combobox2($user, $valor_selecionado); ?>
																</select>
														
															</p>
														</div>
														<div class="app-form-group">
														<textarea type="text" name="mess" id='mess' placeholder="Message" ></textarea>
														</div>
														
														<div class="app-form-group buttons">
														
															<button type='submit' class="button button__accent">SEND</button>
														</div>
														</form>
													</div>
												
											</div>
										</div>
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