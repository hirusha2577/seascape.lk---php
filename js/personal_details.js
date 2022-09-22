//
//$("#personal_info_form").submit(function (e) {
//    e.preventDefault();
//
//    if ($("#fast_name").val() === "") {
//        swal({
//            title: "Warning!",
//            text: "Please Fill First Name.",
//            type: 'warning',
//            timer: 2000,
//            showConfirmButton: false
//        });
//    } else if ($("#last_name").val() === "") {
//        swal({
//            title: "Warning!",
//            text: "Please Fill Last Name.",
//            type: 'warning',
//            timer: 2000,
//            showConfirmButton: false
//        });
//
//    } else if ($("#address_line_1").val() === "") {
//        swal({
//            title: "Warning!",
//            text: "Please Fill Address_Line_1.",
//            type: 'warning',
//            timer: 2000,
//            showConfirmButton: false
//        });
//    } else if ($("#nic").val() === "") {
//        swal({
//            title: "Warning!",
//            text: "Please Enter NIC Number.",
//            type: 'warning',
//            timer: 2000,
//            showConfirmButton: false
//        });
//    } else if ($("#phone_number").val() === "") {
//        swal({
//            title: "Warning!",
//            text: "Please Enter Your Mobile Number.",
//            type: 'warning',
//            timer: 2000,
//            showConfirmButton: false
//        });
//    } else if ($("#email").val() === "") {
//        swal({
//            title: "Warning!",
//            text: "Please Enter Email Address.",
//            type: 'warning',
//            timer: 2000,
//            showConfirmButton: false
//        });
//    } else {
//        window.location.replace("review.php");
//        $.post("review.php",{
//            room_name: $("#room_name").val(),
//            check_in: $("#check_in").val(),
//            check_out: $("#check_out").val(),
//            room_type: $("#room_type").val(),
//            customer_type: $("#customer_type").val(),
//            service_type: $("#service_type").val(),
//            first_name: $("#first_name").val(),
//            last_name: $("#last_name").val(),
//            add_1: $("#address_line_1").val(),
//            add_2: $("#address_line_2").val(),
//            nic: $("#nic").val(),
//            state: $("#state").val(),
//            phone_number: $("#phone_number").val(),
//            email: $("#email").val(),
//            price: $("#price").val()
//        });
////        $("#details").load("include/loading.php",
////        {
////            room_name: $("#room_name").val(),
////            check_in: $("#check_in").val(),
////            check_out: $("#check_out").val(),
////            room_type: $("#room_type").val(),
////            customer_type: $("#customer_type").val(),
////            service_type: $("#service_type").val(),
////            first_name: $("#first_name").val(),
////            last_name: $("#last_name").val(),
////            add_1: $("#address_line_1").val(),
////            add_2: $("#address_line_2").val(),
////            nic: $("#nic").val(),
////            state: $("#state").val(),
////            phone_number: $("#phone_number").val(),
////            email: $("#email").val(),
////            price: $("#price").val()
////        });
//    }
//
//
//});
//
//

