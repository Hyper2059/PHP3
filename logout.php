<?php
session_start();
if(isset($_SESSION['unemail'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

?>