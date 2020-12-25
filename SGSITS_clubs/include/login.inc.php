<?php

session_start();

    if(isset($_POST['submit'])) {
      include_once 'db.inc.php';
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $pwd = mysqli_real_escape_string($conn,$_POST['password']);

      //Error handlers
      //Check if input are Empty

      if(empty($email) || empty($pwd)) {

      } else {
        $sql = "SELECT * from admin where email = '$email' or password = '$pwd'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1) {
          header("Location: ../index/login.php?login=error");
          exit();
        } else {
          if($row = mysqli_fetch_assoc($result)) {
            //De-hashing the password
            //$hashedPwdCheck = password_verify($pwd,$row['password']);

            //if($hashedPwdCheck == false) {
            if($pwd!=$row['password']) {

              header("Location: ../index/login.php?login=error");
              exit();
            } //else if($hashedPwdCheck == true) {
              else if($pwd==$row['password']){
              //Log in the user here
              //$_SESSION['u_id'] = $row['Name'];
              //$_SESSION['u_first'] = $row['user_name'];
              //$_SESSION['u_last'] = $row['password'];
              //$_SESSION['u_email'] = $row['email'];
              header("Location: ../index/index.php?login=success");
              exit();
            }
          }
        }
      }
    } else {
      header("Location: ../index/login.inc.php?login=error");
      exit();
    }
 ?>
