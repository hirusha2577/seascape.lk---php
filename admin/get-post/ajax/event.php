<?php

include_once '../../../class/include2.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['event_create_form'])) {

    $EVENT = new Event(NULL);
    $EVENT->event_name = $_POST['event_name'];
    $EVENT->event_description = $_POST['event_description'];
    $EVENT->event_author = $_POST['event_author'];
    $EVENT->event_date = $_POST['event_date'];
    $EVENT->event_main_image = $_FILES['event_main_image'];


    if ($EVENT->create()) {
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







if (isset($_POST['event_update_form'])) {



    $EVENT = new Event($_POST['event_id']);
    $EVENT->event_name = $_POST['event_name'];
    $EVENT->event_description = $_POST['event_description'];
    $EVENT->event_author = $_POST['event_author'];
    $EVENT->event_date = $_POST['event_date'];
    $EVENT->old_image_name = $_POST['old_image_name'];


    if ($_POST['confirm_old'] == 0) {
        $EVENT->event_main_image = $_FILES['event_main_image'];
    } else {
        $EVENT->event_main_image = "";
    }


    if ($EVENT->update()) {
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








if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $EVENT = new Event($id);

 
    if ($EVENT->delete($id)) {
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