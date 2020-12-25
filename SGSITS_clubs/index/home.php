<!DOCTYPE html>
<html>
      <head>
        <!--<style>
            body{
              background-image: url("dream-image.jpg");
            }
        </style>-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link href="materialize.css" rel="stylesheet" type="text/css">
        <link href="home.css" rel="stylesheet" type="text/css">
        <link href="signup.css" rel="stylesheet" type="text/css">
        <link href="navbar.css" rel="stylesheet" type="text/css">
            <title>Home</title>

          <center>
            <!--<img src="../img/sgsits.png" height="120px" weight="120px" style="padding-top:50px; "> </img></br>-->
            <h1>sgsits clubs</h1>
          </center>

      </head>
      <body>
        <ul class="list_nav">
          <li class="list_nav"><a class="active" href="home.php">Home</a></li>
          <li class="list_nav"><a href="all_news.php">News</a></li>
          <li class="list_nav"><a href="#contact">Contact</a></li>
          <li class="list_nav"><a href="#about">About</a></li>
          <li class="list_nav"><a href="login.php" style="margin-left:900px; color:red;">Admin login</a></li>
        </ul>

        <?php
          //  include_once 'hor_navbar.php';
         ?>
       </br></br>
        <form>
            <div class="slideshow-container">
            <div class="mySlidesfade" id="fade">
              <img src="../img/e-cell.jpg" width = "1170" height = "422" style="float:right; padding-top:23px;">
            </div>

            <div class="mySlidesfade" id="fade">
              <img src="../img/e-cell1.jpg" width = "1170" height = "422" style="float:right; padding-top:23px;">
            </div>

            <div class="mySlidesfade" id="fade">
              <img src="../img/e-cell2.jpg" width = "1170" height = "422" style="float:right;padding-top:23px;" >
            </div>

            <div class="mySlidesfade" id="fade">
              <img src="../img/e-cell3.jpg" width = "1170" height = "422" style="float:right;padding-top:23px;" >
            </div>

            </div>
            <br>
  </form>

          <div class="list">
            <ul>
              <p class="main_list_head">sgsits clubs</p>
              <li><a href="codefoster.php" targer="_blank">CodeFoster</a></li>
              <li><a href="computerclub.php" targer="_blank">Computer Club</a></li>
              <li><a href="mgzn_cmt.php" targer="_blank">Magazine and Literary Committee</a></li>
              <li><a href="trivim.php" targer="_blank">TRIVIM</a></li>
              <li><a href="#" targer="_blank">club ojaswa</a></li>
              <li><a href="#" targer="_blank">E-CELL SGSITS</a></li>
              <li><a href="kshitij.php" targer="_blank">KSHITIJ</a></li>
              <li><a href="#" targer="_blank">club Pratibimb</a></li>
              <li><a href="#" targer="_blank">IT #include</a></li>
            </ul>
          </div>
        </br>

          <div>
          </br>
            <p class = "blink_news" style="margin-left:20px; background-color: black;">NEWS & UPDATE </p>
           <div class="img_upload" style="margin-left:20px;">
              <?php
                  include_once '../include/show_uploaded_result.inc.php';
               ?>
          </br></br>

          </div>
          </div>

          <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlidesfade");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 4 seconds
          }
          function contact()
          {

          }
          </script>
      </body>
</html>
<?php
    include_once 'footer.php';
 ?>
