<?php

//var_dump($_POST);
//require '../class/Database.php';
require 'class/Validation.php';
require 'class/Upload.php';
require 'class/Booking.php';
//require 'class/Helper.php';
require 'comment.php';
//var_dump($_POST);
if (isset($_POST['g-token'])) {


    $val = new Validation();
    $data = array(
        'first_name' => [$_POST['first_name'], 'is_empty'],
        'last_name' => [$_POST['last_name'], 'is_empty'],
        'address_line_1' => [$_POST['address_line_1'], 'is_empty'],
        'address_line_2' => [$_POST['address_line_2'], 'is_empty'],
        'nic' => [$_POST['nic'], 'is_empty'],
        'state' => [$_POST['state'], 'is_empty'],
        'phone_number' => [$_POST['phone_number'], 'is_empty'],
        'email' => [$_POST['email'], 'is_empty, is_email'],
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

//            echo 'success';

            $BOOKING = new Booking();
            $BOOKING->set_personal_info($_POST);
            $b_token = $BOOKING->create_booking();


            if ($b_token) {
                echo json_encode(array('has_errors' => false, 'status' => true ,'b_token' =>$b_token));
            }
        } else {
            echo json_encode(array('has_errors' => true, 'errors' => ['auth'=>'Authentication fail']));
        }
    }
}
