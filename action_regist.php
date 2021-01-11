<?php

  include_once('./config/init.php');
  include_once('./database/user.php');
  
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $age = $_POST["age"];
  $hometown = $_POST["hometown"];
  $music = $_POST["music"];
  $film = $_POST["film"];
  $profession = $_POST["profession"];
  $hobby = $_POST["hobby"];
  $food = $_POST["food"];
  

  
  



  if (createUser($username, $password, $email, $gender, $first_name, $last_name, $age, $hometown, $music, $film, $profession, $hobby,$food)){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['gender'] = $gender;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['age'] = $age;
    $_SESSION['hometown'] = $hometown;
    $_SESSION['music'] = $music;
    $_SESSION['film'] = $film;
    $_SESSION['profession'] = $profession;
    $_SESSION['hobby'] = $hobby;
    $_SESSION['food'] = $food;
  
  
    header('Location: photo_upload.php');
    
  }
  else
  header('Location: dashboard.php');
 

?>