<?php
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');

// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// echo "</pre>";

$required_fields = ['fname', 'lname', 'phone', 'status', 'id'];
$errors = [];

// field validation empty or not  for each field.
foreach ($required_fields as $key => $value) {

    if (!isset($_POST[$value]) || empty($_POST[$value])) {

        $errors[] = "<p>" . $value . " is required. </p> ";
    }
}

$id = $_POST['id'];
$url = 'http://localhost/workspace/JQUERY/chat_app/edit_profile.php?id=' . $id;

// layer 1
if (count($errors) == 0) {



    $phone = $_POST['phone'];

    // phone number validation----------------------------------

    if (count($errors) == 0) {

        if (!is_numeric($phone)) {
            $errors[] = 'Phone number should be numeric only';
            header("Location:" . $url);
        } else if (strlen($phone) != 10) {

            $errors[] = 'Phone number should be only 10 digits';
        }
    }
}
// layer 2
if (count($errors) == 0) {
    // image field validation
    if (!isset($_FILES['file']['name']) || empty($_FILES['file']['name'])) {
        $errors[] = 'image is requried!';
    }
}

if (count($errors) == 0) {
    // image file validation
    $unique_name = '';

    if (isset($_FILES['file']['name']) || empty($_FILES['file']['name'])) {
        $name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $path_info = pathinfo($name);
        // print_r($path_info);

        // we want filename and its extension
        $fileName = $path_info['filename'];
        $extension = strtolower($path_info['extension']);
        // array of allowed extensions
        $allowed_extension = ['jpeg', 'jpg', 'png', 'gif'];

        if (in_array($extension, $allowed_extension)) {

            //create a unique using time() function and file extension
            $unique_name = time() . "." . $extension;
            // destination of users image
            $destination = './uploads/' . $unique_name;
            // move_uplodes_files() used to move files
            $is_uploaded = move_uploaded_file($tmp_name, $destination);
            if (!$is_uploaded) {
                $error[] = 'image dose not moved!';
            }
        } else {
            $error[] = 'Image type is not accepted';
        }
    }
}
if (count($errors) == 0) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $status = mysqli_escape_string($connection, $_POST['status']);
    // echo $status;
    // die;
    $image = $unique_name;

    $table = 'register';

    $query = "UPDATE $table SET `fname` = '$fname',`lname` = '$lname',`phone` = '$phone' ,`status` = '$status',`image` = '$image' WHERE `id` = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $_SESSION['success'] = 'Profile Update Successfully.';
    } else {
        $errors[] = 'Invalid Credentials!';
    }
    
} else {

    $_SESSION['error'] = $errors;
}


header('location:' . $url);
exit;
