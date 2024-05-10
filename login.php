<?php
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');


$success = false;
$error = false;

if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login in</title>
</head>

<body>
    <!-- success -->

    <?php if ($success) { ?>
        <div class=" alert alert-success text-center">

            <?php
            echo $success;
            ?>
        </div>
    <?php } ?>

    <!-- error -->
    <?php if ($error) { ?>
        <?php if (is_array($error)) { ?>
            <div class="   alert alert-danger text-center">
                <?php foreach ($error as $key => $value) { ?>
                    <?php echo $value;  ?>
                <?php } ?>

            </div>
        <?php } else { ?>
            <div class=" alert alert-danger text-center">
                <?php echo $error;  ?>
            </div>
        <?php } ?>
    <?php } ?>
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <br>
        <div class="container col-md-4 border border-secondary rounded">
            <h1 class="text-center">Login</h1>
            <br>
            <form action="./login_server.php" method="POST">

                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="text-center">

                    <button type="submit" class="btn btn-outline-primary w-20 ">Submit</button>
                </div>
            </form>
            <br>
        </div>

    </div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

</html>