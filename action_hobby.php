<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  include_once('./database/questions.php');
  ob_start();


  $hobby = $_POST['hobby'];
  
  if($hobby){
    $_SESSION['hobby_s'] = $hobby;
    $_SESSION['success_message'] = 'Login successful!';
  
    header('Location: hobby.php');
  }
  else
   header('Location: experience.php');
 
?>
