<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");
require_once("includes/classes/ErrorMessage.php");
require_once("includes/classes/SeasonProvider.php");
require_once("includes/classes/Season.php");
require_once("includes/classes/Video.php");
require_once("includes/classes/VideoProvider.php");
require_once("includes/classes/User.php");

$userLoggedIn="username";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Netflix !!</title>
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/17b288a8e6.js" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"ead></script>
        
    </head>
    <body>
        <div class='wrapper'>

<?php
if(!isset($hideNav)) {
    include_once("includes/navBar.php");
}
?>
