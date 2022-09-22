
$(function () {
var title;
        $("form#gallery_form").submit(function (e) {
e.preventDefault();
        if ($("#input-file-now").val() === "") {
swal({
title: "Error!",
        text: "Please Select Image.",
        type: 'error',
        timer: 2000,
        showConfirmButton: false
        });
        } else{
$.ajax({
url: "get-post/ajax/gallery.php",
        type: "POST",
        data: new FormData(this),
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
        if (data.status === 1) {
        swal({
        title: "Done!",
                text: "Create Successfuly.",
                type: 'success',
                timer: 2000,
                showConfirmButton: false
        });
                title = $("#title").val();
                setTimeout(find_title, 2500);
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
        $(".btn_delete").click(function(){
var id = $(this).val();
        swal({
        title: "ERROR !",
                text: "If you wan't to Delete?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                closeOnConfirm: false
        }, function () {

        $.ajax({
        url: "get-post/ajax/gallery.php",
                type: "POST",
                data: {id:id, delete:1},
                success: function(data){
                if (data.status === 1) {
                swal({
                title: "Done!",
                        text: "Delete Successfuly.",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                });
                        title = $("#title").val();
                        setTimeout(find_title, 2500);
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
        function find_title(){
        reload(title);
        }

function reload(e){
window.open('update-gallery.php?title=' + e, '_self');
        }
});


