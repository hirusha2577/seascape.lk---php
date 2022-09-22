<?php

require '../class/Database.php';
//var_dump($_POST);
if (isset($_POST['g-token'])) {

    $secret = '6Lf3lrEZAAAAAJcQyg6ud56A8XqRgq-YtNDcUdQI';
    $token = $_POST['g-token'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$token;
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
        return $result;
    }
}
// 
////----------------------Company Information---------------------
//
//$comany_name = "Seascape ";
//$website_name = "www.seascape.com";
//$comConNumber = "(+94) 91 228 2018";
//$comEmail = "info@seascape.lk";
//  
//$comEmail2 = "info@seascape.lk";
//$from = 'info@seascape.lk';
//
//
//
////----------------------CAPTCHACODE---------------------
//
//session_start();
//
//
//
//$response = array();
//
//if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {
//
//    $response['status'] = 'incorrect';
//
//    $response['msg'] = 'Security Code is invalid';
//
//    echo json_encode($response);
//
//    exit();
//}
//
//
//
////----------------------Visitor Information---------------------
//
//
//$visitor_name = $_POST['visitor_name'];
//$visitor_email = $_POST['visitor_email'];  
//$subject = 'New Hotel Contact Us - ' . $_POST['subject'];
//$message = $_POST['message'];
//
// 
//
//date_default_timezone_set('Asia/Colombo');
//
//
//
//$todayis = date("l, F j, Y, g:i a");
//
//
//
//$site_link = "https://" . $_SERVER['HTTP_HOST'];
//
//
//
//include("mail-template.php");
//
//
//
//// mandatory headers for email message, change if you need something different in your setting.
//
//$headers = "From: " . $from . "\r\n";
//
//$headers .= "Reply-To: " . $visitor_email . "\r\n";
//
//$headers .= "MIME-Version: 1.0\r\n";
//
//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//
//
//
//$headers1 = "From: " . $from . "\r\n";
//
//$headers1 .= "Reply-To: " . $comEmail . "\r\n";
//
//$headers1 .= "MIME-Version: 1.0\r\n";
//
//$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//
//
//
//// Sending mail
//
//
//
//if (
//        mail($visitor_email, $subject, $visitor_message, $headers1) &&
//        mail($comEmail, $subject, $company_message, $headers)
//) {
//
//    $response['status'] = 'correct';
//
//    $response['msg'] = "Your message has been sent successfully";
//    
////"Your message has been sent successfully"
//
//    echo json_encode($response);
//
//    exit();
//} else {
//
//    $response['status'] = 'correct';
//
//    $response['msg'] = "Could not be sent your message";
//
//    echo json_encode($response);
//
//    exit();
//} 
// 
//
//
// 