<?php

require '../../../class/include2.php';
header('Content-Type: application/json; charset=UTF8');
if (isset($_POST['dining_create'])) {

    $DINING = new Dining(NULL);
    $DINING->dining_title=$_POST['dining_title'];
    $DINING->dining_description= $_POST['dining_description'];
    $DINING->dining_main_image=$_FILES['dining_main_image'];
    
    if ($DINING->create()) {
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






if (isset($_POST['dining_update'])) {
      


    $DINING = new Dining($_POST['dining_id']);
    $DINING->dining_title = $_POST['dining_title'];
    $DINING->dining_description = $_POST['dining_description'];
    $DINING->dining_main_image = $_FILES['dining_main_image'];
    $DINING->old_image_name = $_POST['old_image_name'];

    if ($_POST['confirm_old'] == 0) {
        $DINING->update_dining_main_image = $_FILES['dining_main_image'];
    } else  if ($_POST['confirm_old'] == 1)  {
        $DINING->dining_main_image = "";
         $DINING->update_dining_main_image = "";
    }


    if ($DINING->update()) {
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
    $DINING = new Dining($id);

    if ($DINING->delete()) {
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