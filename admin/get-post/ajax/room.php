<?php

require '../../../class/include.php';
header("content-type: application/json; charset=UTF8");

if (isset($_POST['room_create'])) {
    $ROOM = new Room(null);

    $ROOM->room_name = $_POST['room_name'];
    $ROOM->room_description = $_POST['room_description'];
    $ROOM->room_category = $_POST['room_category'];
    if (isset($_POST['ac'])) {
        $ROOM->ac = 1;
    } else {
        $ROOM->ac = 0;
    }
    if (isset($_POST['hot_water'])) {
        $ROOM->hot_water = 1;
    } else {
        $ROOM->hot_water = 0;
    }
    if (isset($_POST['rain_shower'])) {
        $ROOM->rain_shower = 1;
    } else {
        $ROOM->rain_shower = 0;
    }
    if (isset($_POST['seating_area'])) {
        $ROOM->seating_area = 1;
    } else {
        $ROOM->seating_area = 0;
    }
    if (isset($_POST['iron'])) {
        $ROOM->iron = 1;
    } else {
        $ROOM->iron = 0;
    }

    $ROOM->adults = $_POST['adults'];
    $ROOM->childs = $_POST['childs'];
    $ROOM->room_size = $_POST['room_size'];
    $ROOM->room_price = $_POST['room_price'];
    $ROOM->room_main_image = $_FILES['room_main_image'];
    //Helper::dd($ROOM);
    $result = $ROOM->create();

    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }
}

if (isset($_POST['update_room'])) {
    $ROOM = new Room($_POST['room_id']);
    $ROOM->room_name = $_POST['room_name'];
    $ROOM->room_description = $_POST['room_description'];
    $ROOM->room_category = $_POST['room_category'];
    if (isset($_POST['ac'])) {
        $ROOM->ac = 1;
    } else {
        $ROOM->ac = 0;
    }
    if (isset($_POST['hot_water'])) {
        $ROOM->hot_water = 1;
    } else {
        $ROOM->hot_water = 0;
    }
    if (isset($_POST['rain_shower'])) {
        $ROOM->rain_shower = 1;
    } else {
        $ROOM->rain_shower = 0;
    }
    if (isset($_POST['seating_area'])) {
        $ROOM->seating_area = 1;
    } else {
        $ROOM->seating_area = 0;
    }
    if (isset($_POST['iron'])) {
        $ROOM->iron = 1;
    } else {
        $ROOM->iron = 0;
    }

    $ROOM->adults = $_POST['adults'];
    $ROOM->childs = $_POST['childs'];
    $ROOM->room_size = $_POST['room_size'];
    $ROOM->room_price = $_POST['room_price'];
    $ROOM->image_name = $_FILES['room_main_image'];

    $result = $ROOM->update();

    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }
}

if (isset($_POST['set_inside_image'])) {

    $ROOM = new Room(null);
    $ROOM->room_id = $_POST['room_id'];
    $ROOM->inside_images = $_FILES['inside_image'];
    
    $result = $ROOM->set_room_image();
    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
        exit();
    }
}

if(isset($_POST['update_inside_room_image'])){
    $ROOM = new Room(null);
    //Helper::dd($_POST);
    $result = $ROOM->update_inside_image($_POST['image_id'],$_POST['update_inside_room_image'], $_FILES['update_inside_image']);
    
    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
    }
}

if(isset($_POST['delete_inside_image'])){
    //Helper::dd($_POST['id']);
    $ROOM = new Room(null);
    $result = $ROOM->delete_inside_image($_POST['id'],$_POST['name']);
    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
        exit();
    }
}

if(isset($_POST['delete_room_image'])){
    $ROOM = new Room(null);
    //Helper::dd($_POST['r_id']);
    $result = $ROOM->delete_room_image($_POST['r_id'],$_POST['r_name']);
    if ($result) {
        $result = ["status" => 1];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 0];
        echo json_encode($result);
        exit();
    }
}
    
//    $ROOM = new Room();
//     $ROOM->set_room_image($id, $_FILES['inside_image']);
   //Helper::dd($_FILES['inside_image'][0]);
//   Helper::dd($_FILES['inside_image'][0]);
//    for($i = 0; $i<$count;$i++){
//        
//        $name = $_FILES['inside_image']['name'][$i];
//        $type = $_FILES['inside_image']['type'][$i];
//        $tmp_name = $_FILES['inside_image']['tmp_name'][$i];
//        $error = $_FILES['inside_image']['error'][$i];
//        $size = $_FILES['inside_image']['size'][$i];
//        
//        $array = array("name"=>$name, type=>$type, tmp_name=>$tmp_name, error=>$error, size=>$size);
//        $ROOM->set_room_image($id, $array);
        //var_dump($array);
        //array_push($array, $file);
//        
//    }
//    var_dump($array);
    //echo json_encode($result);
//}
//    Helper::dd($file);
//    if (isset($_FILES['update_main_image'])) {
//        $result = ["status" => 1];
//        echo json_encode($result);
//    }else{
//        $result = ["status" => 0];
//        echo json_encode($result);
//    }

