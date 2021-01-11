<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  include_once('./database/questions.php');
  ob_start();


  $food = $_POST['food'];
  
  if($food){
    $_SESSION['food_s'] = $food;
    $_SESSION['success_message'] = 'Login successful!';
  
    header('Location: food.php');
  }
  else
   header('Location: experience.php');
 
?>
