function hacerclic(){
   var lista = document.querySelectorAll("#principal2 p");
    lista[0].onclick=mostraralerta;
}
function mostraralerta(){
alert("Hizo click");
}
window.onload = hacerclic;