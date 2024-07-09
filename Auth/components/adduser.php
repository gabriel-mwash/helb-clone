<?php
require "./dbconnect.php";
if (isset($_POST["regiser_user"])) {
   $conn = mysqli_connect($host, $user, $pssword, $dbname);

   $firstName = $_POST["first_name"];
   $lastName = $_POST["last_name"];
   $email = $_POST["email"];
   $passwd = $_POST["password"];

   $stmt = mysqli_prepare(
      $conn, 
      "insert into helbdb (firstName, LastName, email, password) VALUES (?, ?, ?, ?)"
   );
}

mysqli_stmt_bind_param($stmt, "ssss", $fistName, $lastName, $email, $passwd);
?>
