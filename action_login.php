<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  ob_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isValid($username, $password))
  {
  
    $_SESSION['success_message'] = 'Login successful!';
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['isLog'] = TRUE;    
     
    header('Location: geral.php');
    
  }
  else
   header('Location: index.php');
 
?>
