<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  include_once('./database/questions.php');
  ob_start();


 $film = $_POST['film'];
  
  if($film){
    $_SESSION['film_s'] = $film;
    $_SESSION['success_message'] = 'Login successful!';
  
    header('Location: film.php');
  }
  else
   header('Location: experience.php');
 
?>
