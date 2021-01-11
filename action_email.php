<?php

  include_once('./config/init.php');
  include_once('./database/user.php');
  include_once('./database/questions.php');

  

  $sender = $_SESSION['username'];
  $receiver = $_POST['receiver'];
  $mess = $_POST['mess'];

  if(send_message($sender, $receiver, $mess))
    header('Location: geral.php');

  else
   header('Location: Contact_user.php');
  
 

?>