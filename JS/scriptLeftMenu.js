document.getElementById("btnOpen").addEventListener("click", open_CloseMenu);
//Declaramos variables
var sideMenu = document.getElementById("menuSide");
var btnOpen = document.getElementById("btnOpen");
var body = document.getElementById("body");

//Evento mostrar y ocultar menu
    function open_CloseMenu(){
        body.classList.toggle("bodyMove");
        sideMenu.classList.toggle("menuSideMove");
    }