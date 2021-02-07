<?php
session_start();

if(!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    echo 'Welcome Guest.';
} else {
    echo 'Welcome ' . $_SESSION['email'];
}
?>