<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 26 Sept 2018

Paycheck.php -->

    <meta charset="UTF-8">
    <title>Paycheck</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php 
            //Track the number of errors as we validate
            $errorCount = 0;

            //function to handle our error messages
            function displayRequired($fieldNum) {
                echo "The field \"$fieldNum\" is required!<br>\n";
            }

            // Function to validate our input
            function validateInput($data, $fieldNum) {
                global $errorCount;
                //if error then fail
                if (empty($data)) {
                    displayRequired($fieldNum);
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
            function redisplayForm($Hour, $Wage) {

                ?>

                    <h2 style="text-align: center">Paycheck</h2>

                    <form name="Paycheck" action="Paycheck.php" method="POST">

                       <p>Hours: <input type="text" name="Hour" value=<?php echo $Hour; ?>></p>
                       <p>Hourly Wage: <input type="text" name="Wage" value=<?php echo $Wage; ?>></p>
                       <p>
                           <input type="reset" value="Clear Form">&nbsp;&nbsp;
                           <input type="submit" value="Send Form">

                        </p>

                    </form>

                <?php
                
            }

            //Run validation on text inputs
            $Hour = validateInput($_POST['Hour'], "Hour");
            $Wage = validateInput($_POST['Wage'], "Wage");

            // if success show name, if fail show error
            if ($errorCount > 0) {
                echo "$errorCount error(s): Please re-enter the information below.<br>\n";
                redisplayForm($Hour, $Wage);
            }
            else {
                if ($Hour > 40) {
                    $BonHr = $Hour * 1.5;
                    $HrWage = $BonHr * $Wage;
                }
                else {
                    $HrWage = $Hour * $Wage;
                }
               
                echo "Your hourly wage is " . $HrWage . ".";
            }
        ?>

    </form>

</body>

</html>