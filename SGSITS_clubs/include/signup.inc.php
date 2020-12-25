<?php

  if(isset($_POST['submit'])) {
  include_once 'db.inc.php';

$first = mysqli_real_escape_string($conn,$_POST['Fname']);
$uid = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

if(empty($first) || empty($uid) || empty($email) || empty($pwd)){
  header("Location: ../index/SignUp.php?signup=empty");
  exit();
} else {
  //check if input character are valid
if(!preg_match("/^[a-zA-Z]*$/" , $first) || !preg_match("/^[a-zA-Z]*$/" , $last)) {
  header("Location: ../index/SignUp.php?signup=invalid");
  exit();
} else
  //Check if email is valid
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index/SignUp.php?signup=email");
    exit();
  }

      else {
                // Hashing the password
                    //$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
                   //Insert the user into the database
                    $sql = "INSERT INTO admin
                    (Name,user_name,password,email)
                     VALUES ('$first','$uid','$pwd','$email')";
                     mysqli_query($conn,$sql);

                     header("Location: ../index/SignUp.php?signup= success");
                     exit();
          }
       }
     }


else {
header("Location: ../index/SignUp.php");
exit();
}

$conn->close();
  ?>
