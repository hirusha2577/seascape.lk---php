<?php

include '../../../class/include.php';
header("content-type: application/json; charset=UTF8");

if (isset($_POST['title'])) {
    $GALLERY = new Gallery(null);
    $GALLERY->title = $_POST['title'];
    $GALLERY->image = $_FILES['image'];

    $result = $GALLERY->create();
    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
   
    $GALLERY = new Gallery($id);
    $result = $GALLERY->delete();
    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }
}
