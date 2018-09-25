<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 19 Sept 2018

BooksAndAuthors.php -->

    <meta charset="UTF-8">
    <title>Books and Authors</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Books and Authors</h2>
<?php 
//Arrays to store data
    $books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
    $authors = array("Mark Twain", "George Orwell", "Lewis Carrol", "Dr. Seuss");
    $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodor Geisel");

    //function to gather data from all arrays
    for ($i = 0; $i < count($books); $i++) {
        echo "<p>The real name of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]}.</p>";
    }
    echo "<br>";
    for ($i = 0; $i < count($books); $i++) {
        echo "<p>The title \"{$books[$i]}\" contains " . strlen($books[$i]) . " characters and " . str_word_count($books[$i]) . " words.</p>";
    }

    echo "<br><h2>Manipulating Text</h2>";
    $startingText = "mAdAm, i'M aDaM";
    $uppercaseText = strtoupper($startingText);
    $lowercaseText = strtolower($startingText);
    echo "<p>$uppercaseText</p>\n";
    echo "<p>$lowercaseText</p>\n";

    echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
    echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
    $workingText = ucwords($lowercaseText);
    echo "<p>$workingText</p>\n";

    echo "<br><h2>Other Manipulations</h2>";
    echo "<p>" . md5($workingText) . "</p>\n";
    echo "<p>" . substr($workingText, 0, 6) . "</p>\n";
    echo "<p>" . substr($workingText, 7) . "</p>\n";
    echo "<p>" . strrev($workingText) . "</p>\n";
    echo "<p>" . str_shuffle($workingText) . "</p>\n";

?>
   

</body>
</html>