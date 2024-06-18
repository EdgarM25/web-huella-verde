const form_inicio = document.querySelector("form")
const warning_span = document.querySelector("#warning_inicio > span");
const warning_inicio = document.getElementById("warning_inicio");
 
const $usuario = document.getElementById("usuario");
const $contraseña_confirmar = document.getElementById("contrasena_confirmar");
const $contraseña = document.getElementById("contrasena");
const $nombre = document.getElementById("nombre")

let tres_campos_rojos = [$usuario, $contraseña, $contraseña_confirmar];


form_inicio.addEventListener("submit", (e) => {
    for (let i = 0; i < tres_campos_rojos.length; i++) {
        tres_campos_rojos[i].classList.remove("red_vali")
    }
    let entrar = false;
    let warning_white = "";
    let contador = 0;
    if ($contraseña.value != $contraseña_confirmar.value) {
        warning_white += "Las contraseñas no coinciden <br>";
        $contraseña_confirmar.classList.add("red_vali")
        entrar = true;
       
    }
    if ($contraseña.value == "") {
        warning_white += "No puede dejar el campo contraseña vacìo <br>";
        entrar = true;
        contador++;
        $contraseña.classList.add("red_vali")
     }
    if($contraseña.value.length > 0 && $contraseña.value.length < 5 ){
            warning_white += "La contraseña debe tener más caracteres  <br>";
            entrar = true;
        
            $usuario.classList.add("red_vali")
    }
    if ($contraseña_confirmar.value == "") {
        warning_white += "No puedes dejar el campo de contraseña de confirmación vacío <br>";
        entrar = true;
        contador++;
        $contraseña_confirmar.classList.add("red_vali")
     }
    if ($usuario.value == "") {
        warning_white += "No puede dejar el campo de usuario vacío <br>";
        entrar = true;
        contador++;
        $usuario.classList.add("red_vali")
     }

     if($nombre.value = ""){
        warning_white += "No puede dejar el campo de usuario vacío <br>";
        entrar = true;
        contador++;
        $nombre.classList.add("red_vali")
     }
    if (contador == 4) {
        warning_span.innerHTML = "Complete todos los campos";
        e.preventDefault();
    }
    else if (entrar == true) {
        warning_span.innerHTML = warning_white;
        e.preventDefault();
    }
});
