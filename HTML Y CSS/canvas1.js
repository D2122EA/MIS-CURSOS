function iniciar(){
    var elemento=document.getElementById('lienzo');
    var lienzo = elemento.getContext('2d');
    lienzo.fillStyle="#000099";
    lienzo.strokeStyle="#990000";
    lienzo.fillRect(200,50,120,120);
    lienzo.strokeRect(10,40,100,100);
    var gradiente =lienzo.createLinearGradient(0,0,20,100);
    gradiente.addColorStop(0.2,'#FF0000');
    gradiente.addColorStop(1,'#00FF00');
    lienzo.fillStyle=gradiente;

    lienzo.fillRect(10,10,100,100);
    lienzo.fillRect(150,10,200,100);
}
window.addEventListener("load",iniciar,false);