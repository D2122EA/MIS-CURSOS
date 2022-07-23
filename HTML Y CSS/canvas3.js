function iniciar(){
    var elemento = document.getElementById("lienzo");
    var lienzo = elemento.getContext('2d');
    lienzo.beginPath();
    lienzo.arc()
    lienzo.arc(60,150,50,45,Math.PI*2,false);
    lienzo.fill();
    lienzo.moveTo(0,0);
    lienzo.lineTo(200,200);
    lienzo.lineTo(100,200);
    lienzo.closePath();

    lienzo.clip();
    for(f=0;f<300;f=f+10){
        lienzo.moveTo(0,f);
        lienzo.lineTo(500,f);
    }
    lienzo.stroke();
}
window.addEventListener("load",iniciar,false)