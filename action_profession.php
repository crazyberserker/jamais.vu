<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  include_once('./database/questions.php');
  ob_start();


  $profession = $_POST['profession'];
  
  if($profession){
    $_SESSION['profession_s'] = $profession;
    $_SESSION['success_message'] = 'Login successful!';
  
    header('Location: profession.php');
  }
  else
   header('Location: experience.php');
 
?>
