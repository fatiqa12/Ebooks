<?php
    session_start();
    // unset($_SESSION['sessionEmail']);
    // setcookie("cookieEmail",time() - 120);
    // setcookie("cookiePass",time() - 120);
    // unset($_COOKIE['cookieEmail']);
    // unset($_COOKIE['cookiePass']);
    session_destroy();

    header("location: login.php");
?>