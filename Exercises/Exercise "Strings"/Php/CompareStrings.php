<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

CompareStrings.php -->

    <meta charset="UTF-8">
    <title>Compare Strings</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Compare Strings</h2>
<?php 

    //Global Variables
    $firstString = "Geek2Geek";
    $SecondString = "Geezer2Geek";

    //if both strings are the same, echo
    if ($firstString == $SecondString) {
        echo "<p>Both strings are the same.</p>";
    //else echo and compare strings
    } else {
        echo "<p>Both strings have " . similar_text($firstString, $SecondString) . " character(s) in common.</p>";
        echo "<p>You must change " . levenshtein($firstString, $SecondString) . " Character(s) to make the strings the same.</p>";
    }
    
?>
   

</body>
</html>