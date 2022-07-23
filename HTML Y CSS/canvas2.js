function iniciar() {
    var elemento=document.getElementById(lienzo);
    lienzo=elemento.getContext('2d');
    lienzo.fillRect(200,50,200,20);
    lienzo.strokeRect(10,50,100,20);
}
window.addEventListener("load",iniciar,false)

