<?php
?>
<html>
      <head>
            <title>login</title>
            <link rel="stylesheet" href='signup.css' type="text/css">
            <link href="materialize.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href='home.css' type="text/css">
      </head>
      <body>
        <a class = "sign_up_link" href="home.php" style="float:right;">HOME</a>
        <div  class="signUp">

          <p class = "head">sgsits clubs</p>

          <form action = '../include/login.inc.php' method='post' onsubmit = "return f1()">
          <div class="inside_form">

              <input type='email' name='email'class = "email" id="email" placeholder="Enter email" required/>
              </br>
              <span id="emails" style="color:blue; font-size:12px;"></span>
              </br>
              <input type='password' name='password' class = "password" id="password" placeholder="Enter password" required/>
            </br>
            <span id="passwords" style="color:blue; font-size:12px;"></span>
            </br>
            <input type='submit' class = "submit" name='submit'></input>
        </div>
      </form>
      <p class="ask_login"> Not Have an account? <a href="signup.php">Sign Up</a></p>
      </div>


      <script>
          function f1()
          {

            var x1 = document.getElementById('email').value
            if(x1.charAt(x1.length-4) != '.' && x1.charAt(x1.length-3) != '.')
            {
              document.getElementById('emails').innerHTML = "please enter valid email";
              return false;
            }
              //validation for Username

           //validation for password
           var x2 = document.getElementById('password').value
           if(x2.length<3 || x2.length>10)
           {
             document.getElementById('passwords').innerHTML = "password should be 3-10 char long";
             return false;
           }

          }
      </script>
      <?php
          include_once 'footer.php';
       ?>
      </body>
</html>
