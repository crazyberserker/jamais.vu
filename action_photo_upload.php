<?php


include_once('./config/init.php');
include_once('./database/user.php');

$username = $_SESSION['username']; 

if(ISSET($_POST['submit'])){
    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];

    $exp = explode(".", $file_name);
    $ext = end($exp);
    $image = time().'.'.$ext;
    $ext_allowed = array("png", "gif", "jpeg", "jpg");
    $location = "uploads/".$image;
    if(in_array($ext, $ext_allowed)){
        if(move_uploaded_file($file_temp, $location)){
            $stmt = $conn->prepare('INSERT INTO photo (username, image_name) VALUES (?, ?)');
            $stmt->execute(array($username, $image));
        }}

 
 
    
    header('Location: geral.php');
        


    }else{

        header('Location: dashboard.php');
    }


?>
