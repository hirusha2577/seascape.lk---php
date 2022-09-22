<?php 
require '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');
// Helper::dd($_POST);
if (isset($_POST['add_item'])) {
	$PAYMENT = new Payment();
    $PAYMENT->set_data($_POST);

    if ($PAYMENT->create()) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 0
        ];
        echo json_encode($result);
        exit();
    }
}

if (isset($_POST['paid']) == 1) {
    $PAYMENT = new Payment();
    
    if ($PAYMENT->paid($_POST['id'])) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 0
        ];
        echo json_encode($result);
        exit();
    }
}



if (isset($_POST['set_discount'])) {
    $PAYMENT = new Payment();
    
    if ($PAYMENT->set_discount($_POST['discount'],$_POST['id'])) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 0
        ];
        echo json_encode($result);
        exit();
    }
}
if (isset($_POST['set_additional'])) {
    $PAYMENT = new Payment();
    
    if ($PAYMENT->set_additional($_POST['additional'],$_POST['id'])) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 0
        ];
        echo json_encode($result);
        exit();
    }
}
 ?>