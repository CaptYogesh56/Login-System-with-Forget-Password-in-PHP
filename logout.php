<?php

session_start();

session_unset();

session_destroy();

echo '<script>alert("You are logged out!! Please Log in again !!")</script>';
echo '<script>window.location.href="index.php";</script>';


?>