<!DOCTYPE html>
<html>
  <head>
     <title>REGISTER</title>
     <link rel="stylesheet"  href="font">
       <link rel="stylesheet" type="text/css" href="lab.css">
       
  </head>
  <body>
     <form action="processRegister.php" method="POST">
     
      <fieldset class="register">

        <h1><strong> Register </strong></h1>

        <p>
          <label for="fullname" class="field">Full Name</label>
          <input type="text" name="fullname" id="fullname">
        </p>
        <p>

               <label for="email" class="field" > Email</label>
              <input type="email" name="email" id="email">
        </p>
        <p>
           <label for="pass" class="field">Password (255 characters max):</label>
          <input type="password" id="pass" name="password"
                  maxlength="255" required>
          
        </p>
        <p>

               <label for="city" class="field" > City</label>
              <input type="text" name="city" id="city">
        </p>


        <p>
                <label for="image" class="field">Profile image</label>
                <input type="file" name="image" id="image">
               </p>
         <p>
              <input type="submit" name="register" value="register" class="button">
        </p>
        <p class="login"> 
                 Existing account?  <a href="login.php" title= "register"  >Login</a> 
            </p>

       


      </fieldset>

     </form>

  </body>
</html>