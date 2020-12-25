<?php
    include_once '../include/db.inc.php';
?>

<html>
  <head>
    <title>News & update</title>
        <link href="signup.css" rel="stylesheet" type="text/css">
        <link href="materialize.css" rel="stylesheet" type="text/css">
        <link href="home.css" rel="stylesheet" type="text/css">

        <center>
          <h1>sgsits clubs</h1>
        </center>

  </head>
  <body>
    <a class = "sign_up_link" href="home.php" style="float:right;">HOME</a>
 <div  class="signUp">
   <p class = "head" style="margin-left:0px;">Below are all results:</p>
       <?php
           $sql = "SELECT * FROM news_info ORDER BY ID DESC LIMIT 20";
           $result = mysqli_query($conn,$sql);

           while($row = mysqli_fetch_array($result)) {
             echo "<div>";
             echo "<a href='../img/".$row['record']."' target = '_blank'>".$row['discription']."";
             echo "</br>";
             echo "</div>";
           }
        ?>


 </div>
</body>
</html>
