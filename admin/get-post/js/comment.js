

$(function () {
    var id;
    $("#update_comment_form").submit(function (e) {
        e.preventDefault();

        if ($("#author_name").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#comment").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Comment.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#email").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Email.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            id = $("#comment_id").val();
            var name = $("#author_name").val();
            var mail = $("#email").val();
            var comment = $("#comment").val();

            var active;
            if ($("#active_comment").is(":checked")) {
                active = 1;
            } else {
                active = 0;
            }

            $.ajax({
                url: "get-post/ajax/comment.php",
                type: "POST",
                data: {comment_id: id, name: name, mail: mail, comment: comment, active: active},
                success: function (data) {
                    if (data.status === 1) {
                        swal({
                            title: "Done",
                            text: "Update Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        setTimeout(reload, 2500);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Update Fail.",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }
    });

//    $("#btn_delete").click(function () {
//        id = $("#comment_id").val();
//        $.ajax({
//            url: "get-post/ajax/comment.php",
//            type: "POST",
//            data: {comment_id: id, delete: 1},
//            success: function (data) {
//                if (data.status === 1) {
//                    swal({
//                        title: "Done",
//                        text: "Delete Succesfully.",
//                        type: 'success',
//                        timer: 2000,
//                        showConfirmButton: false
//                    });
//                    setTimeout(reload, 2500);
//                } else {
//                    swal({
//                        title: "Error!",
//                        text: "Delete Fail.",
//                        type: 'error',
//                        timer: 2000,
//                        showConfirmButton: false
//                    });
//                }
//            }
//        });
//    });

    function reload() {
        window.open("comment.php", "_self");
    }
});

