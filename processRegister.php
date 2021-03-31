<?php

 include_once 'user.php';
 include_once 'db.php';
 $con = new DBConnector();
 $pdo = $con->connectToDB();
 $user = new User();
 //$event = $_POST['register'];
 //if($event){
    $event = isset($_POST['event'])?$_POST['event']:"";
    if($event == "Register")
    {
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $image=$_FILES['image'];
    $filename = $_FILES["image"]["name"]; 
    $tempname = $_FILES["image"]["tmp_name"];     
    $folder = "img/".$filename; 
    if (move_uploaded_file($tempname, $folder))  { 
        $msg = "Image uploaded successfully"; 
       $user = new User($email, $password);
        $user->setfullName($fullName);
        $user->setimage($filename);
        $user->setcity($city);
        echo $user->register($pdo);
    }
    else{ 
        $msg = "Failed to upload image"; 
  } 
  echo $user->register($pdo);

 // include_once 'user.php';
 }
?>