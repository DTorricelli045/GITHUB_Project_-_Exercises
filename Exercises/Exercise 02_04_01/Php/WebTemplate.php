<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 26 Sept 2018

WebTemplate.php -->

    <meta charset="UTF-8">
    <title>Web Template</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
        include("inc_header.html");
    ?>
    
    <!-- include command to call seperate pages and add their content -->
    <div style="width: 20%; text-align: center; float: left">
        <?php include("inc_buttonnav.html"); ?>
    </div>

<!-- Start of dynamic content area -->
<?php 
if (isset($_GET['content'])) {
    switch ($_GET['content']) {
        case 'About Me':
            include("inc_about.html");
            break;
        case 'Contact Me':
            include("inc_contact.html");
            break;
        case 'Home':
        // A value of home means to display default page
            default;
            include("inc_home.html");
            break;
    }
}
else {
    include("inc_home.html");
}

?>
<!-- End of dynamic content area -->

<?php include("inc_footer.php"); ?>

</body>

</html>