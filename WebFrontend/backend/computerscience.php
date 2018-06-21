<?php
require_once "pdo.php";
session_start();
print_r($_SESSION);
if (isset($_SESSION["subject"])){
  $sql = "SELECT * FROM videos WHERE videos.catagory_id = ".$_SESSION["subject"]; //where genre = physics
  $stm = $pdo->query($sql);
  $row = $stm->fetchAll(PDO::FETCH_ASSOC);
  foreach ($row as $row){
    $name = $row["video_name"];
    $url = $row["url"];
    // echo $row["url"];
    echo "watch ";
    echo('<a href='.$row['url'].'>'.$name . '</a> / ');
    // <form action = "computerscience.php" method = "POST">
    //   <button type = "submit"  name = "submit" value = $url>Watch.$name</button>
  }

}

// session_destroy();
?>
