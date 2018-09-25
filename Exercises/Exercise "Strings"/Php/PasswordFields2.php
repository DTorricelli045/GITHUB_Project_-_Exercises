<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

PasswordFields2.php -->

    <meta charset="UTF-8">
    <title>Password Fields 2</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Password Fields 2</h2>
<?php 
  $record = "jdoe:8w4dso3a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash:extra 1:extra 2";
  $passwordFields = array("login name", "optional encrypted password", "numerical user ID", "numerical group ID", "user name of comment field", "user home directory", "optional user command interpreter");


  $extraFields = 0;
  $fields = explode(":", $record);

  foreach ($fields as $fieldIndex => $fieldValue) {
    if ($fieldIndex < count($passwordFields)) {
      echo "<p>The {$passwordFields[$fieldIndex]} is <em>$fieldValue</em></p>\n";
    }
    else {
      ++$extraFields;
      echo "<p>Extra field # $extraFields is <em>$fieldValue</em></p>";
    }

  }
?>
   

</body>
</html>