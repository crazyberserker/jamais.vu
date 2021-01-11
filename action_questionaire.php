<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  include_once('./database/questions.php');
  ob_start();

  $user1 = $_SESSION['user1'];
  $user2 = $_SESSION['user2'];
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];

  $id = get_ID($user1, $user2);

  if(questionaire($id, $q1, $q2 ,$q3, $q4, $q5, $q6, $q7, $q8, $q9)){
    $_SESSION['ID'] = $id;
    header('Location: geral.php');
  }
  else
  header('Location: geral.php');

?>
