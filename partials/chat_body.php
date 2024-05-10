<?php foreach ($group_chat as $key => $val) { ?>
    <?php $id = $_SESSION['id'];
    $base_url = 'http://localhost/workspace/JQUERY/chat_app/';

    ?>
    <?php
    $currentDate = date('d-m-Y', time());
    $previousDate = date('d-m-Y', strtotime("-1 days"));

    ?>
    <div class="row text-center d-flex justify-content-center ">

        <div class=" rounded-4  fs-6 font-arial  " style=" width:120px; background-color: #ececec;">

            <?php if ($key == $currentDate) {
                echo "Today";
            } else if ($key == $previousDate) {
                echo "Yesterday";
            } else {
                echo $key;
            }
            ?>

        </div>
      
    </div>
    <?php foreach ($val as $key1 => $val1) { ?>
        <?php if ($val1['chat_author_id'] != $id) { ?>

            <div class="msg left-msg">
                <?php if (!isset($val1['author_image']) || empty($val1['author_image'])) { ?>

                    <img class="msg-img" src="<?php echo $base_url . 'uploads/default_img/dumy.png'; ?>">

                <?php } else { ?>
                    <img class="msg-img" src="<?php echo $base_url . "uploads/" . $val1['author_image']; ?>">
                <?php } ?>
                <div class="msg-bubble">
                    <div class="msg-info">
                        <div class="msg-info-name"><?php echo ucfirst($val1['author_fname']) ?></div>
                        <div class="msg-info-time"><?php echo date('h:i', strtotime($val1['chat_time'])); ?></div>
                    </div>

                    <div class="msg-text">
                        <?php echo $val1['chat_message'] ?>
                    </div>
                </div>
            </div>
        <?php } else { ?>



            <div class="msg right-msg">
                <?php if (!isset($val1['author_image']) || empty($val1['author_image'])) { ?>

                    <img class="msg-img" src="<?php echo $base_url . 'uploads/default_img/dumy.png'; ?>">

                <?php } else { ?>
                    <img class="msg-img" src="<?php echo $base_url . "uploads/" . $val1['author_image']; ?>">
                <?php } ?>

                <div class="msg-bubble">

                    <div class="msg-info">
                        <div class="msg-info-name"><?php echo ucfirst($val1['author_fname']) ?></div>
                        <div class="msg-info-time"> <?php echo date('h:i', strtotime($val1['chat_time'])); ?></div>
                    </div>

                    <div class="msg-text">
                        <?php echo $val1['chat_message'] ?>
                    </div>

                </div>

            </div>
        <?php } ?>
    <?php } ?>
<?php } ?>