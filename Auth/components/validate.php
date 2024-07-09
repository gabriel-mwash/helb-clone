<?php
require "./dbconnect.php";
if (isset($_POST["login_user"])) {
   $stmt = "select * from helbdb";
   $result = $conn -> query($sql);

   while ($row = $result -> fetch_assoc()) {
      if (($email == $row["email"]) && ($password = $row["password"])) {
         echo "login successfully";
      }
      elseif (($email != $row["email"])) {
         echo "enter the correct email";
      }
      else {
         echo "enter the correct password";
      }
   }
}

?>
