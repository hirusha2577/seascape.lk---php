<?php

include '../../../class/include.php';
header("content-type: application/json; charset=UTF8");


//
//if (isset($_POST['delete'])) {
//    $id = $_POST['comment_id'];
//    $COMMENT = new Comment($id);
//    $result = $COMMENT->delete();
//    if ($result) {
//        $result = ["status" => 1];
//        echo json_encode($result);
//    } else {
//        $result = ["status" => 0];
//        echo json_encode($result);
//    }
//} 


    $COMMENT = new Comment($_POST['comment_id']);
    $COMMENT->author_name = $_POST['name'];
    $COMMENT->email = $_POST['mail'];
    $COMMENT->comment = $_POST['comment'];
    $COMMENT->status = $_POST['active'];
//Helper::dd($_POST);
    $result = $COMMENT->update();
    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }


