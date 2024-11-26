//Variable
let register = document.getElementById("register")
let iniciarSesion = document.getElementById("iniciarSesion")
let titulo = document.getElementById("titulo")
let registraar = document.getElementById("registrar")
let form1 = document.getElementById("formulario1")
let pass = document.getElementById("contrasena")
let form2 = document.getElementById("formulario2")
let titulo2 = document.getElementById("tituloRegistro")
let volver = document.getElementById("volver")
//Funcion

const registrarse = (event) => {
    if (event.target.nodeName == "INPUT") {
        form1.style.display = "none"
        usuario.style.display = "none"
        pass.style.display = "none"
        titulo.style.display = "none"
        //Aparece el segundo formulario
        titulo2.style.display = "block"
        form2.style.display = "block"
        registraar.style.display = "block"
        volver.style.display = "block"
    }
}


const registrar = (event) => {
    if (event.target.nodeName == "INPUT") {
        titulo2.style.display = "none"
        form2.style.display = "none"
        registraar.style.display = "none"

        form1.style.display = "block"
        usuario.style.display = "block"
        pass.style.display = "block"
        titulo.style.display = "block"
    }
}

const volverLogin = () => {
    location.reload()
}
//Listener
register.addEventListener("click", registrarse)
registraar.addEventListener("click", registrar)
volver.addEventListener("click", volverLogin)