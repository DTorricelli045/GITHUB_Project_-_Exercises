<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

Presidents.php -->

    <meta charset="UTF-8">
    <title> Presidents</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Presidents</h2>
<?php 
    $presidents = array("George Washington", "John Adams", "Thomas Jefferson", "James Madison", "James Monroe");
    $yearsInOffice = array("1789 to 1797", "1797 to 1801", "1801 to 1809", "1809 to 1817", "1817 to 1825");
    $outputTemplete = "<p>President [NAME] served from [TERM]<?p>\n";

    foreach ($presidents as $sequence => $value) {
       $tempString = str_replace("[NAME]", $value, $outputTemplete);
       $outputString = str_replace("[TERM]", $yearsInOffice[$sequence],$tempString);
       echo $outputString;
    };

   
?>
   

</body>
</html>