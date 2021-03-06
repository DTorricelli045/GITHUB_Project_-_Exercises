<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 26 Sept 2018

NumberForm.php -->

    <meta charset="UTF-8">
    <title>Number Form</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Number Form</h2>
    <?php
        
    //Global variables
    $displayForm = true;
    $number = "";
    if (isset($_POST['$submit'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            $display = false;
        }
        else {
            echo "<p>You need to enter a numeric value..</p>\n";
            $displayForm = true;
        }
    }

    if ($displayForm) {
        ?>
        <form name="numberForm" action="NumberForm.php" method="post">
            <p>
                Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
            </p>
            <p>
                <input type="reset" value="Clear Form"> &nbsp;&nbsp;
                <input type="submit" name="submit" value="Send Form">
            </p>
        <?php
    }
    else {
        echo "<p>Thank you for entering a number.</p>\n";
        echo "<p>Your number, $number, squared is " . ($number * $number) . ".</p>\n";
        echo "<p><a href= \"NumberForm.php\">Try again?</a></p>\n";
    }
    ?>

</body>

</html>