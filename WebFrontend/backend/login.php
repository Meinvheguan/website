<?php
session_start();
require_once "pdo.php";//connect to the database

// p' OR '1' = '1

if ( isset($_POST['email']) && isset($_POST['password'])  ) {//check input
    // echo("<p>Handling POST data...</p>\n");

    $sql = "SELECT name FROM users
        WHERE email = :em AND password = :pw";

    echo "cool";

    $stmt = $pdo->prepare($sql);//escape
    $stmt->execute(array(
        ':em' => $_POST['email'],
        ':pw' => $_POST['password']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // var_dump($row);  //see the array
   if ( $row === FALSE ) {//input in the database or not
     $_SESSION['error'] = "Incorrect information!";
      header('Location:login.php');
      return;
   } else {
      $_SESSION['success'] = 'Login Succeeded!';
      $_SESSION['name'] = $row['name'];
      // print_r($_POST);
      header("Location:../index.php");//switch to the logged in page
      return;
   }
}
?>
<p>Please Login</p>
<?php
if(isset($_SESSION['error'])){
  echo $_SESSION['error'];
}
?>
<form method="post">
<p>Email:
<input type="text" size="40" name="email"></p>
<p>Password:
<input type="text" size="40" name="password"></p>
<p><input type="submit" value="Login"/>
<a href="<?php echo($_SERVER['PHP_SELF']);?>">Refresh</a></p>
</form>
