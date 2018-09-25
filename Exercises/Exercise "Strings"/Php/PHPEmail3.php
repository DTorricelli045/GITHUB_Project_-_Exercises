<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

PHPEmail3.php -->

    <meta charset="UTF-8">
    <title>PHP Email 3</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>PHP Email 3</h2>
<?php 

    $emailAddress = array("john.smith@php.test", "mary.smith.mail@php.example", "john.johns@php.invalid", "alan.smithee@test", "jsmith@example.com", "jsmith456@test", "mjones@example", "Mjones@example.net", "jane.a.doe@example.org");


    function sortAddresses($addresses) {
        $sortedAddresses = array();
        $ilimit = count($addresses) - 1;
        $jlimit = count($addresses);
        for ($i = 0; $i < $ilimit; $i++) {
            $currentAddress = $addresses[$i];
            for ($j = $i +1; $j < $jlimit; $j++) {
                if (strcasecmp($currentAddress, $addresses[$j]) > 0) {
                    $tempVal = $addresses[$j];
                    $addresses[$j] = $currentAddress;
                    $currentAddress = $tempVal;
                }
            }
            $sortedAddresses[] = $currentAddress;
        }
        return($sortedAddresses);
    }
    $sortedAddresses = sortAddresses($emailAddress);
    $sortedAddressesList = implode(", ", $sortedAddresses);
    echo "<p>Sorted addresses $sortedAddressesList</p>\n";





    //Function to validate email addresses
    function validateAddress($address) {
        if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
            return true;
        }
        else {
            return false;
        }
    }

    foreach ($sortedAddresses as $value) {
        if (validateAddress($value) === false) {
            echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
        }
    }
?>
   

</body>
</html>