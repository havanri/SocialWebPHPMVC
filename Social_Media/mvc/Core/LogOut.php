<?php session_start(); ?>
<?php 
    unset($_SESSION['username']);
    header('Location:http://localhost/Social_Media/index.php?url=login');
?>