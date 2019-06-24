let botaoMenu = document.querySelector('.menu-mobile');
let menuPrincipal = document.querySelector('.menu-principal');


botaoMenu.onclick = function () {
    // console.log("CLICK");
    menuPrincipal.classList.toggle('visible');
}

// Ícone do Olho
$(".toggle-password").click(function () {

    $('.field-icon').toggleClass("glyphicon-eye-open glyphicon-eye-close");

    var input = $('#inputPassword4');

    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
})
