<?php
require_once 'pdo.php';
if (isset($_POST['submit'])){
  echo "the id is".  $_POST["submit"];
  $cat = $_POST["submit"];
  $name = $_FILES['userfile']['name'];
  $temp = $_FILES['userfile']['tmp_name'];
  print_r($_FILES);

  move_uploaded_file($temp, "uploads/".$name);
  $url = "http://localhost/website/WebFrontend/backend/uploads/$name";
  $sql = "INSERT INTO videos (video_name, url, videos.catagory_id) VALUES (:nm, :lk, :cat)";
  $stml = $pdo->prepare($sql);
  $stml->execute(array(":nm" => $name,
                              ":lk" => $url, ":cat" => $cat
  ));

}
$stm = $pdo->query("SELECT * FROM videos");
$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $rows){
  echo $rows["video_name"];
}
?>

<!doctype html>
<html>
<!-- <head>
  <title> Upload <title/>

</head> -->
<body>
<form action = "uploading.php" method = "POST" enctype = "multipart/form-data">
  File for Computer Science:
  <input type = "file" name = "userfile">
  <button type = "submit" name = "submit" value = "1" >UPLOAD</button>

</form>
<form action = "uploading.php" method = "POST" enctype = "multipart/form-data">
  File for Economics:
  <input type = "file" name = "userfile">
  <button type = "submit" name = "submit" value = "2" >UPLOAD</button>

</form>
</body>
</html>
