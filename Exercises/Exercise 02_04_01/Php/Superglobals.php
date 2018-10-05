<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 26 Sept 2018

Superglobals.php -->

    <meta charset="UTF-8">
    <title>Super Globals</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Superglobals</h2>
    <?php
        echo "<h3>Superglobal array \$_SERVER[]</h3>";
        echo "<p>The name of the current script is: " , $_SERVER["SCRIPT_NAME"] , "</p> <br>";
        echo "<p>This script was executed with the following server software: " , $_SERVER["SERVER_SOFTWARE"] , "</p> <br>";
        echo "<p>This script was requested with the following server protocol: " , $_SERVER["SERVER_PROTOCOL"] , "</p> <br>";
        echo "<p>This script is running on the following server name: " , $_SERVER["SERVER_NAME"] , "</p> <br>";
        echo "<p>This script is running on the following server address: " , $_SERVER["SERVER_ADDR"] , "</p> <br>";
        echo "<p>This script is running with the following gateway interface: " , $_SERVER["GATEWAY_INTERFACE"] , "</p> <br>";
        echo "<p>This script is running on the following request method: " , $_SERVER["REQUEST_METHOD"] , "</p> <br>";
    ?>

</body>

</html>