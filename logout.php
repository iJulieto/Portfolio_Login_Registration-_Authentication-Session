<?php
    if("<script>alert('Are you sure you want to logout?')</script>"){
        session_start();
        session_destroy();
        header('Location: login.php');
        exit();
    }
?>