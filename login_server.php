<?php
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');

// echo "<pre>";
// print_r($_POST);

// echo "</pre>";die;

$required_fields = ['email', 'password'];

$url = 'http://localhost/workspace/JQUERY/chat_app/login.php';

$error = [];
foreach ($required_fields as $key => $value) {
    if (!isset($_POST[$value]) || empty($_POST[$value])) {
        $error[] = "<p> " . $value . " is requried . </p> ";
    }
}


if (count($error) == 0) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $table = 'register';

    $query =  "SELECT * FROM $table WHERE email='$email' AND password='$password'";
    // echo $query;die;

    $result = mysqli_query($connection, $query);
    $no_of_rows = mysqli_num_rows($result);

    if ($no_of_rows > 0) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['id'] = $row['id'];
        $_SESSION['success'] = "Logged In successfully";
        $url = 'http://localhost/workspace/JQUERY/chat_app/index.php';
    } else {
        $_SESSION['error'] = " Invalid Credentials";
    }
} else {
   
    $_SESSION['error'] = $error;
}
header('location:' . $url);
exit;
