let form = document.getElementById("form")
let info = document.getElementById("info")
let salir=document.getElementById("salir")
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
salir.addEventListener("click",cerrarModal)
info.addEventListener("click",mostrarModal)