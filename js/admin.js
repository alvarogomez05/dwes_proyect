let form = document.getElementById("form")
let info = document.getElementById("infoo")
let salir = document.getElementById("salir")
let lista_pilotos = document.getElementById("lista_pilotos")
let listar_piloto = document.getElementById("listar_piloto")
let ocultar_lista = document.getElementById("ocultar_lista")

const mostrarModal = (event) => {
    if (event.target.nodeName == "P") {
        form.style.display = "flex"
    }
}

const cerrarModal = (event) => {
    if (event.target.nodeName == "P") {
        form.style.display = "none"
    }
}
const mostrarLista = (event) => {
    if (event.target.nodeName == "P") {
        lista_pilotos.style.display = "block"
        console.log("lista")

    }

}

const ocultarLista = () => {
    lista_pilotos.style.display = "none"
}

ocultar_lista.addEventListener("click", ocultarLista)
document.addEventListener("DOMContentLoaded", ocultarLista)
listar_piloto.addEventListener("click", mostrarLista)
salir.addEventListener("click", cerrarModal)
info.addEventListener("click", mostrarModal)