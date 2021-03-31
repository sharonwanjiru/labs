<?php
 include 'user.php';
 $user_logout = new User();
 $user_logout->logout($pdo);
 $user_logout->redirect('login.php');
?>