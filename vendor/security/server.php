<?php
date_default_timezone_set('Asia/Manila');

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_POST["contact_us"])) {
    $date_created = date('Y-m-d H:i:s');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $facebook_account = $_POST['facebook_account'];
    $mobile_number = $_POST['mobile_number'];
    $message = $_POST['message'];

    if (file_exists("data.json")) {
        $data = json_decode(file_get_contents("data.json"), true);
    
        $messages = $data['messages'];
    } else {
        $messages = [];
    }

    $id = count($messages) + 1;

    $new_message = [
        'id' => $id,
        'date_created' => $date_created,
        'name' => $name,
        'email' => $email,
        'facebook_account' => $facebook_account,
        'mobile_number' => $mobile_number,
        'message' => $message,
        'status' => "unprocessed"
    ];

    $messages[] = $new_message;

    file_put_contents("data.json", json_encode(['messages' => $messages], JSON_PRETTY_PRINT));

    echo json_encode(true);
}