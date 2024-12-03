let form = document.getElementById("form")
let info = document.getElementById("infoo")
let salir = document.getElementById("salir")
let lista_pilotos = document.getElementById("lista_pilotos")
let listar_piloto = document.getElementById("listar_piloto")

//Div contenedor 
let lista_circuitos = document.getElementById("lista_circuitos")
//Boton
let listar_circuitos = document.getElementById("listar_circuitos")
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
     lista_circuitos.style.display="none"
}

const mostarModalCircuitos = (event) => {
    if (event.target.nodeName == "P") {
        lista_circuitos.style.display = "block"
        console.log("listar C")
    }
}

document.addEventListener("DOMContentLoaded", ocultarLista)
listar_piloto.addEventListener("click", mostrarLista)
salir.addEventListener("click", cerrarModal)
info.addEventListener("click", mostrarModal)

listar_circuitos.addEventListener("click", mostarModalCircuitos)