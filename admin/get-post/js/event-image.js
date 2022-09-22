
$(function () {
    $("#event_image_create_form").submit(function (e) {
        e.preventDefault();

        if ($('#event_image_name').val() === "") {
            swal({
                title: "Error!",
                text: "Please Insert Event Image.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        }  else {
            $.ajax({
                url: "get-post/ajax/event-image.php",
                type: "POST",
                data: new FormData(this),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.status === 1) {
                        swal({
                            title: "Done!",
                            text: "Image added Successfuly.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        setTimeout(find_Id, 2500);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Image added Fail.",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }
    });

    var id;
  id = $("#event_id").val();
        $(".event_image_delete").click(function () {
        var id = $(this).val();
        swal({
            title: "DELETE !",
            text: "Do you want to Delete Event Image?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "get-post/ajax/event-image.php",
                type: "POST",
                data: {id: id, delete: 1},
                success: function (data) {
                    if (data.status === 1) {
                        swal({
                            title: "Done",
                            text: "Delete Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        console.log(data);
                        setTimeout(find_Id, 3000);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Delete Fail.",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        });
    });









    function find_Id() {
        redirect(id);
    }

    function redirect(e) {
        window.open('update-event.php?id=' + e, '_self');
    }

    function reload() {
        window.open('update-event.php', '_self');
    }
});


