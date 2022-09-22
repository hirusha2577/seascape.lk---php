<?php include '../../../class/include.php';

header("content-type: application/json; charset=UTF8");

// Helper::dd($_POST);

if (isset($_POST['room_price_update'])) {
      


    $ROOMPRICE = new Room_Price($_POST['category_id']);

    $ROOMPRICE->Foreign_RO= $_POST['Foreign_RO'];
    $ROOMPRICE->Foreign_BB= $_POST['Foreign_BB'];
    $ROOMPRICE->Foreign_HB= $_POST['Foreign_HB'];
    $ROOMPRICE->Foreign_FB= $_POST['Foreign_FB'];
    $ROOMPRICE->Local_RO= $_POST['Local_RO'];
    $ROOMPRICE->Local_BB= $_POST['Local_BB'];
    $ROOMPRICE->Local_HB= $_POST['Local_HB'];
    $ROOMPRICE->Local_FB= $_POST['Local_FB'];
    $ROOMPRICE->Gov_RO= $_POST['Gov_RO'];
    $ROOMPRICE->Gov_BB= $_POST['Gov_BB'];
    $ROOMPRICE->Gov_HB= $_POST['Gov_HB'];
    $ROOMPRICE->Gov_FB= $_POST['Gov_FB'];
    $ROOMPRICE->VTA_RO= $_POST['VTA_RO'];
    $ROOMPRICE->VTA_BB= $_POST['VTA_BB'];
    $ROOMPRICE->VTA_HB= $_POST['VTA_HB'];
    $ROOMPRICE->VTA_FB= $_POST['VTA_FB'];
   
   

    if ($ROOMPRICE->update()) {
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