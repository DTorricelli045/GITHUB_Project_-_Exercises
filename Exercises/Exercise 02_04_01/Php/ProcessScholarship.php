<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 26 Sept 2018

Scholarship.html -->

    <meta charset="UTF-8">
    <title>Process Scholarship</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Scholarship</h2>

        <?php 
        
            $firstName = stripslashes($_POST['fName']);
            $lastName = stripslashes($_POST['lName']);
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        ?>

    </form>

</body>

</html>