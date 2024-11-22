//Variable
let register = document.getElementById("register")
let iniciarSesion = document.getElementById("iniciarSesion")
let titulo = document.getElementById("titulo")
let rol = document.getElementById("rol")
let registraar = document.getElementById("registrar")
let form1 = document.getElementById("formulario1")
let pass=document.getElementById("contrasena")
let form2=document.getElementById("formulario2")
let titulo2=document.getElementById("tituloRegistro")
//Funcion

const registrarse = (event) => {
    if (event.target.nodeName == "INPUT") {
        form1.style.display="none"
        usuario.style.display = "none"
        pass.style.display = "none"
        titulo.style.display="none"
        //Aparece el segundo formulario
        rol.style.display="block"
        titulo2.style.display="block"
        form2.style.display="block"
        registraar.style.display="block"
    }
}



//Listener
register.addEventListener("click", registrarse)