<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="signup.css" type="text/css" rel="stylesheet">
    <link href="materialize.css" rel="stylesheet" type="text/css">
    <link href="home.css" type="text/css" rel="stylesheet">
    <title>SignUp</title>
  </head>
  <body>
    <a class = "sign_up_link" href="home.php" style="float:right;">HOME</a>
    <div  class="signUp">
      <p class = "head">sgsits clubs</p>
    <form action = '../include/signup.inc.php' method='post' onsubmit = "return f1()">
      <div class="inside_form">
          <input type="text" name="Fname" class="fname" id = "fname" placeholder="FullName" height="20px"; required/></br>
          <span id="fnames" style="color:blue; font-size:12px;"></span></br>
          <input type="text" name="username" class="uname" id="uname"  placeholder="Username" required/></br>
          <span id="unames" style="color:blue; font-size:12px;"></span></br>
          <input type="password" name="pwd" class="password" id="password" placeholder="Password" required /></br>
          <span id="passwords" style="color:blue; font-size:12px;"></span></br>
          <input type="password" name="pwd" class="password" id="cpassword" placeholder="Confirm Password" required/></br>
          <span id="cpasswords" style="color:blue; font-size:12px;"></span></br>
          <input type="email" name="email" class="email" id="email" placeholder="Email" required /></br>
          <span id="emails" style="color:blue; font-size:12px;"></span></br>
          <input type="submit" name="submit" value="Sign up" class = "submit" /></br></br>
        </div>
      </form>
      <p class="ask_login"> Have an account? <a href="login.php">Log in</a></p>
      </div>

        <script>
            function f1()
            {

              var x1 = document.getElementById('fname').value
              if(x1.length<3 || x1.length>10)
                {
                  document.getElementById('fnames').innerHTML = "Name should be 3-10 char long";
                  return false;
                }
                if(!isNaN(x1))
                {
                  document.getElementById('fnames').innerHTML = "Name contains alphabets only";
                  return false;
                }

                //validation for Username
             var x2 = document.getElementById('uname').value
             if(x2.length<3 || x2.length>10)
             {
               document.getElementById('unames').innerHTML = "userid should be 3-10 char long";
               return false;
             }
             //validation for password
             var x3 = document.getElementById('password').value
             if(x3.length<3 || x3.length>10)
             {
               document.getElementById('passwords').innerHTML = "password should be 3-10 char long";
               return false;
             }

             //validation for confirm password
             var x3 = document.getElementById('password').value
             var x4 = document.getElementById('cpassword').value
             if(x3!=x4)
             {
               document.getElementById('cpasswords').innerHTML = "password not match";
               return false;
             }

             //validating emails
             var x5 = document.getElementById('email').value
             if(x5.charAt(x5.length-4) != '.' && x5.charAt(x5.length-3) != '.')
             {
               document.getElementById('emails').innerHTML = "please enter valid email";
               return false;
             }
            }
        </script>
  </body>
  <?php
    include_once 'footer.php';
  ?>
</html>
