<!DOCTYPE html>
<html>
  <head>
     <title>LOGIN</title>
      <link rel="stylesheet" type="text/css" href="lab.css">
      

  </head>
  <body>
    
  	 <form action="processLogin.php" method="post">
      
  	 	<fieldset class="logins">
  	 		<h1><strong> Login </strong></h1>
  	 		<p>
  	 			<label for="email" class="login" >Email</label>
     		   <input type="email" name="email" id="email" placeholder="email">
  	 		</p>
  	 		<p>
  	 			<label for="pass" class="login">Password :</label>
                <input type="password" id="pass" name="password"
                  maxlength="255" required  >
  	 		</p>
  	 		<p>
     		      <input type="submit" name="login" value="LOGIN" class="button">
        </p>
        <p class="login"> 
                   <a href="usersession.php" title= "register" >LOGIN</a> 
        </p>

        <p class="login"> 
                 Dont have an account?  <a href="register.php" title= "register"  >register</a> 
        </p>

  	 	</fieldset>

  	 </form>

  </body>
</html>