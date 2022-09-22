<?php

include '../../../class/include.php';
header("content-type:application/json; carset=UTF8");

if (isset($_POST['create'])) {

    $SLIDER = new Slider(null);
    $SLIDER->title = $_POST['title'];
    $SLIDER->sub_title = $_POST['sub_title'];
    $SLIDER->description = $_POST['description'];
    $SLIDER->image = $_FILES['image'];

    if ($SLIDER->create()) {
        $result = [
            "status" => 1
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

if (isset($_POST['update_old'])) {
    $x = $_POST['update_old'];
    if ($x == 1) {
        $SLIDER = new Slider($_POST['update_id']);
        $SLIDER->title = $_POST['title'];
        $SLIDER->sub_title = $_POST['update_sub_title'];
        $SLIDER->description = $_POST['description'];

        if ($SLIDER->update()) {
            $result = [
                "status" => 1
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
}
////
if (isset($_FILES['update_image'])) {
    $SLIDER = new Slider($_POST['update_id']);
    $SLIDER->title = $_POST['title'];
    $SLIDER->sub_title = $_POST['update_sub_title'];
    $SLIDER->description = $_POST['description'];
    $SLIDER->image_name = $_POST['old_image'];
    $SLIDER->image = $_FILES['update_image'];

    if ($SLIDER->update()) {
        $result = [
            "status" => 1
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
//
if (isset($_POST['delete'])) {
    $SLIDER = new Slider($_POST['id']);

    if ($SLIDER->delete()) {
        $result = [
            "status" => 1
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


    