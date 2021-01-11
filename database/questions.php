<?php
    
    function begin_experience($user1, $user2){
      global $conn;
      $stmt = $conn->prepare('INSERT INTO experience (user1, user2) VALUES (?, ?)');
      $stmt->execute(array($user1, $user2));
      if($stmt) return TRUE;
      else return FALSE;
    }
     
    function get_User1($id){
      global $conn;
      $stmt = $conn->prepare('SELECT user1 FROM experience WHERE id = ?');
      $stmt->execute(array($id)); 
      $id_aux = $stmt->fetch();  
      $id2 = $id_aux['user1'];
      return $id2; 
    }

    function get_User2($id){
      global $conn;
      $stmt = $conn->prepare('SELECT user2 FROM experience WHERE id = ?');
      $stmt->execute(array($id)); 
      $id_aux = $stmt->fetch();  
      $id2 = $id_aux['user2'];
      return $id2; 
    }

  
    function get_ID($user1, $user2){
      global $conn;
      $stmt = $conn->prepare('SELECT id FROM experience WHERE (user1, user2) = (?,?)');
      $stmt->execute(array($user1, $user2)); 
      $id_aux = $stmt->fetch();  
      $id = $id_aux['id'];
      return $id; 
    }

    function questionaire($id, $q1, $q2 ,$q3, $q4, $q5, $q6, $q7, $q8, $q9){
      global $conn;
      $stmt = $conn->prepare('INSERT INTO answer (id, q1, q2, q3, q4, q5, q6, q7, q8, q9) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
      $stmt->execute(array($id, $q1, $q2 ,$q3, $q4, $q5, $q6, $q7, $q8 , $q9));
      if($stmt) return TRUE;
      else return FALSE;
    }

    function get_All_answers($id){
      global $conn;
      $stmt = $conn->prepare('SELECT * FROM answer WHERE id = ?');
      $stmt->execute(array($id));
      $user = $stmt->fetchALL();
      foreach ($user as $item) {
        echo $item['q1'] . "<br>";
        echo $item['q2'] . "<br>";
        echo $item['q3'] . "<br>";
        echo $item['q4'] . "<br>";
        echo $item['q5'] . "<br>";
        echo $item['q6'] . "<br>";
        echo $item['q7'] . "<br>";
        echo $item['q8'] . "<br>";
        echo $item['q9'] . "<br>";
        echo "<br>";
        echo "<br>";
      }	
    }
   
    function get_ALL_exp_on_me($user2){
      global $conn;
      $stmt = $conn->prepare('SELECT id FROM experience WHERE user2 = ?');
      $stmt->execute(array($user2));
      $cois = $stmt->fetchALL();  
      foreach($cois as $value){
        $aux = $value['id'];
        $user2 = get_User1($aux);       
        echo $user2. "<br>";
        getPhoto($user2);
        echo "<br>";
        $help = get_All_answers($aux);  
        }
     return TRUE;
     }

    function send_message($sender, $receiver, $message){
      global $conn;
      $stmt = $conn->prepare('INSERT INTO carta (sender, receiver, mess) VALUES (?, ?, ?)');
      $stmt->execute(array($sender, $receiver, $message));
      if($stmt) 
        return TRUE;
      else
        return FALSE;
    }

   
     
    function get_ALL_users_exp_on_me($username){

      global $conn;
      $stmt = $conn->prepare('SELECT id FROM experience WHERE user2 = ?');
      $stmt->execute(array($username));
      $cois = $stmt->fetchALL();  
      $users= array();
      foreach($cois as $value){
        $aux = $value['id'];
        $user2 = get_User1($aux);  
        
        array_push($users, $user2);
       


        }
      
    return $users;

  
  }

  function combobox2($arrDados, $valorSelecionado = null) {
    echo "<option></option>";
    foreach ($arrDados as $key => $value) {
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;

        $cois = $value;
     
        echo "<option value=\"$cois\" $selected >$cois</option>";
    }
  }
    
  function showALLMyMess($username){
    global $conn;
    $stmt = $conn->prepare('SELECT sender, mess FROM carta WHERE receiver = ?');
    $stmt->execute(array($username));    
    $user = $stmt->fetchALL();
    foreach($user as $value){
      echo "<p></p>";
      echo $value['sender'] . "<br>";
      echo $value['mess'] . "<br>";
     
      echo "<p></p>";   
      }
      return $user;


  }

?>