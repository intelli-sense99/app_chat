<?php
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');

if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = "Access denied! Login First.";
    header('location:http://localhost/workspace/JQUERY/chat_app/login.php');
    exit;
}

$base_url = 'http://localhost/workspace/JQUERY/chat_app';

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
    $email = $user['email'];



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
    <!-- <title>Title</title> -->
</head>

<body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/header.php');
    ?>

    <div class="container" style="min-height:90vh;">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">

                    <div class="col-xl-12 col-md-12 " ">
                        <div class=" card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25 img-profile ">
                                        <?php if (isset($user['image'])) { ?>

                                            <img src="<?php echo $base_url . "/uploads/" . $user['image']; ?>" width="120px" height="120px" style="border-radius:50%;  padding: 5px;  border: 1px solid white;" alt="error">
                                        <?php } else { ?>
                                            <img src="<?php echo $base_url . "/uploads/default_img/dumy.png" ?>" width="120px" height="120px" style="border-radius:50%;  padding: 5px;  border: 1px solid white;" alt="error">


                                        <?php } ?>
                                    </div>
                                    <h3 class="f-w-600"><?php echo strtoupper($first_name) . "\n";
                                                        echo strtoupper($last_name); ?></h3>
                                    <!-- <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i> -->
                                    <div class="">
                                        <a href="http://localhost/workspace/JQUERY/chat_app/edit_profile.php?id=<?php echo $id ?>" class="col-sm-12 py-1 btn btn-outline-primary ">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h5 class="m-b-10   f-w-600">INFORMATION</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600"><i class="fa-solid fa-envelope-circle-check fs-4 me-2 "></i>Email</p>
                                            <h5 class="text-muted f-w-400"><?php echo $email ??  "empty"; ?></h5>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600"><i class="fa-solid fa-phone fs-4 me-2"></i>Phone</p>
                                            <h5 class="text-muted f-w-400"><?php echo $phone ?? "empty"; ?></h5>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600"><i class="fa-solid fa-map-location-dot fs-4 me-2"></i>Address</p>
                                            <h5 class="text-muted f-w-400">Suite 968 213 Breitenberg Burg, West Emilee, IN 29856</h5>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600"><i class="fa-solid fa-handshake fs-4 me-2"></i>Status</p>
                                            <h5 class="text-muted f-w-400"><?php echo ucfirst($status) ?? "empty"; ?></h5>
                                        </div>
                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <?php
    include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/footer.php');
    ?>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/partials/footer-script.php');
    ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script> -->
</body>

</html>