$(document).ready(function() {

    $("#formulario-contacto").bind("submit", function() {
        $("#enviando").removeClass("hide");
        $("#submit").addClass("hide");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(resp) {
                if (resp == "PHPnoEnviado") {
                    $("#alerta").removeClass("hide").removeClass("alert-success");
                    $(".respuesta").html("Complete todos los campos ");
                    $(".mensaje-alerta").html("para enviar el formulario.");
                    $("#enviando").addClass("hide");
                    $("#submit").removeClass("hide");
                }
                if (resp == "resolvercaptcha") {
                    $("#alerta").removeClass("hide").removeClass("alert-success");
                    $(".respuesta").html("Resuelva el recaptcha ");
                    $(".mensaje-alerta").html("para enviar el formulario.");
                    $("#enviando").addClass("hide");
                    $("#submit").removeClass("hide");
                }
                if (resp == "PHPEnviado") {
                    $("#formulario-contacto").addClass("hide");
                    $("#success").removeClass("hide");
                }
            },
            error: function() {
                $("#alerta").removeClass("hide");
                $(".respuesta").html("Error! ");
                $(".mensaje-alerta").html("de conexion. Intentelo de nuevo!.");
                $("#enviando").addClass("hide");
                $("#submit").removeClass("hide");
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