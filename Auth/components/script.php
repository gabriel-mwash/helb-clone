<?php
require "../components/dbconnect.php";

$conn = mysqli_connect($host, $user, $pssword, $dbname);

if (!$conn) {
   echo "the connection failed". mysqli_connect_errno();
}
else {
   echo "<p>connection established successfully</p>";
}


$conn = mysqli_connect($host, $user, $pssword, $dbname);


if (isset($_POST["register_user"])) {
   $firstName = $_POST["first_name"];
   $lastName = $_POST["last_name"];
   $email = $_POST["email"];
   $passwd = $_POST["password"];
   $stmt = mysqli_prepare(
      $conn, 
      "INSERT INTO userAccounts (firstName, LastName, email, passcode) VALUES (?, ?, ?, ?)"
      );
   mysqli_stmt_bind_param(
      $stmt, "ssss", $firstName, $lastName, $email, $passwd
   );

   mysqli_stmt_execute($stmt);
   mysqli_close($conn);
}


if (isset($_POST["login_user"])) {
   $stmt = "SELECT email, passcode FROM userAccounts";
   $result = mysqli_query($conn, $stmt);

   $email = $_POST["email"];
   $password = $_POST["password"];

   while ($row = mysqli_fetch_assoc($result)) {
      if (($email == $row["email"]) && ($password == $row["passcode"])) {
         echo (
            "<script>
               alert('login successfully!');
            </script>"
         );
      }
      elseif (($email != $row["email"])) {
         echo "<p>enter the correct email</p>";
      }
      elseif ($password != $row["passcode"]) {
         echo "<p>enter the correct password</p>";
      }
   }
}
?>



