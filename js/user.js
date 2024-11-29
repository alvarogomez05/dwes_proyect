let form = document.getElementById("form")
let info = document.getElementById("info")
let salir=document.getElementById("salir")
let lista_pilotos = document.getElementById("lista_pilotos")
let listar_piloto=document.getElementById("listar_piloto")
const mostrarModal=(event)=>{
    if(event.target.nodeName=="P"){
        form.style.display="flex"
    }
}

const cerrarModal=(event)=>{
    if(event.target.nodeName=="P"){
        form.style.display = "none"
    }
}

const mostrarLista=(event)=>{
    if(event.target.nodeName=="P"){
        lista_pilotos.classList.toggle("mostrar")
    }
}

listar_piloto.addEventListener("click",mostrarLista)
salir.addEventListener("click",cerrarModal)
info.addEventListener("click",mostrarModal)