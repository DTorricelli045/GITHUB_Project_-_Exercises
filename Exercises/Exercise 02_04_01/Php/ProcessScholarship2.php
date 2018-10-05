<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 26 Sept 2018

Scholarship.php -->

    <meta charset="UTF-8">
    <title>Process Scholarship</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Scholarship</h2>

    <?php 
            //Track the number of errors as we validate
            $errorCount = 0;

            //function to handle our error messages
            function displayRequired($fieldName) {
                echo "The field \"$fieldName\" is required! <br>\n";
            }

            // Function to validate our input
            function validateInput($data, $fieldName) {
                global $errorCount;
                //if error then fail
                if (empty($data)) {
                    displayRequired($fieldName);
                    ++$errorCount;
                    $retval = "";
                }
                // if no error then succeed
                else {
                    $retval = trim($data);
                    $retval = stripslashes($retval);
                }
                return $retval;
            }

            //Function to display HTML
            function redisplayForm($firstName, $lastName) {

                ?>

                    <h2 style="text-align: center">Scholarship</h2>

                    <form name="scholarship" action="ProcessScholarship2.php" method="POST">

                       <p>First name: <input type="text" name="fName" value=<?php echo $firstName; ?>></p>
                       <p>Last name: <input type="text" name="lName" value=<?php echo $lastName; ?>></p>
                       <p>
                           <input type="reset" value="Clear Form">&nbsp;&nbsp;
                           <input type="submit" value="Send Form">

                        </p>

                    </form>

                <?php
                
            }
            $firstName = validateInput($_POST['fName'], "First Name");
            $lastName = validateInput($_POST['lName'], "Last Name");

            // if success show name, if fail show error
            if ($errorCount > 0) {
                echo "$errorCount error(s): Please re-enter the information below.<br>\n";
                redisplayForm($firstName, $lastName);
            }
            else {
                echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
            }
        ?>

    </form>

</body>

</html>