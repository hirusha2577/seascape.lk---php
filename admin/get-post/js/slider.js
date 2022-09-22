
$(function () {
    $("form#create_form").submit(function (e) {
        
            $('#btn-slider').html("Please wait...");
    
        e.preventDefault();
        if ($('#title').val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Title",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($('#sub_title').val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Sub Title.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($('#description').val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Description",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#input-file-now-custom-2").val() === "") {
            swal({
                title: "Error!",
                text: "Please Enter Slider image",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            $.ajax({
                url: 'get-post/ajax/slider.php',
                type: 'POST',
                data: new FormData(this),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    //console.log(data);
                    if (data.status === 1) {
                        $('#btn-slider').html("Create <i class='material-icons right'>send</i>");
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
    $("form#update_form").submit(function (e) {
        e.preventDefault();
        if ($('#update_title').val() == "") {
            swal({
                title: "Error!",
                text: "Please Fill Title Field.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_sub_title").val() == "") {
            swal({
                title: "Error!",
                text: "Please Fill Sub Title Field",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#update_description").val() == "") {
            swal({
                title: "Error!",
                text: "Please Fill Description Field",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($("#input-file-now-custom-2").val() == "") {
            swal({
                title: "ERROR !",
                text: "If you wan't to set old image in your slider?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                closeOnConfirm: false
            }, function () {
                var id = $("#update_id").val();
                var title = $("#update_title").val();
                var sub_title = $("#update_sub_title").val();
                var description = $("#update_description").val();
                
                $.ajax({
                    url: "get-post/ajax/slider.php",
                    type: "POST",
                    data: {update_id:id, title:title, update_sub_title:sub_title, description:description,update_old:1},
                    
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
            });
        } else {
            var file = new FormData($("form#update_form")[0]);
            $.ajax({
                url: "get-post/ajax/slider.php",
                type: "POST",
                data: file,
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
    $(".slider_delete").click(function () {
        var id = $(this).val();
        console.log(id);

        swal({
            title: "ERROR !",
            text: "If you wan't to Delete Slide?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "get-post/ajax/slider.php",
                type: "POST",
                data: {id: id, delete: 1},
                success: function (data) {
                    if (data) {
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



    $("#update_image").change(function (e) {
        //var path = $(this).val();
        //var filename = e.target.files[0].name;
        //console.log(path);
        //console.log(this.files[0].mozFullPath);

        $("#image").fadeIn("fast").attr('src', URL.createObjectURL(e.target.files[0]));
    });
    $(".imgload").change(function (e) {
        $("#imgload").fadeIn("fast").attr('src', URL.createObjectURL(e.target.files[0]));
    });

    function reload() {
        window.open('slider.php', '_self');
    }
});