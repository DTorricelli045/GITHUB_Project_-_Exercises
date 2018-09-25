<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

ValidateLocalAddress.php -->

    <meta charset="UTF-8">
    <title>Validate Local Address</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Validate Local Address</h2>
<?php 

    //Create array
    $email = array("jsmith123@example.org", "john.smith.mail@example.org", "john.smith@example.org", "john.smith@example", "jsmith123@mail.example.org");

    //for each item in the email array
    foreach ($email as $emailAddress) {
        echo "The email address &ldquo;" . $emailAddress . "&rdquo;";
        
        //if string macthes regex, echo this
        if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) == 1) {
            echo " is a valid e-mail address.<br>";
        }
        //if string does not macth regex, echo this instead
        else {
            echo " is not a valid e-mail address.<br>";
        }
    }
?>
   

</body>
</html>