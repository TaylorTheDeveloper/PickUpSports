<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header( 'Location: ../join_confirmation.php');
} else {
    header( 'Location: ../login_page.php');
}
?>