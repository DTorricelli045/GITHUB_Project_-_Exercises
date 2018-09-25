<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

ValidateCreditCard.php -->

    <meta charset="UTF-8">
    <title>Validate Credit Card</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Validate Credit Card</h2>
<?php 
//Create array
$creditCard = array("","8910-1234-5678-6543","OOOO-9123-4567-0123");

//run function for every array object
foreach ($creditCard as $indexNumber => $cardNumber) {

    // if the card is empty
   if (empty($cardNumber)) {
       echo "<p>Credit Card Number $indexNumber is invalid because it contains an empty string</p>";
   }
    // else remove dashes and spaces in the array items
   else {
        $creditCardNumber = $cardNumber;
        $creditCardNumber = str_replace("-","",$creditCardNumber);
        $creditCardNumber = str_replace(" ","",$creditCardNumber);
        echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.</p>";

            // if the array item is NOT a number
            if (!is_numeric($creditCardNumber)) {
                echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid because it contains a non-numeric character.</p>";

            //else display message
            } else {
                echo "<p>Credit Card Number $indexNumber $creditCardNumber is a valid Credit Card Number.</p>";
            }
            
   }
}
   
?>
   

</body>
</html>