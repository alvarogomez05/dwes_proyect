let form = document.getElementById("form")
let info = document.getElementById("info")
let salir = document.getElementById("salir")


let lista_pilotos = document.getElementById("lista_pilotos")
let listar_piloto = document.getElementById("listar_piloto")
let btn_circuitos = document.getElementById("btn_circuitos")

//Div contenedor 
let lista_circuitos = document.getElementById("lista_circuitos")
//Boton
let listar_circuitos = document.getElementById("listar_circuitos")
//Modal Circuitos
let modalCircuito = document.getElementById("modalCircuito")
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

const mostarModalCircuitos = (event) => {
    if (event.target.nodeName == "P") {
        modalCircuito.style.display = "block"
        console.log("listar C")
    }
}

const mostrarCircuitos = () => {
    lista_circuitos.style.display = "block";
}

document.addEventListener("DOMContentLoaded", ocultarLista)
listar_piloto.addEventListener("click", mostrarLista)
salir.addEventListener("click", cerrarModal)
info.addEventListener("click", mostrarModal)


listar_circuitos.addEventListener("click", mostarModalCircuitos)
btn_circuitos.addEventListener("click", mostrarCircuitos)