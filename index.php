<?php
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');

if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = "Access denied! Login First.";
    header('location:http://localhost/workspace/JQUERY/chat_app/login.php');
    exit;
}
// echo $_SESSION['id'];

$success = false;
if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
}
// $base_url = 'http://localhost/workspace/JQUERY/chat_app/';

$message_data = [];
$id = false;
if (isset($_SESSION['id'])) {

    $id = $_SESSION['id'];
    $table = 'register';
    $query = "SELECT * FROM $table WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    $first_name = ucfirst($user['fname']);
    $status = ucfirst($user['status']);

    // echo "<pre>";
    // print_r($user);
    // echo "</pre>"; 
    $query_get = "SELECT  register.fname as author_fname,register.id as user_id,chat_table.author_id as chat_author_id,  register.image as author_image, chat_table.message as chat_message,chat_table.created_date as chat_time FROM register INNER JOIN chat_table ON register.id = chat_table.author_id ";
    $result_get = mysqli_query($connection, $query_get);
    while ($row = mysqli_fetch_assoc($result_get)) {
        $message_data[] = $row;
    }

    $group_chat = [];
    $date = false;
    foreach ($message_data as $key => $val) {
        $date = date('d-m-Y', strtotime($val['chat_time']));

        $group_chat[$date][] = $val;
    }
    
    // echo "<pre>";
    // print_r($group_chat);
    // echo "</pre>";

    // echo "<pre>";
    // print_r($message_data);
    // echo "</pre>";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/head.php');
    ?>
</head>

<body>
    <?php if ($success) { ?>
        <div class="container-fluid alert alert-success text-center">

            <?php
            echo $success;
            ?>
        </div>
    <?php } ?>



    <!-- header -->
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/header.php');
    ?>




    <main class="cd__main" style="min-height:100%;">
        <section class="msger">
            <!-- chat header -->
            <?php
            include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/chat_header.php');
            ?>
            <!-- chat body -->
            <main class="msger-chat" id="msgerr-chat">
                <?php
                include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/chat_body.php');
                ?>
            </main>
            <!-- chat input form -->

            <?php
            include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/chat_input.php');
            ?>

        </section>
    </main>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/footer.php');
    ?>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/footer-script.php');
    ?>


</body>

</html>