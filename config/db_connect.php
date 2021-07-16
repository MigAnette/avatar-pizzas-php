<?php 

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  
  // connect to database
  $conn = mysqli_connect('localhost','anette', 'test1234', 'avatar_pizza');

   // check conneciton
   if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

?>