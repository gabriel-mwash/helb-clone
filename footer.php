<?php 

?>

<html>
   <body>
      <p>hello world</p>
      <button id="button1">click me</button>
   </body>
   <script>
      document.getElementById("button1").addEventListener("click", function() {
         document.location.href="register.php";
      })
   </script>
</html>
