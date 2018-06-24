<?php
require_once "pdo.php";
session_start();
$search = "\"%".$_SESSION['search']."%\"";
$stml = $pdo->query("SELECT * FROM videos WHERE video_name LIKE ".$search);
$rows = $stml->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $rows){
  $v_name = $rows["video_name"];
  $url = $rows["url"];?>
  <video width="320" height="240" controls>
    <source src=<?php echo $url ?> type="video/mp4"> Your browser does not support the video tag.
</video>
<?php
}
?>
