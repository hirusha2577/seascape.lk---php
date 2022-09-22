
$(function () {
    $("form#event_create_form").submit(function (e) {
        e.preventDefault();

        if ($('#event_name').val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Event Name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#event_description").val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Event Description.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#event_author").val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Event Author.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#event_date").val() == "") {
            swal({
                title: "Error!",
                text: "Please Select Event Date.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#event_main_image").val() === "") {
            swal({
                title: "Error!",
                text: "Please Select Event Image.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            $.ajax({
                url: 'get-post/ajax/event.php',
                type: 'POST',
                data: new FormData(this),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data.status === 'success') {
                        swal({
                            title: "Done",
                            text: "Create Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        setTimeout(reload, 2500);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Create Fail.",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }

                }
            });
        }
    });


    $("form#event_update_form").submit(function (e) {
        e.preventDefault();

        if ($('#event_name').val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Event Name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#event_description").val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Event Description.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#event_author").val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Event Author.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#event_date").val() == "") {
            swal({
                title: "Error!",
                text: "Please Select Event Date.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#event_main_image").val() === "") {
            swal({
                title: "WARNING !",
                text: "Do you want to set old image in your Event?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                closeOnConfirm: false
            }, function (isConfirm) {
                if (!isConfirm)
                    return;
                var file = new FormData($("form#event_update_form")[0]);
                file.append('confirm_old', 1)

                $.ajax({
                    url: 'get-post/ajax/event.php',
                    type: 'POST',
                    data: file,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        if (data.status === 'success') {
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


            });

        } else {
            var file = new FormData($("form#event_update_form")[0]);
            file.append('confirm_old', 0)
            $.ajax({
                url: 'get-post/ajax/event.php',
                type: 'POST',
                data: file,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data.status === 'success') {
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



    $(".event_delete").click(function () {
        var id = $(this).val();
        swal({
            title: "DELETE !",
            text: "Do you want to Delete Event?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "get-post/ajax/Event.php",
                type: "POST",
                data: {id: id, delete: 1},
                success: function (data) {
                    if (data.status === 'success') {
                        swal({
                            title: "Done",
                            text: "Delete Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        console.log(data);
                        setTimeout(reload, 3000);
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
    function reload() {
        window.open('event.php', '_self');
    }
});

