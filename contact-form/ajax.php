<?php

require '../class/Database.php';
require '../class/Validation.php';
//var_dump($_POST);
if (isset($_POST['g-token'])) {


    $val = new Validation();
    $data = array(
        'txtFullName' => [$_POST['txtFullName'], 'is_empty'],
        'txtSubject' => [$_POST['txtSubject'], 'is_empty'],
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


            $name = $_POST['txtFullName'];
            $email = $_POST['txtEmail'];
            $subject = $_POST['txtSubject'];
            $message = $_POST['txtMessage'];
            $query = "insert into `contact` (name,email,subject,message) VALUES('$name','$email','$subject','$message')";
            $DB = new Database();
//        var_dump($query);
            $result = $DB->read_query($query);
            if ($result) {
                echo json_encode(array('has_errors' => false, 'status' => true));
            }
        } else {
            echo json_encode(array('has_errors' => true, 'auth' => 'Authentication fail'));
        }
    }
}