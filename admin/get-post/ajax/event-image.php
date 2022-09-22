<?php

require_once '../../../class/include2.php';


header("content-type: application/json; charset=UTF8");

if (isset($_POST['event_image_create_form'])) {


    // Helper::dd($post);

    $EVENTIMAGE = new Event_Image(NULL);
    $EVENTIMAGE->event_image_name=$_FILES['event_image_name'];

    if ($EVENTIMAGE->create($_POST['event_id'])) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }
}

if (isset($_POST['update_room'])) {
    $post = $_POST;
    $file = $_FILES;

    $EVENTIMAGE = new Room();
    $EVENTIMAGE->set_data($post, $file);
    $result = $EVENTIMAGE->update($_POST['room_id']);

    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }
}


if (isset($_POST['delete'])) {
    $id = $_POST['id'];
   
    $EVENTIMAGE = new Event_Image($id);

    if ($result = $EVENTIMAGE->delete($id)) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }
}