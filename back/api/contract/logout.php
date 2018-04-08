<?php
session_start();
if(isset($_GET)) {
    session_destroy();
    unset($_SESSION['name']);
    header('Location:../../../front/login.html');
    echo "Logout";
}
?>
