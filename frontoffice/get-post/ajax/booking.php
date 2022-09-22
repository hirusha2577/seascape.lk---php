<?php

include '../../../class/include.php';
header("content-type: application/json; charset=UTF8");

if (isset($_POST['action'])) {
    if ($_POST['action'] == "confirm_booking") {

        $BOOKING = new Booking();
        $result = $BOOKING->confirm_request($_POST['booking_id']);

        if ($result) {

            echo json_encode($result);
        } else {

            echo json_encode($result);
        }
    } elseif ($_POST['action'] == "discard_booking") {
        $BOOKING = new Booking();
        $result = $BOOKING->discard_request($_POST['booking_id']);

        if ($result) {
            $result = ["status" => 1];
            echo json_encode($result);
        } else {
            $result = ["status" => 0];
            echo json_encode($result);
        }
    } elseif ($_POST['action'] == "delete_booking") {
        $BOOKING = new Booking();
        $result = $BOOKING->delete_booking($_POST['booking_id']);
        if ($result) {
            $result = ["status" => 1];
            echo json_encode($result);
        } else {
            $result = ["status" => 0];
            echo json_encode($result);
        }
    }
}

