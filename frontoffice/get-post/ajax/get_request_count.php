<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

$BOOKING = new Booking();
$count = $BOOKING->get_request_count();

$result = [
    "status" => $count
];
echo json_encode($result);
exit();

