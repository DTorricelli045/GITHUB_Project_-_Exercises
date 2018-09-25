<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

MusicalScale.php -->

    <meta charset="UTF-8">
    <title>Musical Scale</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Musical scale</h2>
<?php 
$musiacalScale = array("do", "re", "me", "fa", "so", "la", "ti", "do");
$outputString = "The notes of the musical sale are : ";
foreach ($musiacalScale as $currentNote ) {
    $outputString .= " " . $currentNote;
}

echo "<p>$outputString</p>"
?>
    <h2>formatted text</h2>
    <?php
    $displayVariable = 9.876;
    echo "<pre>\n";
    echo "unformatted text line 1. \r\n";
    echo "unformatted text line 2. \r\n";
    echo "\$displayVariable = $displayVariable";
    echo "<pre>\n";
    ?>

</body>
</html>