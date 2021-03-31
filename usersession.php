<?php

 include 'user.php';
 $con = new DBConnector();
 $pdo = $con->connectToDB();
 
  $auth_user = new User();
 // $email = $_SESSION['user_session'];
  $stmt = $auth_user->runQuery("SELECT * FROM persons WHERE email=:email");
  $stmt->execute(array(":email"=>$email));  
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
 
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
	<nav>
	<label class="logo"> Details </label>
    <nav>
    	 <h2 class="title2">Details</h2>
	<p><h1>FULL NAMES <?php echo $row['fullName'];?></h1></p>
    <p><h1>EMAIL</h1></p>
    <p><h1>CITY</h1></p>
    <p><h1>PROFILE PICTURE</h1></p>
    
    <a href="logout.php" title= "logout" ><p><input type="submit" name="logout" value="logout" class="button"></p></a> 
    <p class="login"> 
                 Change password?  <a href="passwordChange.php" title= "password"  >password</a> 
    </p>


 
</body>
</html>