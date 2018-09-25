<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

Presidents 2.php -->

    <meta charset="UTF-8">
    <title> Presidents 2</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Presidents 2</h2>
<?php 
  $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
  $ThisPresident = strtok($presidents, ";");

  while ($ThisPresident != NULL) {
    echo "$ThisPresident<br>";
    $ThisPresident = strtok(";");
  }
   
?>
   

</body>
</html>