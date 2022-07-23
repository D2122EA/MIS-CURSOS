function mostraralerta() {
    alert("Esta libreria de imagenes estan en hd");
}
function hacerclic() {
    document.getElementsByTagName('p')[1].onclick = mostraralerta;
}
window.onload= hacerclic;