<?php 

include 'config.php';
session_start();

if(!empty($_FILES)){ 
     
    // File path configuration 
    $uploadDir = "uploaded/"; 
    $fileName = basename($_FILES['file']['name']); 
    $uploadFilePath = $uploadDir.$fileName; 
     
    $cur = (int)$_SESSION['id'];
    // Upload file to server 
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){ 
        // Insert file information in the database 
        $insert = $conn->query("INSERT INTO files (file_name, user_id, uploaded_on) VALUES ('".$fileName."', $cur, NOW())"); 
    } 
} 
?>