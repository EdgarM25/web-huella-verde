const form_inicio = document.querySelector("form")
const warning_span = document.querySelector("#warning_inicio > span");
const warning_inicio = document.getElementById("warning_inicio");
const $usuario = document.getElementById("usuario");
const $contraseña_confirmar = document.getElementById("contrasena_confirmar");
const $contraseña = document.getElementById("contrasena");
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
    /*
        if($contraseña.value.length > 0 && $contraseña.value.length < 5 ){
            warning_white += "La contraseña debe tener más caracteres  <br>";
            entrar = true;
        
            $usuario.classList.add("red_vali")
        }*/
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
    if (contador == 3) {
        warning_span.innerHTML = "Complete todos los campos";
        e.preventDefault();
    }
    else if (entrar == true) {
        warning_span.innerHTML = warning_white;
        e.preventDefault();
    }
});

/*
<div id="warning_inicio" class="text-center ">
                    <span><?php if(isset($alerta)) echo $alerta; ?></span>
                </div>
                <label for="">Usuario <i class="bi bi-person-arms-up mb-1"></i></label><br>
                <input type="text" id="usuario_inicio" name="usuario_inicio" placeholder="Ingrese tu usuario" class="w-100 "><br>
                <label for="">Contraseña <i class="bi bi-key-fill mb-1"></i></label><br>
                <input type="password" id="contrasena_inicio" name="contrasena_inicio" class="w-100 mb-2 " placeholder="Ingrese tu contraseña"><br>
                <label for="">Repetir contraseña <i class="bi bi-key-fill mb-1"></i></label><br>
                <input type="password" id="contrasena_inicio_confimar" name="contrasena_inicio_confimar" class="w-100 mb-2" placeholder="Ingrese de nuevo la contraseña"><br>  
                <div class="form__btn" style="margin-bottom: 0.6rem;">
                    <button class="mt-2  form__btn--detalle">Entrar <i class="bi bi-caret-right"></i></button>
                </div>

                </br>*/