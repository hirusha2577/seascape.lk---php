
$(function () {

    $("#contact_form").submit(function (e) {
        e.preventDefault();

        var data = new FormData(this);
        $.ajax({
            url: "contact-form/send-email.php",
            type: "POST",
            data: data,
            dataType: "json",
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.has_error === true) {
                    $(".error").html('');
                    if (data.errors.name != '') {
                        $('#error_name').html(data.errors.name);
                    } else {
                        $('#error_name').html('');
                    }
                    if (data.errors.email != '') {
                        $('#error_email').html(data.errors.email);
                    } else {
                        $('#error_email').html('');
                    }
                    if (data.errors.subject != '') {
                        $('#error_subject').html(data.errors.subject);
                    } else {
                        $('#error_subject').html('');
                    }
                    if (data.errors.message != '') {
                        $('#error_message').html(data.errors.message);
                    } else {
                        $('#error_message').html('');
                    }
                }else{
                    $(".error").html('');
                    if(data.status === 1){
                        alert("Comment Adding Successful.");
                        window.open("index", "_self");
                    }else{
                        alert("Comment Adding Fail.");
                    }
                }
            }
        });
//        console.log(data);
    });
});






////--------------------------------------------------check one by one on blur--------------------------------------------------
//jQuery(document).ready(function () {
//
//    jQuery("#txtFullName").blur(function () {
//        validateEmpty("txtFullName", "spanFullName");
//    });
//
//    jQuery("#txtEmail").blur(function () {
//        ValidateEmail("txtEmail", "spanEmail");
//    });
//
//   
//    jQuery("#txtSubject").blur(function () {
//        validateEmpty("txtSubject", "spanSubject");
//    });
//
//    jQuery("#txtMessage").blur(function () {
//        validateEmpty("txtMessage", "spanMessage");
//    });
//
////    jQuery("#captchacode").blur(function () {
////        validateEmpty("captchacode", "capspan");
////    });
//
//    jQuery("#btnSubmit").bind('click', function () {
//
//        if (!validate()) {
//            return;
//        }
//
//        jQuery("#checking").show();
//        sendForm();
//    });
//
//    jQuery('.input-validater').keypress(function (e) {
//        if (e.keyCode == 13) {
//
//            if (!validate()) {
//                return;
//            }
//
//            jQuery("#checking").show();
//            sendForm();
//        }
//    });
//
//});
//
//
////--------------------------------------------------function to check button click --------------------------------------------------
//
//function validate() {
//    if (
//            validateEmpty("txtFullName", "spanFullName") &
//            ValidateEmail("txtEmail", "spanEmail") &
//            validateEmpty("txtSubject", "spanSubject") &  
//            validateEmpty("txtMessage", "spanMessage") &
////            validateEmpty("captchacode", "capspan")
//            )
//    {
//        return true;
//    } else {
//        return false;
//    }
//}
//
//
//
////--------------------------------------------------Ajax call --------------------------------------------------
//
//
//function sendForm() {
//    jQuery.ajax({
//        url: "contact-form/send-email.php",
//        cache: false,
//        dataType: "json",
//        type: "POST",
//        data: {
//            captchacode: jQuery('#captchacode').val(),
//            visitor_name: jQuery('#txtFullName').val(),
//            visitor_email: jQuery('#txtEmail').val(), 
//            subject: jQuery('#txtSubject').val(),
//            message: jQuery('#txtMessage').val()
//
//        },
//        success: function (html) {
//            var status = html.status;
//            var msg = html.msg;
//
//            if (status == "incorrect") {
//
//                jQuery("#capspan").addClass("notvalidated");
//                jQuery("#capspan").html(msg);
//                jQuery("#capspan").show();
//                jQuery("#checking").fadeOut(2000);
//
//            } else if (status == "correct") {
//                jQuery("#checking").hide();
//                jQuery("#dismessage").html(msg).delay(1000).show(1000);
//
//                jQuery('#captchacode').val("");
//                jQuery('#txtFullName').val("");
//                jQuery('#txtEmail').val("");
//                jQuery('#txtPhone').val("");
//                jQuery('#txtSubject').val("");
//                jQuery('#txtCountry').val("");
//                jQuery('#txtMessage').val("");
//            }
//
//
//        }
//    });
//}
//
////-----------------   function to check empty -------------------------------------------------------
//
//function validateEmpty(field, validatorspan)
//{
//    if (jQuery('#' + field).val().length != 0)
//    {
//        jQuery('#' + validatorspan).addClass("validated");
//        jQuery('#' + validatorspan).removeClass("notvalidated");
//        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
//        jQuery('#' + validatorspan).text("");
//
//        return true;
//    } else
//    {
//        jQuery('#' + validatorspan).addClass("notvalidated");
//        jQuery('#' + validatorspan).removeClass("validated");
//        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
//        jQuery('#' + validatorspan).text("This field can not be empty");
//
//        return false;
//    }
//}
//
////--------------------------------------------------function to check email--------------------------------------------------
//
//function ValidateEmail(field, validatordiv)
//{
//    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//    if (jQuery('#' + field).val().match(mailformat))
//    {
//        jQuery('#' + validatordiv).addClass("validated");
//        jQuery('#' + validatordiv).removeClass("notvalidated");
//        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
//        jQuery('#' + validatordiv).text("");
//        return true;
//    } else
//    {
//        jQuery('#' + validatordiv).addClass("notvalidated");
//        jQuery('#' + validatordiv).removeClass("validated");
//        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
//        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");
//
//        return false;
//    }
//}
