<?php
$response = new \stdClass();
include($_SERVER['DOCUMENT_ROOT'] . './workspace/JQUERY/chat_app/connection.php');

$table = 'chat_table';
$query_get = "SELECT  register.fname as author_fname,register.id as user_id,chat_table.author_id as chat_author_id, register.image as author_image, chat_table.message as chat_message,chat_table.created_date as chat_time FROM register INNER JOIN chat_table ON register.id = chat_table.author_id ";
$result_get = mysqli_query($connection, $query_get);
if ($result_get) {

    while ($row = mysqli_fetch_assoc($result_get)) {
        $data_chats[] = $row;
    }
    // print_r($data_chats);
}

// set array value to it's key
$group_chat = [];
$date_key = false;
foreach ($data_chats as $key => $val) {
    $date_key = date('d-m-Y', strtotime($val['chat_time']));

    $group_chat[$date_key][] = $val;
}

ob_start();

include('../partials/chat_body.php');

$html = ob_get_clean();
$response->is_success = true;
$response->html = $html;

// print_r($html);

print_r(json_encode($response));

exit;































// $groupedArray = array();
// foreach($originalArray as $key => $valuesAry)
// {
//     $month = date('n', strtotime($valuesAry['dates']));
//     $groupedArray[$month][] = $valuesAry;
// }
// echo "<pre>";
// print_r($data_chats);
// echo "</pre>";
// die;
// $response->is_success = true;

// $response->data = $data_chats;

// print_r(json_encode($response));
// exit;
