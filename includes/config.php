<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("Europe/London");

try {
    $con = new PDO("mysql:dbname=watchflix; host=127.0.0.1;port=8889", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
