//
//refresh();
//function refresh() {
//    $("#request_view").load("load/booking_request.php");
//    setTimeout(refresh, 1000);
//}

$(".btn_confirm").click(function () {
    var id = $(this).val();

    $.ajax({
        url: "get-post/ajax/booking.php",
        type: "POST",
        data: {booking_id: id, action: "confirm_booking"},
        success: function (data) {
            if (data.status === "correct") {
                swal({
                    title: "Done",
                    text: "Confirmation was successfully. " + data.msg,
                    type: 'success',
                    timer: 4000,
                    showConfirmButton: false
                });
                setTimeout(reload, 2000);
            } else {
                swal({
                    title: "Fail",
                    text: "Confirmation was Fail. " + data.msg,
                    type: 'warning',
                    timer: 4000,
                    showConfirmButton: false
                });
            }

        }
    });

});

$(".btn_discard_booking").click(function () {
    var id = $(this).val();

    swal({
        title: "Warning !",
        text: "If you wan't to Discard Booking?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        closeOnConfirm: false
    }, function () {
        $.ajax({
            url: "get-post/ajax/booking.php",
            type: "POST",
            data: {booking_id: id, action: "discard_booking"},
            success: function (data) {
                if (data.status === 1) {
                    swal({
                        title: "Done",
                        text: "Discard was successfully. ",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(reload, 2000);
                } else {
                    swal({
                        title: "Fail",
                        text: "Discard was Fail. ",
                        type: 'warning',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            }
        });
    });
});

$(".delete_booking").click(function(){
   var id = $(this).val();

    swal({
        title: "Warning !",
        text: "If you wan't to Delete this Booking?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        closeOnConfirm: false
    }, function () {
        $.ajax({
            url: "get-post/ajax/booking.php",
            type: "POST",
            data: {booking_id: id, action: "delete_booking"},
            success: function (data) {
                if (data.status === 1) {
                    swal({
                        title: "Done",
                        text: "Delete was successfully. ",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(reload2, 2000);
                } else {
                    swal({
                        title: "Fail",
                        text: "Delete was Fail. ",
                        type: 'warning',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            }
        });
    });
});

function reload2() {
    window.open('manage_booking_list.php', '_self');
}


function reload() {
    window.open('manage_booking.php', '_self');
}





