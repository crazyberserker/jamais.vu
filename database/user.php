<?php
    
function isValid($username, $password){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM User WHERE username = ?');
  $stmt->execute(array($username));
  $user = $stmt->fetch();
  //var_dump($user);

  if($user!=FALSE)
  {
     if(password_verify($password, $user['password']))
     {
       $_SESSION['reg'] = $user;
       $_SESSION['isLog'] = TRUE;
       global $conn;
      return TRUE;
     }
     else  
       return FALSE;
}
  else return FALSE;
}

  function createUser($username, $password, $email, $gender, $first_name, $last_name, $age, $hometown, $music, $film, $profession, $hobby, $food)
  {
    global $conn;
    $hash = password_hash($password, 2);
    $stmt = $conn->prepare('INSERT INTO User (username, password, email ,gender, first_name, last_name, age, hometown, music, film, profession, hobby, food) VALUES (?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?)');
    $stmt->execute(array($username, $hash, $email, $gender, $first_name, $last_name, $age, $hometown, $music, $film, $profession, $hobby, $food));    
    if(isValid($username, $password))
    {
      return TRUE;
    }
    else
      return FALSE;
  }

  function getAllUsers($username)
  {
    global $conn;
    global $conn2;
    $stmt = $conn->prepare('SELECT username, first_name, last_name FROM User WHERE username <> ?');
    $stmt->execute(array($username));    
    $user = $stmt->fetchALL();
    foreach($user as $value){
      echo "<p></p>";
      echo $value['first_name'] . "<br>";
      echo $value['last_name'] . "<br>";
      getPhoto($value['username']);
      echo "<p></p>";   
      }
      return $user;
  
  }

  function getFemalesOrMale($gender)
  {
    global $conn;
    global $conn2;
    $stmt = $conn->prepare('SELECT username, first_name, last_name FROM User WHERE gender = ?');
    $stmt->execute(array($gender));    
    $user = $stmt->fetchALL();
    foreach($user as $value){
      echo "<p></p>";
      echo $value['first_name'] . "<br>";
      echo $value['last_name'] . "<br>";
      getPhoto($value['username']);
      echo "<p></p>";   
      }
      return $user;
  
  }

  function getALLHobby($hobby)
  {
    global $conn;
    global $conn2;
    $stmt = $conn->prepare('SELECT username, first_name, last_name FROM User WHERE hobby = ?');
    $stmt->execute(array($hobby));    
    $user = $stmt->fetchALL();
    foreach($user as $value){
      echo "<p></p>";
      echo $value['first_name'] . "<br>";
      echo $value['last_name'] . "<br>";
      getPhoto($value['username']);
      echo "<p></p>";   
      }
      return $user;
  
  }

  function getALLFood($food)
  {
    global $conn;
    global $conn2;
    $stmt = $conn->prepare('SELECT username, first_name, last_name FROM User WHERE food = ?');
    $stmt->execute(array($food));    
    $user = $stmt->fetchALL();
    foreach($user as $value){
      echo "<p></p>";
      echo $value['first_name'] . "<br>";
      echo $value['last_name'] . "<br>";
      getPhoto($value['username']);
      echo "<p></p>";   
      }
      return $user;
  
  }

  function getALLProfession($profession)
  {
    global $conn;
    global $conn2;
    $stmt = $conn->prepare('SELECT username, first_name, last_name FROM User WHERE profession = ?');
    $stmt->execute(array($profession));    
    $user = $stmt->fetchALL();
    foreach($user as $value){
      echo "<p></p>";
      echo $value['first_name'] . "<br>";
      echo $value['last_name'] . "<br>";
      getPhoto($value['username']);
      echo "<p></p>";   
      }
      return $user;
  
  }

  function getALLFilm($film)
  {
    global $conn;
    global $conn2;
    $stmt = $conn->prepare('SELECT username, first_name, last_name FROM User WHERE film = ?');
    $stmt->execute(array($film));    
    $user = $stmt->fetchALL();
    foreach($user as $value){
      echo "<p></p>";
      echo $value['first_name'] . "<br>";
      echo $value['last_name'] . "<br>";
      getPhoto($value['username']);
      echo "<p></p>";   
      }
      return $user;
  
  }



  function get_ALL_my_Informations($username){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM User WHERE username = ?');
    $stmt->execute(array($username));
    $user = $stmt->fetchALL();
    
      foreach ($user as $row)
        {
          echo "<tr>";
               echo "<td class='cell'> Username</td>";
               echo "<td>" . $row['username'] . "</td>";
          echo "</tr>";
          echo "<tr>";
               echo "<td> First Name</td>";
               echo "<td>" . $row['first_name'] . "</td>";
          echo "</tr>";
          echo "<tr>";
              echo "<td> Last Name</td>";
              echo "<td>" . $row['last_name'] . "</td>";
          echo "</tr>";
          echo "<tr>";
              echo "<td> Gender</td>";
              echo "<td>" . $row['gender'] . "</td>";
          echo "</tr>";
          echo "<tr>";
              echo "<td> Age</td>";
              echo "<td>" . $row['age'] . "</td>";
          echo "</tr>";
          echo "<tr>";
              echo "<td> Email </td>";
              echo "<td>" . $row['email'] . "</td>";
          echo "</tr>";
          echo "<tr>";
              echo "<td> Hometown</td>";
              echo "<td>" . $row['hometown'] . "</td>";
          echo "</tr>";
          echo "<tr>";
              echo "<td> Type of Music </td>";
              echo "<td>" . $row['music'] . "</td>";
          echo "</tr>";
          echo "<tr>";
              echo "<td> Type of Film </td>";
              echo "<td>" . $row['film'] . "</td>";
          echo "</tr>";
          echo "<tr>";
              echo "<td> Profession </td>";
              echo "<td>" . $row['profession'] . "</td>";
          echo "</tr>";
          
          echo "<tr>";
              echo "<td> Hobby </td>";
              echo "<td>" . $row['hobby'] . "</td>";
          echo "</tr>";

          echo "<tr>";
              echo "<td> Type of food </td>";
              echo "<td>" . $row['food'] . "</td>";
          echo "</tr>";
        }
       
      
      }

  function getPhoto($username){
  global $conn;
  
  $stmt = $conn->prepare('SELECT image_name FROM photo WHERE username = ?');
  $stmt->execute(array($username));
  $user = $stmt->fetch();	
  $local = $user['image_name'];
  $_SESSION['local'] = $local;

   echo "<img src='uploads/$local' name='profile_picture' width='35%'>";}


   function combobox($arrDados, $valorSelecionado = null) {
    echo "<option></option>";
    foreach ($arrDados as $key => $value) {
        $selected = ($valorSelecionado == $key['username']) ? "selected=\"selected\"" : null;

        $cois = $value['username'];
        $value2=$value['first_name'];
        $value3=$value['last_name'];
        echo "<option value=\"$cois\" $selected >$value2 $value3</option>";
    }
}
?>