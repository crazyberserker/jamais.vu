<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  include_once('./database/questions.php');
  ob_start();

  $user1 = $_SESSION['user1'];
  $user2 = $_POST['username2'];
  
  $id = begin_experience($user1, $user2);

  if($id){
    $_SESSION['user2'] = $user2;
    $_SESSION['success_message'] = 'Login successful!';
  
    header('Location: question-part.php');
  }
  else
   header('Location: geral.php');
 
?>
