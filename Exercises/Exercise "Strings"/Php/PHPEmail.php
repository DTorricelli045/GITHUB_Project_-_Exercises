<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

PHPEmail.php -->

    <meta charset="UTF-8">
    <title>PHP Email</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>PHP Email</h2>
<?php 
    $emailAddress = array("john.smith@php.test", "mary.smith.mail@php.example", "john.johns@php.invalid", "alan.smithee@test", "jsmith@example.com", "jsmith456@test", "mjones@example", "mjones@example.net", "jane.a.doe@example.org");

    //Function to validate email addresses
    function validateAddress($address) {
        if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
            return true;
        }
        else {
            return false;
        }
    }

    foreach ($emailAddress as $value) {
        if (validateAddress($value) === false) {
            echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
        }
    }
?>
   

</body>
</html>