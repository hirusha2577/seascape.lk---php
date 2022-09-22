<?php

require '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');
if (isset($_POST['excursion_create'])) {

    $EXCURSION = new Excursion(NULL);
    $EXCURSION->description = $_POST['description'];
    $EXCURSION->destination = $_POST['destination'];
    $EXCURSION->length_and_time = $_POST['length_and_time'];
    $EXCURSION->excursion_main_image = $_FILES['excursion_main_image'];

    if ($EXCURSION->create()) {
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


if (isset($_POST['excursion_update'])) {
      



    $EXCURSION = new Excursion($_POST['excursion_id']);
    $EXCURSION->description = $_POST['description'];
    $EXCURSION->destination = $_POST['destination'];
    $EXCURSION->length_and_time = $_POST['length_and_time'];
    $EXCURSION->old_image_name = $_POST['old_image_name'];

    if ($_POST['confirm_old'] == 0) {
        $EXCURSION->update_excursion_main_image = $_FILES['excursion_main_image'];
    } else  if ($_POST['confirm_old'] == 1)  {
        $EXCURSION->excursion_main_image = "";
         $EXCURSION->update_excursion_main_image = "";
    }


    if ($EXCURSION->update()) {
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
    $EXCURSION = new Excursion($id);
    if ($EXCURSION->delete($id)) {
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