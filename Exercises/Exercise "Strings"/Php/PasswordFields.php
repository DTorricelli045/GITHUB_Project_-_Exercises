<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

PasswordFields.php -->

    <meta charset="UTF-8">
    <title>Password Fields</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Password Fields</h2>
<?php 
  $record = "jdoe:8w4dso3a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash:extra 1:extra 2";
  $passwordFields = array("login name", "optional encrypted password", "numerical user ID", "numerical group ID", "user name of comment field", "user home directory", "optional user command interpreter");

  $fieldIndex = 0;
  $extraFields = 0;
  $currField = strtok($record, ":");

  while ($currField != NULL) {
    if ($fieldIndex < count($passwordFields)) {
      echo "<p>The {$passwordFields[$fieldIndex]} is <em>$currField</em></p>\n";
    }
    else {
      ++$extraFields;
      echo "<p>Extra field # $extraFields is <em>$currField</em></p>";
    }
    $currField = strtok(":");
    ++$fieldIndex;
  }
?>
   

</body>
</html>