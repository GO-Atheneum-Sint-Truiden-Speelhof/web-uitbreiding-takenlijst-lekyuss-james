<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: begin.php"); // Redirect to the homepage or login page
    exit();
?>