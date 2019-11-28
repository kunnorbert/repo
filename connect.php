<?php
  $user = 'root';
  $pass = '';
  $db = 'szakdolgozat';

  $db = new mysqli('localhost' , $user , $pass , $db) or die("Unable to connect!");

  echo "Great work!";

?>
