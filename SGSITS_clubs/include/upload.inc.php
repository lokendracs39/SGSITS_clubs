<?php

    if(isset($_POST['submit']))
    {
      include_once 'db.inc.php';
      $file = $_FILES['File'];
      //print_r($file);
      //exit();
      $fileName = $_FILES['File']['name'];
      $fileTmpName = $_FILES['File']['tmp_name'];
      $fileSize = $_FILES['File']['size'];
      $fileError = $_FILES['File']['error'];
      $fileType = $_FILES['File']['type'];
      $fileExt = explode('.',$fileName);
      $fileActualExt = strtolower(end($fileExt));
      $allowed = array('jpg','jpeg','png','pdf');

      if(in_array($fileActualExt,$allowed)) {
        if($fileError === 0) {
          if($fileSize < 1000000) {
            //inserting img into database
            $file_name = mysqli_real_escape_string($conn,$_FILES['File']['name']);
            $discrip = mysqli_real_escape_string($conn,$_POST['discription']);
            
            $sql = "INSERT INTO news_info (discription,record) VALUES ('$discrip','$file_name')";
            mysqli_query($conn,$sql);
            //storing img into folder name img
            $fileDestination = "../img/".$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: ../index/index.php?uploadsuccess");
          } else {
            echo "File is too big";
          }
        } else {
          echo "There was an error while uploading file";
        }
      } else {
        echo "You can't upload file of this kind";
      }
    }
 ?>
