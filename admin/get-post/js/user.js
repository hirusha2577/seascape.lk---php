$(function () {
    // $('.sidenav-main').hover(function() {
    //   // alert();
    //   $('.sidenav-main').removeClass('nav-collapsed');
    // });
    // $('.sidenav-main').mouseleave(function() {
    //   // alert();
    //   if (Cookies.get('seascapenavlock') == 1) {
    //     $('.sidenav-main').addClass('nav-collapsed');

    //   }
    // });
    $('.navbar-toggler1').click(function () {
        if (Cookies.get('seascapenavlock') == 0) {
            Cookies.set('seascapenavlock', 1);
            $('.sidenav-main').addClass('nav-collapsed');
            $('#main').addClass('main-full');
        } else {
            $('.sidenav-main').removeClass('nav-collapsed');
            $('#main').removeClass('main-full');
            Cookies.set('seascapenavlock', 0);
        }
    });

	 $('#error').hide();
    $('#success').hide();
    $('#empty').hide();
    $('#login_preloader').hide();

    $("form#login").submit(function (e) {
        e.preventDefault();
        if ($('#username').val() == "") {
            empty();
        } else if ($('#password').val() == "") {
            empty();

        } else {

			 $('#sub_btn').hide();
            $('#error').hide();
            $('#success').hide();
            $('#empty').hide();
            $('#login_preloader').show();
            $.ajax({
                url: 'get-post/ajax/user.php',
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
                        //     text: "Login Succesfully.",
                        //     type: 'success',
                        //     timer: 2000,
                        //     showConfirmButton: false
                        // });
                        // adaa();
						setTimeout(success, 1500);
                        //setTimeout(reload, 2500);
                    } else {
                       setTimeout(error, 1500);
                    }

                }
            });
        }



    });

    $('#logout').click(function () {
        $.ajax({
            url: 'get-post/ajax/user.php',
            type: 'POST',
            data: {
                logout: 'logout'
            },
            async: false,
            cache: false,

            success: function (data) {
                console.log(data);
                if (data.status === 'success') {
                    // swal({
                    //     title: "Done",
                    //     text: "logout Succesfully.",
                    //     type: 'success',
                    //     timer: 2000,
                    //     showConfirmButton: false
                    // });
                    setTimeout(reload, 500);
                } else {
                    swal({
                        title: "Error!",
                        text: "logout Fail.",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }

            }
        });
    });

function error() {
        $('#login_preloader').hide();
        $('#sub_btn').show();
        $('#error').show();
    }
    function empty(){
        $('#login_preloader').hide();
        $('#sub_btn').show();
        $('#empty').show();
        $('#error').hide();
        $('#success').hide();
    }
    function success(){
        $('.l_area').hide();
        $('#login_preloader').show();
        $('#sub_btn').hide();
        $('#empty').hide();
        $('#error').hide();
        $('#success').show();
        setTimeout(reload, 2000);
    }

    function reload() {
        window.open('index.php', '_self');
        // Location.reload();
    }
});