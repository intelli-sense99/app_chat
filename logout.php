<?php
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');

if (isset($_SESSION['id'])) {
    unset($_SESSION['id']);
    session_start();
    session_destroy();
}


header('location:http://localhost/workspace/JQUERY/chat_app/login.php');
exit;
