$("#index_booking_alert").fadeOut();
$("#index_booking").submit(function (e) {
    e.preventDefault();


    if ($("#check_in").val() === "") {
        $("#index_booking_alert").fadeIn("slow").html("Select Check In Date");
    } else if ($("#check_out").val() < $("#check_in").val()) {
        $("#index_booking_alert").fadeIn("slow").html("Select correct Date for check OUT.");
    } else if ($("#check_out").val() === "") {
        $("#index_booking_alert").fadeIn("slow").html("Select Check Out Date");
    } else if ($("#room_type").val() === "") {
        $("#index_booking_alert").fadeIn("slow").html("Select Room Type");
    } else if ($("#customer_type").val() === "") {
        $("#index_booking_alert").fadeIn("slow").html("Select Customer Type");
    } else if ($("#service_type").val() === "") {
        $("#index_booking_alert").fadeIn("slow").html("Select Service Type");
    } else {
        $("#index_booking_alert").hide();

        var check_in = $("#check_in").val();
        var check_out = $("#check_out").val();
        var room_type = $("#room_type").val();
        var customer_type = $("#customer_type").val();
        var service_type = $("#service_type").val();

        window.open("search_room.php?check_in=" + check_in + "&check_out=" + check_out + "&room_type=" + room_type + "&customer_type=" + customer_type + "&service_type=" + service_type, "_self");
    }
});


