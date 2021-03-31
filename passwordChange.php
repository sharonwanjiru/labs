<!DOCTYPE html>
<html>
  <head>
     <title>password</title>
      <link rel="stylesheet" type="text/css" href="lab.css">
      

  </head>
  <body>
    
  	 <form action="" method="">
      
  	 	<fieldset class="logins">
  	 		<h1><strong> password change </strong></h1>
  	 		
  	 		<p>
  	 			<label for="oldpass" class="login"> old Password :</label>
                <input type="password" id="oldpass" name="oldpassword"
                  minlength="255" required  >
  	 		</p>
        <p>
          <label for="newpass" class="login">New Password :</label>
                <input type="password" id="newpass" name="newpassword"
                  minlength="255" required  >
        </p>
  	 		<p>
     		      <input type="submit" name="password" value="update" class="button">
                </p>

           
  	 	</fieldset>

  	 </form>

  </body>
</html>