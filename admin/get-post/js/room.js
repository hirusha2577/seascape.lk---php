
$(function () {
    $("#room_create_form").submit(function (e) {
        e.preventDefault();
        if ($('#room_name').val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Room Name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#room_description").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Room Description.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#room_category").val() === "") {
            swal({
                title: "Error!",
                text: "Please Select Room Category.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$("#ac").is(":checked") && !$("#hot_water").is(":checked") && !$("#rain_shower").is(":checked") && !$("#seating_area").is(":checked") && !$("#iron").is(":checked")) {
            swal({
                title: "Error!",
                text: "Please Select Room Facilities.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#adults").val() === "") {
            swal({
                title: "Error!",
                text: "Please Select Max Adults.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#childs").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Count of Childs.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#room_size").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Room Size.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#room_price").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Room Price.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#room_main_image").val() === "") {
            swal({
                title: "Error!",
                text: "Please Select Room Main image.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            $.ajax({
                url: "get-post/ajax/room.php",
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
                            text: "Room Create Successfuly.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        setTimeout(reload, 2500);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Room Create Fail.",
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
    $("#room_update_form").submit(function (e) {
        id = $("#room_id").val();
        e.preventDefault();
        if ($('#update_name').val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Room Name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_description").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Room Description.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_category").val() === "") {
            swal({
                title: "Error!",
                text: "Please Select Room Category.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$("#update_ac").is(":checked") && !$("update_#hot_water").is(":checked") && !$("#update_rain_shower").is(":checked") && !$("#update_seating_area").is(":checked") && !$("#update_iron_and_pad").is(":checked")) {
            swal({
                title: "Error!",
                text: "Please Select Room Facilities.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_max_adults").val() === "") {
            swal({
                title: "Error!",
                text: "Please Select Max Adults.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_max_childs").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Count of Childs.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_room_size").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Room Size.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_room_price").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Room Price.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_main_image").val() === "") {
            swal({
                title: "Warning !",
                text: "If you wan't to set old image in your Room?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                closeOnConfirm: false
            }, function () {
                var form = new FormData($('form#room_update_form')[0]);
                $.ajax({
                    url: "get-post/ajax/room.php",
                    type: "POST",
                    data: form,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.status === 1) {
                            swal({
                                title: "Done",
                                text: "Update Succesfully.",
                                type: 'success',
                                timer: 2000,
                                showConfirmButton: false
                            });
                            setTimeout(find_Id, 2500);
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
            $.ajax({
                url: "get-post/ajax/room.php",
                type: "POST",
                data: new FormData(this),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
//                    console.log(data);
                    if (data.status === 1) {
                        swal({
                            title: "Done",
                            text: "Update Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        setTimeout(find_Id, 2500);
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
    $("form#inside_image_form").submit(function (e) {
        e.preventDefault();
        id = $("#inside_id").val();
        if ($("#inside_image").val() == "") {

            swal({
                title: "Error!",
                text: "Please Select File.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            $.ajax({
                url: "get-post/ajax/room.php",
                type: "POST",
                data: new FormData($("form#inside_image_form")[0]),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.status === 1) {
                        swal({
                            title: "Done",
                            text: "Update Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false

                        });
                        setTimeout(find_Id, 2500);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Please Select File.",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }

    });
    $("form#room_inside_image_update_form").submit(function (e) {
        e.preventDefault();
        id = $("#room_main_id").val();
        if ($("#input-file-now-custom-2").val() == "") {
            swal({
                title: "Error!",
                text: "Please Select File.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            $.ajax({
                url: "get-post/ajax/room.php",
                type: "POST",
                data: new FormData(this),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.status === 1) {
                        swal({
                            title: "Done",
                            text: "Update Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false

                        });
                        setTimeout(find_Id, 2500);
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
    $(".delete_inside_image").click(function () {
        var room_id = $(this).val();
        id = $("#inside_id").val();
        //alert(room_id);

        swal({
            title: "Warning !",
            text: "If you sure to Delete This?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: false
        }, function () {

            var name = $("#old_inside_name").val();
            $.ajax({
                url: "get-post/ajax/room.php",
                type: "POST",
                data: {id: room_id, name: name, delete_inside_image: 1},
                success: function (data) {
                    if (data.status === 1) {
                        swal({
                            title: "Done",
                            text: "Delete Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        setTimeout(find_Id, 2500);
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

    $(".room_delete").click(function () {
        var room_id = $("#get_r_id").val();
        //alert(room_id);
        swal({
            title: "Warning !",
            text: "If you sure to Delete This?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: false
        }, function () {

            var name = $("#get_r_name").val();
            $.ajax({
                url: "get-post/ajax/room.php",
                type: "POST",
                data: {r_id: room_id, r_name: name, delete_room_image: 1},
                success: function (data) {
                    if (data.status === 1) {
                        swal({
                            title: "Done",
                            text: "Delete Succesfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        setTimeout(reload, 2500);
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
        window.open('update-accommodation.php?id=' + e, '_self');
    }

    function reload() {
        window.open('accommodation.php', '_self');
    }
});


