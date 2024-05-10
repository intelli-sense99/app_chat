<?php
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');

if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = "Access denied! Login First.";
    header('location:http://localhost/workspace/JQUERY/chat_app/login.php');
    exit;
}
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

$id = false;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = 'register';
    $query = "SELECT * FROM $table WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    $first_name = $user['fname'];
    $last_name = $user['lname'];
    $phone = $user['phone'];
    $status = $user['status'];
    // $email = $user['email'];

    // echo "<pre>";
    // print_r($user);
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

    <!-- error -->
    <?php if ($error) { ?>
        <?php if (is_array($error)) { ?>
            <div class="container-fluid alert alert-danger text-center">
                <?php foreach ($error as $key => $value) { ?>
                    <?php echo $value;  ?>
                <?php } ?>

            </div>
        <?php } else { ?>
            <div class="container-fluid alert alert-danger text-center">
                <?php echo $error_req;  ?>
            </div>
        <?php } ?>
    <?php } ?>
    <!-- navbar -->
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/workspace/JQUERY/chat_app/partials/header.php');
    ?>



    <div class="container" style=" min-height: 100vh;">
        <!-- form div -->
        <div class=" my-5 col-md-6" width="100px">

            <h1 class="text-center ">Edit</h1>
            <form action="./edit_server.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- hidden input field contain id -->
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                    <!------------------>
                    <div class="col-md-6">
                        <label class="my-2 fst-italic">First Name</label>
                        <input type="text" class="form-control" placeholder="first name" name="fname" value="<?php echo $first_name ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="my-2 fst-italic">Last Name</label>
                        <input type="text" class="form-control" placeholder="last name" name="lname" value="<?php echo $last_name ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="my-2 fst-italic">Phone</label>
                        <input type="text" class="form-control" placeholder=" phone" name="phone" value="<?php echo $phone ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="my-2 fst-italic">Status</label>
                        <input type="text" class="form-control" placeholder="status" name="status" value="<?php echo $status ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="my-2 fst-italic">Upload Profile Image</label>
                        <input type="file" class="form-control" name="file" id="formFile">
                    </div>

                </div>
                <div class="text-center my-3 ">
                    <button type="submit" class="btn btn-outline-info text-black fw-bold font-arial">Submit</button>
                </div>
            </form>

        </div>
    </div>


    <!-- footer -->
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/workspace/JQUERY/chat_app/partials/footer.php');
    ?>

    <!-- footer script -->

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/workspace/JQUERY/chat_app/partials/footer-script.php');
    ?>
</body>

</html>