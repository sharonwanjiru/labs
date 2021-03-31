<?php
/*
require_once 'db.php';
include 'user.php';
$con = new DBConnector();
$pdo = $con->connectToDB();
session_start();


if(isset($_POST['login']))
{
   
   $email = $_POST['email'];
   $password = $_POST['password']; 
 
    if($email=="") {
      $error[] = "provide email id !"; 
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
   }
   else if($password=="") {
      $error[] = "provide password !";
   }
 
   /*else if(strlen($password) < 6){
      $error[] = "Password must be atleast 6 characters"; 
   }*/
   
  /* else
   {
      try
      {
         $stmt = $DB_con->prepare("SELECT email FROM persons WHERE  email=:email");
         $stmt->execute(array(':email'=>$email));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
          if($row['email']==$email) {
            $error[] = "sorry email id already taken !";
         }
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
    }
}*/

?>
<?php
    include_once 'user.php';
    include_once 'db.php'; 
    $con = new DBConnector();
    $pdo = $con->connectToDB();
    $event = isset($_POST['event'])?$_POST['event']:"";
    if($event == "login") 
    {      
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = new User($email, $password);
        echo $user->login($pdo);
    }
?> 