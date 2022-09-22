
$(function () {
    $("form#dining_create_form").submit(function (e) {
        e.preventDefault();
        if ($('#dining_title').val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Title",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($('#dining_description').val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Description",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#dining_main_image').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Image",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {
            $.ajax({
                url: 'get-post/ajax/dining.php',
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








 $("form#update_dining_form").submit(function (e) {
      e.preventDefault();
        if ($('#dining_title').val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Description",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#dining_description').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert dining_description",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#dining_main_image').val() == "") {
            swal({
                title: "WARNING !",
                text: "Do you want to set old image ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                closeOnConfirm: false
            }, function (isConfirm) {
                if (!isConfirm)
                    return;
                var file = new FormData($("form#update_dining_form")[0]);
                file.append('confirm_old', 1)

                $.ajax({
                    url: 'get-post/ajax/dining.php',
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
            var file = new FormData($("form#update_dining_form")[0]);
            file.append('confirm_old', 0)
            $.ajax({
                url: 'get-post/ajax/dining.php',
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






    $(".dining_image_delete").click(function () {
        var id = $(this).val();
        console.log(id);

        swal({
            title: "WARNING !",
            text: "If you wan't to Delete Dining?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "get-post/ajax/dining.php",
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













    function reload() {
        window.open('dining.php', '_self');
    }
});

