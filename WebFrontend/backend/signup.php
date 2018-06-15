<?php

// Demand a GET parameter
session_start();
require_once "pdo.php";
$failure = false;
if ( isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Password'])) {
  if (strlen($_POST["Name"]) < 1){
    $failure = "Name is required";
  }
  else{
    $sql = "SELECT name FROM users
        WHERE email = :em";

    $stmt1 = $pdo->prepare($sql);//escape
    $stmt1->execute(array(':em' => $_POST['Email']));
    $row = $stmt1->fetch(PDO::FETCH_ASSOC);

    // var_dump($row);  //see the array
   if ( $row ) {//input in the database or not
     $_SESSION['error'] = "You are already a member!";
      header('Location:signup.php');
      return;
   }
   else{
     $stmt = $pdo->prepare('INSERT INTO users(name, email, password) VALUES (:mk, :yr, :mi)');
     $stmt->execute(array(
             ':mk' => $_POST['Name'],
             ':yr' => $_POST['Email'],
             ':mi' => $_POST['Password'])
         );
     $success = "Record inserted";
     echo('<p style="color: green;">'.htmlentities($success)."</p>\n");
     $_SESSION['name'] = htmlentities($_POST['Name']);
     header("Location:../index.php");//To prevent the form resubmission when refreshing the page
     return;
   }

  }
}

if ( $failure !== false ) {
    // Look closely at the use of single and double quotes
    echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
}
// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: ../index.php');
    return;
}
// $stmt = $pdo->query("SELECT name, email, password FROM users"); // debug code
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach ($rows as $rows){
//   echo $rows['name'].$rows['email'].$rows['password']."\n";
//
// }

?>
<!DOCTYPE html>
<html>
<head>
<title>Sign up Page</title>
<?php require_once "bootstrap.php"; ?>
</head>
<?php
if(isset($_SESSION['error'])){
  echo $_SESSION['error'];
}
?>
<body>
<div class="container">
<h1>Please Sign up</h1>

<form method="post">
  <label for="name">Name:</label>
  <input type="text" name="Name" id="name"><br/>
  <label for="email">Eamil:</label>
  <input type="text" name="Email" id="email"><br/>
  <label for="password">Password:</label>
  <input type="text" name="Password" id="password"><br/>


<input type="submit" value="Add">
<input type="submit" name="logout" value="Logout">
</form>


</html>
