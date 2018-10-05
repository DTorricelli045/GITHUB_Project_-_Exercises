<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 28 Sept 2018

ContactForm.php -->

    <meta charset="UTF-8">
    <title>Contact Form</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php 
    
    //Global Variables
    $showForm = true;
    $errorCount = 0;
    $sender = "";
    $email = "";
    $subject = "";
    $message = "";

    //Function to display form elements
    function displayForm($sender, $email, $subject, $message) {
        
    ?>

    <!-- Create form items -->
    <h2 style = "text-align: center">Contact Me</h2>
    <form name = "contact" action = "ContactForm.php" method = "post">
    <p>Your name: <br> <input type = "text" name = "Sender" value = "<?php echo $sender; ?>"></p>
    <p>Your E-mail: <br> <input type = "text" name = "Email" value = "<?php echo $email; ?>"></p>
    <p>Subject: <br> <input type = "text" name = "Subject" value = "<?php echo $subject; ?>"></p>
    <p>Message: <br> <textarea name = "Message"> <?php echo $message; ?> </textarea> </p>

    <p> 
    <!-- Create reset and submit buttons -->
        <input type = "reset" value = "Clear Form">&nbsp;&nbsp;
        <input type = "submit" name = "Submit" value = "Send Form">
    </p>
    </form>

    <?php
    }
    
    if ($showForm) {
        if ($errorCount > 0) {
            echo "<p>Please re-enter the form information below.</p>\n";
        }
        displayForm($sender, $email, $subject, $message);
    }
    else {
        $result = true; //debug
        if ($result) {
            echo "<p>Your message has been sent. Thank you, " . $sender . ".</p>\n";
        }
    else {
        echo "<p>There was an error sending your message, " . $sender . ".</p>\n";
        }
    }

    // function to validate user input
    function validateInput($data, $fieldName) {
        global $errorCount;
        if (empty($data)) {
            echo "\"$fieldName\" is a required field.<br>\n";
            ++$errorCount;
            $retval = "";
        }
        else {
            $retval = trim($data);
            $retval = stripslashes($retval);
        }
        return $retval;
    }

    // function to validate email address
    function validateEmail($data, $fieldName) {
        global $errorCount;
        if (empty($data)) {
            echo "\"$fieldName\" is a required field.<br>\n";
            ++$errorCount;
            $retval = "";
        }
        else {
            $retval = trim($data);
            $retval = stripslashes($retval);
            $pattern = "/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[w-]+)*(\.[A-Za-z]{2,})$/i";
            if (preg_match($pattern, $retval) == 0) {
                echo "\"$fieldName\" is not a valid e-mail address. <br>\n";
                ++$errorCount;
            }
        }
        return $retval;

    }

    if (isset($_POST['Submit'])) {
        $sender = validateInput($_POST['Sender'], "Your Name");
        $email = validateEmail($_POST['Email'], "Your E-mail");
        $subject = validateInput($_POST['Subject'], "Subject");
        $message = validateInput($_POST['Message'], "Message");

        if ($errorCount == 0) {
            $showForm = false;
        }
        else {
            $senderAddress = "$sender <email>";
            $headers = "From: $senderAddress\nCC:$senderAddress";
                $result = mail("mark.buckler@west-mec.org", $subject, $message, $headers);
        }
    }


    ?>

</body>

</html>