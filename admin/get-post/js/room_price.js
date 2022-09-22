$(function () {
    $("form#update_room_price_form").submit(function (e) {
        e.preventDefault();
        if ($('#category').val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter category",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($('#Foreign_RO').val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Foreign_RO",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Foreign_BB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Enter Foreign_BB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Foreign_HB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Foreign_HB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Foreign_FB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Foreign_FB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Local_RO').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Local_RO",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Local_BB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Local_BB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Local_HB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Local_HB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Local_FB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Local_FB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Gov_RO').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Gov_RO",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Gov_BB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Gov_BB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Gov_HB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Gov_HB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#Gov_FB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert Gov_FB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#VTA_RO').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert VTA_RO",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#VTA_BB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert VTA_BB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#VTA_HB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert VTA_HB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#VTA_FB').val() == "") {
            swal({
                title: "Error!",
                text: "Please Insert VTA_FB",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {
            $.ajax({
                url: 'get-post/ajax/room_price.php',
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

function reload() {
        window.open('accommodation_price.php', '_self');
    }


});