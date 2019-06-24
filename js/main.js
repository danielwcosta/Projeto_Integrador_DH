
let botaoMenu = document.querySelector('.menu-mobile');
let menuPrincipal = document.querySelector('.menu-principal');


botaoMenu.onclick = function() {
   // console.log("CLICK");
   menuPrincipal.classList.toggle('visible');
}