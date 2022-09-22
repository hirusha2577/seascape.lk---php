<?php

//require '../class/Database.php';
require 'class/Validation.php';
require 'class/Upload.php';
require 'comment.php';
//var_dump($_POST);
if (isset($_POST['g-token'])) {


    $val = new Validation();
    $data = array(
        'txtFullName' => [$_POST['txtFullName'], 'is_empty'],
        'txtMessage' => [$_POST['txtMessage'], 'is_empty'],
        'txtEmail' => [$_POST['txtEmail'], 'is_empty, is_email'],
    );
    $errors = $val->form_validate($data);

    if (!empty($errors)) {
        echo json_encode(array('has_errors' => true, 'errors' => $errors));
    } else {
        $secret = '6Lf3lrEZAAAAAJcQyg6ud56A8XqRgq-YtNDcUdQI';
        $token = $_POST['g-token'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $token;
        $request = file_get_contents($url);
        $response = json_decode($request);
//    print_r($response);
        if ($response->success) {
            $COMMENT = new Comment(NULL);
            $COMMENT->author_image = $_FILES['author'];
            $COMMENT->author_name = $_POST['txtFullName'];
            $COMMENT->email = $_POST['txtEmail'];
            $COMMENT->comment = $_POST['txtMessage'];
            $result = $COMMENT->create();
            if ($result) {
                echo json_encode(array('has_errors' => false, 'status' => true));
            }
        } else {
            echo json_encode(array('has_errors' => true, 'auth' => 'Authentication fail'));
        }
    }
}