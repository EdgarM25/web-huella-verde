
let $event_step_one_completed = document.querySelector(".event_step_one_completed");
let $paso_uno = document.querySelector(".paso_uno");
let $paso_dos = document.querySelector(".paso_dos")
$event_step_one_completed.addEventListener("click", e => {
    $paso_uno.style.display="none"
    $paso_dos.removeAttribute("style")
})


const form_inicio = document.querySelector("form")
const warning_span = document.querySelector("#warning_inicio > span");
const warning_inicio = document.getElementById("warning_inicio");
 
const $usuario = document.getElementById("usuario");
const $contraseña_confirmar = document.getElementById("contrasena_confirmar");
const $contraseña = document.getElementById("contrasena");
const $nombre = document.getElementById("nombre");
const $apellido = document.getElementById("apellido")
const $correo_electronico = document.getElementById("correo_electronico")
let tres_campos_rojos = [$usuario, $contraseña, $contraseña_confirmar,$nombre];

 

form_inicio.addEventListener("submit", (e) => {
    let ExpreUsuario = new RegExp("[A-Za-z0-9]{0,10}$");
    for (let i = 0; i < tres_campos_rojos.length; i++) {
        tres_campos_rojos[i].classList.remove("red_vali")
    }
    let entrar = false;
    let warning_white = "";
    let contador = 0;
    if ($contraseña.value != $contraseña_confirmar.value) {
        $contraseña_confirmar.classList.add("red_vali")
        entrar = true;
       
    }
    if ($contraseña.value == "") {
         entrar = true;
        contador++;
        $contraseña.classList.add("red_vali")
     }
   
    if ($contraseña_confirmar.value == "") {
         entrar = true;
        contador++;
        $contraseña_confirmar.classList.add("red_vali")
    }
    if ($usuario.value == "") {
         entrar = true;
        contador++;
        $usuario.classList.add("red_vali")
     }

     if($nombre.value == ""){
         entrar = true;
        contador++;
        $nombre.classList.add("red_vali")
     }
     if($apellido.value == ""){
        entrar = true;
        contador++;
        $apellido.classList.add("red_vali")
     }

     if($correo_electronico.value == ""){
        entrar = true;
        contador++;
        $correo_electronico.classList.add("red_vali")
     }else if(/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.exec($correo_electronico)){
        entrar = true;
        $correo_electronico.classList.add("red_vali")
    }
     if($usuario.value == "" && $nombre.value == "" && $apellido.value == "" && $correo_electronico.value == "" && $contraseña.value == "" && $contraseña_confirmar.value == ""){
        warning_white += "";
        entrar = true;
     } 

    if (contador == 6) {
        warning_span.innerHTML = "Complete todos los campos";
        e.preventDefault();
    }else if (entrar == true) {
        warning_span.innerHTML = warning_white;
        e.preventDefault();
    }
});
