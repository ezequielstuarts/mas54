$(document).ready(function() {
    // $("#success").hide();
    // $("#error").hide();
    // $("#campos").hide();
    // $("#recaptcha").hide();

    $("#formulario-contacto").bind("submit", function() {

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(resp) {
                if (resp == "ok") {
                    $("#formulario-contacto").hide();
                    $("#success").removeClass('hide');
                    $("#recaptcha").addClass('hide');
                }
                if (resp == "campos") {
                    $("#error").addClass('hide');
                    $("#campos").removeClass('hide');
                }
                if (resp == "resolvercaptcha") {
                    $("#recaptcha").removeClass('hide');
                } else {
                    $("#error").removeClass('hide');
                    $("#recaptcha").addClass('hide');
                }
            },
            error: function() {
                $("#campos").addClass('hide');
                $("#error").removeClass('hide');
            },
        });
        return false;
    });
});

















// $(document).ready(function() {
//     $("#success").hide();
//     $("#error").hide();
//     $("#campos").hide();
//     $("#captcha").hide();

//     $("#formulario-contacto").bind("submit", function() {

//         $.ajax({
//             type: $(this).attr("method"),
//             url: $(this).attr("action"),
//             data: $(this).serialize(),
//             success: function(resp) {
//                 if (resp == "ok") {
//                     $("#formulario-contacto").hide();
//                     $("#success").show();
//                 }
//                 if (resp == "campos") {
//                     $("#error").hide();
//                     $("#campos").show();
//                 } else {
//                     $("#error").show();
//                 }
//             },
//             error: function() {
//                 $("#campos").hide();
//                 $("#error").show();
//             },
//         });
//         return false;
//     });
// });