
<?php
  include_once 'db.inc.php';

    $sql = "SELECT * FROM news_info ORDER BY ID DESC LIMIT 5";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result)) {

        echo "<div id='img_id'>";
          echo "<a href='../img/".$row['record']."' target='_blank'>".$row['discription']."";
        echo "</div>";
    }
    echo "<a href='../index/all_news.php' target='_blank'>view all</a>";
 ?>
