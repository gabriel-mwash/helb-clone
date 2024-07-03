<?php
require "header.php";
require "navigation.php";
require "form.php";

if (array_key_exists("reg", $_POST)) {
   require "register.php";
   echo "hello world";
}


/*
require "navigation.php";
require "form.php";
require "footer.php";
*/