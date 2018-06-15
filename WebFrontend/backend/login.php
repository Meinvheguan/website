<?php
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
      echo "<h1>Login incorrect.</h1>\n";
   } else {
      echo "<p>Login success.</p>\n";
      // print_r($_POST);
      header("Location:logedin.php?name=".$row['name']);//switch to the logged in page
   }
}
?>
<p>Please Login</p>
<form method="post">
<p>Email:
<input type="text" size="40" name="email"></p>
<p>Password:
<input type="text" size="40" name="password"></p>
<p><input type="submit" value="Login"/>
<a href="<?php echo($_SERVER['PHP_SELF']);?>">Refresh</a></p>
</form>
