
$(function () {
    $("form#add_item").submit(function (e) {
        e.preventDefault();
        if ($('#item').val() == "") {
            // swal({
            //     title: "Error!",
            //     text: "Please Enter Item",
            //     type: 'error',
            //     timer: 2000,
            //     showConfirmButton: false
            // });
            $('#iteme').show();
            $('#quentitye').hide();
            $('#pricee').hide();
        } else if ($('#quentity').val() == "") {
            // swal({
            //     title: "Error!",
            //     text: "Please Enter Price",
            //     type: 'error',
            //     timer: 2000,
            //     showConfirmButton: false
            // });
            $('#iteme').hide();
            $('#quentitye').show();
            $('#pricee').hide();
        } else if ($('#price').val() == "") {
            // swal({
            //     title: "Error!",
            //     text: "Please Enter Qty",
            //     type: 'error',
            //     timer: 2000,
            //     showConfirmButton: false
            // });
            $('#iteme').hide();
            $('#quentitye').hide();
            $('#pricee').show();
        } else {
            $.ajax({
                url: 'get-post/ajax/payment.php',
                type: 'POST',
                data: new FormData(this),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data.status === 'success') {
                        // swal({
                        //     title: "Done",
                        //     text: "Create Succesfully.",
                        //     type: 'success',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        $('#iteme').hide();
                        $('#quentitye').hide();
                        $('#pricee').hide();
                        $('#done').show();
                         setTimeout(reload, 1000);
                    } else {
                        // swal({
                        //     title: "Error!",
                        //     text: "Create Fail.",
                        //     type: 'error',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        $('#iteme').hide();
                        $('#quentitye').hide();
                        $('#pricee').hide();
                        $('#error').show();
                    }

                }
            });
           
        }

    });

    $("#paid_btn").click(function () {
        var id = $("#payment_id").val();
        // alert(id);
        swal({
            title: "Warning !",
            text: "Paid?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: true
        }, function () {

            $.ajax({
                url: "get-post/ajax/payment.php",
                type: "POST",
                data: {id: id, paid: 1},
                success: function (data) {
                    if (data.status === 'success') {
                        // swal({
                        //     title: "Done",
                        //     text: "Paid Succesfully.",
                        //     type: 'success',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        $('#paid_btn').addClass('disabled');
                        $('#add_btn').addClass('disabled');
                        $('#paid_text').html('Paid');
                        $('#done_paid').fadeIn().delay(1000).fadeOut();
                        // setTimeout(reload, 2000);
                    } else {
                        // swal({
                        //     title: "Error!",
                        //     text: "Paid Fail.",
                        //     type: 'error',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        $('#error_paid').fadeIn().delay(1000).fadeOut();

                    }
                }
            });
        });
    });

    $("form#set_discount").submit(function (e) {
        e.preventDefault();
        if ($('#discount').val() == "") {
            // swal({
            //     title: "Error!",
            //     text: "Please Enter Item",
            //     type: 'error',
            //     timer: 2000,
            //     showConfirmButton: false
            // });
            // $('#iteme').show();
            // $('#quentitye').hide();
            // $('#pricee').hide();
        
        } else {
            $.ajax({
                url: 'get-post/ajax/payment.php',
                type: 'POST',
                data: new FormData(this),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data.status === 'success') {
                        // swal({
                        //     title: "Done",
                        //     text: "Create Succesfully.",
                        //     type: 'success',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        // $('#iteme').hide();
                        // $('#quentitye').hide();
                        // $('#pricee').hide();
                        // $('#done').show();
                         setTimeout(reload, 1000);
                    } else {
                        // swal({
                        //     title: "Error!",
                        //     text: "Create Fail.",
                        //     type: 'error',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        // $('#iteme').hide();
                        // $('#quentitye').hide();
                        // $('#pricee').hide();
                        // $('#error').show();
                    }

                }
            });
           
        }

    });
    $("form#set_additional").submit(function (e) {
        e.preventDefault();
        if ($('#additional').val() == "") {
            // swal({
            //     title: "Error!",
            //     text: "Please Enter Item",
            //     type: 'error',
            //     timer: 2000,
            //     showConfirmButton: false
            // });
            // $('#iteme').show();
            // $('#quentitye').hide();
            // $('#pricee').hide();
        
        } else {
            $.ajax({
                url: 'get-post/ajax/payment.php',
                type: 'POST',
                data: new FormData(this),
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data.status === 'success') {
                        // swal({
                        //     title: "Done",
                        //     text: "Create Succesfully.",
                        //     type: 'success',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        // $('#iteme').hide();
                        // $('#quentitye').hide();
                        // $('#pricee').hide();
                        // $('#done').show();
                         setTimeout(reload, 1000);
                    } else {
                        // swal({
                        //     title: "Error!",
                        //     text: "Create Fail.",
                        //     type: 'error',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        // $('#iteme').hide();
                        // $('#quentitye').hide();
                        // $('#pricee').hide();
                        // $('#error').show();
                    }

                }
            });
           
        }

    });

    function reload() {
        // window.open('', '_self');
        location.reload();
    }
    });