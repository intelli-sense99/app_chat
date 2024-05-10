<?php
$response = new \stdClass();
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');

$required_field = ['message'];

$url = 'http://localhost/workspace/JQUERY/chat_app/index.php';

$error = [];
foreach ($required_field as $key => $value) {
    if (!isset($_POST[$value]) || empty($_POST[$value])) {
        $error[] = "<p> " . $value . " field is empty. </p> ";
    }
}

if (count($error) == 0) {
    $author_id = $_SESSION['id'];
    $message = mysqli_escape_string($connection, $_POST['message']);
    $table = "chat_table";
    $query = "INSERT INTO  $table (`message`,`author_id`) VALUES ('$message',$author_id)";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $_SESSION['success_message'] = 'Message Sent Successfully';
    } else {
        $error[] = 'something went wrong!';
    }
} else {
    $_SESSION['error'] = $error;
}

if (count($error) > 0) {
    $response->is_success = false;
    $response->error = $error;
} else {
    $response->is_success = true;
    $response->msg = 'Message Sent Successfully';
}
print_r(json_encode($response));
exit;
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die;