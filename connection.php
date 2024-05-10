<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'app_ajax';

$connection = mysqli_connect($server, $username, $password, $database);
