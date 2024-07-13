const typed = new Typed(".typed_1", {
    strings:[ `<strong class="title">¡Un viaje hacia la sostenibilidad!</strong> <br> Imagina un mundo donde la armonía entre el ser humano y la naturaleza sea la norma. Un mundo donde la educación ambiental sea la clave para construir un futuro sostenible. Este es el sueño que persigue la educación ambiental sostenible, y en este módulo nos embarcaremos en un viaje para descubrir sus principios, importancia y conceptos fundamentales.`],
    typeSpeed: 25,
    showCursor: false, // Mostrar cursor palpitanto
})
//Variables
const $container = document.querySelector(".container_aprende")  as HTMLElement;
const $siguiente = document.querySelector("[data-siguiente]") as HTMLElement
const $progress_bar = document.querySelector(".progress-bar") as HTMLElement
const $btn = document.querySelector(".boton > .btn") as HTMLElement;
const $start = document.querySelector(".start") as HTMLElement;
const $data_keep_reading = document.querySelector("[data-keep-reading]") as HTMLElement
//Funciones para llamar la lectura correspondiente
function read_2(){
const typed = new Typed(".typed_1", {
    strings:[ `<strong class="title">¿Qué es la educación ambiental sostenible?</strong> <br> Piensa en la educación ambiental como una brújula que nos guía hacia un futuro donde el desarrollo humano se equilibra con la protección del planeta. Es un proceso continuo que nos invita a comprender nuestra relación con el medio ambiente, desde el pequeño jardín de nuestra casa hasta los ecosistemas más vastos.`],
    typeSpeed: 25,
    showCursor: false, // Mostrar cursor palpitanto
});
$data_keep_reading.setAttribute("data-keep-reading", "3")
}
function read_3(){
const typed = new Typed(".typed_1", {
    strings:[ `<strong class="title">¿Por qué es tan importante?</strong> <br> Nuestro planeta enfrenta serios desafíos ambientales, como el cambio climático, la contaminación y la pérdida de biodiversidad. La educación ambiental sostenible nos brinda las herramientas y el conocimiento para afrontar estos retos. Nos ayuda a ser ciudadanos responsables, capaces de tomar decisiones informadas para proteger nuestro entorno.`],
    typeSpeed: 25,
    showCursor: false, // Mostrar cursor palpitanto
})
$data_keep_reading.setAttribute("data-keep-reading", "4")
}
function read_4(){
const typed = new Typed(".typed_1", {
    strings:[ `<strong class="title">¿Cuáles son sus principios?</strong> 
                <br> 
                La educación ambiental sostenible se basa en principios fundamentales que nos guían en este camino de aprendizaje:
                <ul>
                    <li><b>Interdisciplinariedad:</b> Aborda el medio ambiente desde diferentes perspectivas, como la biología, la química, la economía y la sociología.</li>
                    <li><b>Participación:</b> Involucra a todos los actores de la sociedad, desde niños hasta adultos, en la búsqueda de soluciones ambientales.</li>
                    <li><b>Equidad:</b> Promueve la justicia ambiental, buscando que todos tengan acceso a un ambiente sano y sostenible.</li>
                    <li><b>Sostenibilidad:</b> Busca un equilibrio entre la satisfacción de las necesidades actuales y la preservación del medio ambiente para las generaciones futuras.</li>         
                </ul>
                `],
    typeSpeed: 25,
    showCursor: false, // Mostrar cursor palpitanto
})
$data_keep_reading.setAttribute("data-keep-reading", "5")
}
function read_5(){
const typed = new Typed(".typed_1", {
    strings:[ `<strong class="title">¡Acompáñanos en este viaje!</strong> <br>
                En este módulo exploraremos a fondo estos conceptos y principios, descubriendo cómo la educación ambiental sostenible puede transformar nuestra relación 
                con el planeta. Juntos, podemos construir un futuro más verde y próspero para todos.<br> <b> ¿Listo para comenzar? </b>`],        
    typeSpeed: 25,
    showCursor: false, // Mostrar cursor palpitanto
})
$data_keep_reading.setAttribute("data-keep-reading", "6_end")
}
function read_end(){
const $boton =document.querySelector(".boton") as HTMLElement
$boton.removeChild($boton.children[0])
pregunta_1();
$siguiente.removeAttribute("style")

}
function validar_siguiente_lectura(){
switch ($data_keep_reading.getAttribute("data-keep-reading")) {
    case "2":
        read_2();
    break;
    case "3":
        read_3();
    break;
    case "4":
        read_4();
    break;
    case "5":
        read_5();
    break;
    case "6_end":
        read_end();
    break;
    default:
    break;
}
}
$data_keep_reading.addEventListener("click", e => {
validar_siguiente_lectura()
})
//Funciones para poder llamar a la pregunta correspondiente   
function pregunta_1() {
$container.innerHTML = `
                <div class="container_pregunta">
                    <span class="fw-bold fs-5">1.¿Cuál de las siguientes definiciones describe mejor la educación ambiental sostenible?</span><br>
                    <input type="radio" name="pregunta_1" id="pregunta_1_a">
                    <label for="pregunta_1_a">Un proceso continuo que promueve la justicia social, la conservación del medio ambiente y el desarrollo sostenible para las generaciones actuales y futuras. </label><br>
                    <input type="radio" name="pregunta_1" id="pregunta_1_b">
                    <label for="pregunta_1_b">Una serie de clases sobre ciencias ambientales</label><br>
                    <input type="radio" name="pregunta_1" id="pregunta_1_c">
                    <label for="pregunta_1_c">Una campaña de limpieza de playas.</label><br>
                    <input type="text" style="display: none;"readonly>  
                </div>
                    `
                    let tiempoRef = Date.now()
                    let cronometrar = true;
                    let acumulado = 0
                    function iniciar() {
                        cronometrar = true
                    }
                    function pausar() {
                        cronometrar = false
                    }
                    function reiniciar() {
                        acumulado = 0
                    }
                    setInterval(() => {
                        let tiempo = document.getElementById("tiempo")
                        if (cronometrar) {
                            acumulado += Date.now() - tiempoRef
                        }
                        tiempoRef = Date.now()
                        tiempo.innerHTML = formatearMS(acumulado)
                    }, 1000 / 60);
                    function formatearMS(tiempo_ms) {
                        let MS = tiempo_ms % 1000
                        //Agregué la variable St para solucionar el problema de contar los minutos y horas.
                        let St = Math.floor(((tiempo_ms - MS) / 1000))
                        let S = St%60
                        let M = Math.floor((St / 60) % 60)
                        let H = Math.floor((St/60 / 60))
                        Number.prototype.ceros = function (n) {
                            return (this + "").padStart(n, 0)
                        }
                        return H.ceros(2) + ":" + M.ceros(2) + ":" + S.ceros(2)
                            + "." + MS.ceros(3)
                    }
}
function pregunta_2() {
$container.innerHTML = `<div class="container_pregunta">
                            <span class="fw-bold fs-5">2.La educación ambiental sostenible se enfoca únicamente en enseñar sobre la
                            naturaleza.</span><br>
                            <input type="radio" name="pregunta_2" id="pregunta_2_true">
                            <label for="pregunta_2_true">Verdad</label><br>
                            <input type="radio" name="pregunta_2" id="pregunta_2_false">
                            <label for="pregunta_2_false">Falso</label>
                            <input type="text" style="display: none;"readonly>
                        </div>`
$siguiente.setAttribute("data-siguiente", "3")
}
function pregunta_3(){
$container.innerHTML = `
                <div class="container_pregunta">
                    <span class="fw-bold fs-5">3.¿Cuál de los siguientes NO es un objetivo de la educación ambiental sostenible?</span><br>
                    <input type="radio" name="pregunta_3" id="pregunta_3_a">
                    <label for="pregunta_3_a">Desarrollar valores y actitudes que promuevan la convivencia armónica entre los humanos y el medio ambiente.</label><br>
                    <input type="radio" name="pregunta_3" id="pregunta_3_b">
                    <label for="pregunta_3_b">Brindar herramientas para prevenir y resolver problemas ambientales</label><br>
                    <input type="radio" name="pregunta_3" id="pregunta_3_c">
                    <label for="pregunta_3_c">Promover el uso de tecnologías contaminantes.</label>
                    <input type="text" style="display: none;"readonly>
                </div>
                `
$siguiente.setAttribute("data-siguiente", "4")
}
function pregunta_4(){
$container.innerHTML = `
                <div class="container_pregunta">
                    <span class="fw-bold fs-5">4.¿Qué característica NO es esencial para la educación ambiental sostenible?</span><br>
                    <input type="radio" name="pregunta_4" id="pregunta_4_a">
                    <label for="pregunta_4_a">Es un proceso continuo a lo largo de la vida.</label><br>
                    <input type="radio" name="pregunta_4" id="pregunta_4_b">
                    <label for="pregunta_4_b">Es interdisciplinaria, abarcando diversas áreas del conocimiento. </label><br>
                    <input type="radio" name="pregunta_4" id="pregunta_4_c">
                    <label for="pregunta_4_c">Se limita al ámbito académico formal.</label>
                    <input type="text" style="display: none;"readonly>
                </div>
                      `
$siguiente.setAttribute("data-siguiente", "5")
}
function pregunta_5(){
$container.innerHTML = `
                    <div class="container_pregunta">
                        <span class="fw-bold fs-5">5.Empareja cada concepto con su definición correspondiente:</span><br>
                        <hr> 
                          <span class="_pregunta_5_ll_1"></span>
                          <span class="_pregunta_5_ll_2"></span>
                          <span class="_pregunta_5_ll_3"></span>
                          <span class="_pregunta_5_ll_4"></span>
                          <span class="_pregunta_5_ll_5"></span>
                          <span class="_pregunta_5_ll_6"></span>
                        <hr>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                          <span class="pregunta_5_a border_selected">Desarrollo sostenible:</span>
                          <span class="pregunta_5_b border_selected">Educación ambiental:</span>
                          <span class="pregunta_5_c border_selected">Sostenibilidad:</span>
                          <span class="pregunta_5_1 border_selected">satisfacer las necesidades presentes sin comprometer la capacidad de las generaciones futuras para satisfacer las suyas. </span>
                          <span class="pregunta_5_2 border_selected">es un proceso continuo que promueve la justicia social, la conservación del medio ambiente y el desarrollo sostenible.</span>
                          <span class="pregunta_5_3 border_selected">El uso responsable de los recursos para garantizar su disponibilidad en el futuro.</span>
                        </div>
                                                    <input type="text" style="display: none;"readonly>  
                    </div>
                     `
        $siguiente.setAttribute("data-siguiente", "6")
}
function pregunta_6() {
$container.innerHTML = `
        <div class="container_pregunta">
                <span class="fw-bold fs-5">6.Empareja cada concepto con su definición correspondiente:</span><br>
                    <hr> 
                    <span class="_pregunta_6_ll_1"></span>
                    <span class="_pregunta_6_ll_2"></span>
                    <span class="_pregunta_6_ll_3"></span>
                    <span class="_pregunta_6_ll_4"></span>
                    <span class="_pregunta_6_ll_5"></span>
                    <span class="_pregunta_6_ll_6"></span>
                    <hr>
                <div class="d-flex justify-content-center gap-2 flex-wrap">
                    <span class="pregunta_6_a border_selected">UNESCO:</span>
                    <span class="pregunta_6_b border_selected">Promueve la educación ambiental para el desarrollo sostenible.</span>
                    <span class="pregunta_6_c border_selected">ONU Medio Ambiente:</span>
                    <span class="pregunta_6_1 border_selected">Implementa programas educativos sobre cambio climático y biodiversidad.</span>
                    <span class="pregunta_6_2 border_selected">Colabora con gobiernos y organizaciones para fortalecer la educación ambiental.</span>
                    <span class="pregunta_6_3 border_selected">PNUMA:</span>
                </div>
                                            <input type="text" style="display: none;"readonly>  
          </div>
          `
          $siguiente.setAttribute("data-siguiente", "7_end")
}  
function fin_juego():void{
let $veloz =document.querySelector(".veloz")  as string | null | HTMLElement | any;
let $tiempo =document.querySelector(".tiempo")  as string | null | HTMLElement | any;
let $start  =document.querySelector(".start") as  string | null | HTMLElement | any;
let $cantidad_estrellas = document.querySelector(".cantidad-estrellas") as string | null | HTMLElement | any;
$cantidad_estrellas.innerHTML =$start.textContent;
$veloz.innerHTML = $tiempo.textContent.slice(0, 8);
const $container_modal =document.querySelector(".container-modal") as HTMLElement
$container_modal.removeAttribute("style");
}
//Función principal para validar cuál sería la siguiente pregunta.
function validar_siguiente_pregunta(){
switch ($btn.getAttribute("data-siguiente")) {
        case "2":
            pregunta_2()
            $progress_bar.removeAttribute("style")
            $progress_bar.setAttribute("style", "width: 20%")
            $progress_bar.innerHTML = "20%"
        break;
        case "3":
            pregunta_3()
            $progress_bar.removeAttribute("style")
            $progress_bar.setAttribute("style", "width: 30%")
            $progress_bar.innerHTML = "30%"
        break;
        case "4":
          pregunta_4()
            $progress_bar.removeAttribute("style")
            $progress_bar.setAttribute("style", "width: 40%")
            $progress_bar.innerHTML = "40%"
        break;
        case "5":
            pregunta_5();
            $progress_bar.removeAttribute("style")
            $progress_bar.setAttribute("style", "width: 70%")
            $progress_bar.innerHTML = "70%"
        break;
        case "6":
            pregunta_6()
            $progress_bar.removeAttribute("style")
            $progress_bar.setAttribute("style", "width: 80%")
            $progress_bar.innerHTML = "80%"
        break;
        case "7_end":
            fin_juego()
            $progress_bar.removeAttribute("style")
            $progress_bar.setAttribute("style", "width: 100%")
            $progress_bar.innerHTML = "100%"
        break;
        default:
        break;
    }
}   
document.addEventListener("click", (e) => {
let $input_hidden = document.querySelector("[readonly]") as string | Element | null | any
//Primera pregunta
const $label_1_a =document.querySelector(`[for="pregunta_1_a"]`)  as HTMLElement
const $label_1_b =document.querySelector(`[for="pregunta_1_b"]`) as HTMLElement
const $label_1_c =document.querySelector(`[for="pregunta_1_c"]`) as HTMLElement
const all_tags_1 = [$label_1_a,$label_1_b,$label_1_c]
if ((<HTMLElement> e.target).matches("#pregunta_1_a")){
  $input_hidden.value = "primera_pregunta_a" ;
  all_tags_1.forEach(elemento => {
    elemento.classList.remove("selected")
  })
  $label_1_a.classList.add("selected")
}
if ((<HTMLElement> e.target).matches("#pregunta_1_b")){
  $input_hidden.value = "b"
  all_tags_1.forEach(elemento => {
    elemento.classList.remove("selected")
  })
  $label_1_b.classList.add("selected")
}
if ((<HTMLElement> e.target).matches("#pregunta_1_c")){
$input_hidden.value = "c";
all_tags_1.forEach(elemento => {
  elemento.classList.remove("selected")
})
$label_1_c.classList.add("selected")
}
//Segunda pregunta
const $pregunta_2_true =document.querySelector(`[for="pregunta_2_true"]`) as HTMLElement ;
const $pregunta_2_false =document.querySelector(`[for="pregunta_2_false"]`) as HTMLElement;
const all_tags_2: HTMLElement[] = [$pregunta_2_false, $pregunta_2_true]     
if((<HTMLElement> e.target).matches("#pregunta_2_true")){
  $input_hidden.value = "pregunta_2_true";
  all_tags_2.forEach((elemento: any) => {
    elemento.classList.remove("selected")
  })
  $pregunta_2_true.classList.add("selected")
}
if((<HTMLElement> e.target).matches("#pregunta_2_false")){
  $input_hidden.value = "pregunta_2_false"
  all_tags_2.forEach((elemento:any )=> {
    elemento.classList.remove("selected")
  })
  $pregunta_2_false.classList.add("selected")
}
//Tercera Pregunta
const $pregunta_3_a =document.querySelector(`[for="pregunta_3_a"]`) as HTMLElement
const $pregunta_3_b =document.querySelector(`[for="pregunta_3_b"]`) as HTMLElement
const $pregunta_3_c =document.querySelector(`[for="pregunta_3_c"]`) as HTMLElement
const all_tags_3: HTMLElement[] = [$pregunta_3_a,$pregunta_3_b,$pregunta_3_c]     
if((<HTMLElement> e.target).matches("#pregunta_3_a")){
    $input_hidden.value = "pregunta_3_a";
    all_tags_3.forEach((elemento) => {
      elemento.classList.remove("selected");
    })
    $pregunta_3_a.classList.add("selected")
}
if((<HTMLElement> e.target).matches("#pregunta_3_b")){
    $input_hidden.value = "pregunta_3_b"
    all_tags_3.forEach((elemento) => {
      elemento.classList.remove("selected");
    })
    $pregunta_3_b.classList.add("selected")
}
if((<HTMLElement> e.target).matches("#pregunta_3_c")){
    $input_hidden.value = "pregunta_3_c";
    all_tags_3.forEach((elemento) => {
      elemento.classList.remove("selected");
    })
    $pregunta_3_c.classList.add("selected")
}
//Cuarta pregunta
const $pregunta_4_a =document.querySelector(`[for="pregunta_4_a"]`) as HTMLElement
const $pregunta_4_b =document.querySelector(`[for="pregunta_4_b"]`) as HTMLElement
const $pregunta_4_c =document.querySelector(`[for="pregunta_4_c"]`) as HTMLElement
const all_tags_4: HTMLElement[] = [$pregunta_4_a,$pregunta_4_b,$pregunta_4_c]      
if((<HTMLElement> e.target).matches("#pregunta_4_a")){
  $input_hidden.value = "pregunta_4_a";
  all_tags_4.forEach((e) => {
    e.classList.remove("selected")
  })
  $pregunta_4_a.classList.add("selected")
}
if((<HTMLElement> e.target).matches("#pregunta_4_b")){
  $input_hidden.value = "pregunta_4_b"
  all_tags_4.forEach((e) => {
    e.classList.remove("selected")
  })
  $pregunta_4_b.classList.add("selected")
}
if((<HTMLElement> e.target).matches("#pregunta_4_c")){
  $input_hidden.value = "pregunta_4_c"
  all_tags_4.forEach((e) => {
    e.classList.remove("selected")
  })
  $pregunta_4_c.classList.add("selected")
}

//Quinta pregunta
const $pregunta_5_a = document.querySelector(".pregunta_5_a") as HTMLElement;
const $pregunta_5_b = document.querySelector(".pregunta_5_b")as HTMLElement;
const $pregunta_5_c = document.querySelector(".pregunta_5_c") as HTMLElement;      
const $pregunta_5_1 = document.querySelector(".pregunta_5_1") as HTMLElement;
const $pregunta_5_2 = document.querySelector(".pregunta_5_2") as HTMLElement;   
const $pregunta_5_3 = document.querySelector(".pregunta_5_3")as HTMLElement;             
const $_pregunta_5_ll_1 = document.querySelector("._pregunta_5_ll_1") as HTMLElement;
const $_pregunta_5_ll_2 = document.querySelector("._pregunta_5_ll_2")as HTMLElement;
const $_pregunta_5_ll_3 = document.querySelector("._pregunta_5_ll_3")as HTMLElement;
const $_pregunta_5_ll_4 = document.querySelector("._pregunta_5_ll_4")as HTMLElement;
const $_pregunta_5_ll_5 = document.querySelector("._pregunta_5_ll_5")as HTMLElement;
const $_pregunta_5_ll_6 = document.querySelector("._pregunta_5_ll_6")as HTMLElement;
const $_pregunta_5_ll_labels: HTMLElement[] | any[] = [$_pregunta_5_ll_1,$_pregunta_5_ll_2,$_pregunta_5_ll_3,$_pregunta_5_ll_4,$_pregunta_5_ll_5,$_pregunta_5_ll_6]
const $_pregunta_5_labels: HTMLElement[] = [$pregunta_5_a,$pregunta_5_b,$pregunta_5_c,$pregunta_5_1,$pregunta_5_2,$pregunta_5_3]
if((<HTMLElement> e.target).matches(".pregunta_5_a")){   
    $pregunta_5_a.style.display = "none"
    for(let i: number = 0 ; i < $_pregunta_5_ll_labels.length; i++ ){
        if($_pregunta_5_ll_labels[i].textContent.length == 0){
            $_pregunta_5_ll_labels[i].innerHTML = $pregunta_5_a.textContent;
        break;
        }   
    }
}
if((<HTMLElement> e.target).matches(".pregunta_5_b")){         
    $pregunta_5_b.style.display = "none"
    for(let i = 0 ; i < $_pregunta_5_ll_labels.length; i++ ){
        if($_pregunta_5_ll_labels[i].textContent.length == 0){
            $_pregunta_5_ll_labels[i].innerHTML = $pregunta_5_b.textContent;
            break;
        }
    }
 }
 if((<HTMLElement> e.target).matches(".pregunta_5_c")){ 
    $pregunta_5_c.style.display = "none"
        for(let i = 0 ; i < $_pregunta_5_ll_labels.length; i++ ){
            if($_pregunta_5_ll_labels[i].textContent.length == 0){
                $_pregunta_5_ll_labels[i].innerHTML = $pregunta_5_c.textContent;
            break;
            }
        }
 }
 if((<HTMLElement> e.target).matches(".pregunta_5_1")){           
    $pregunta_5_1.style.display = "none"
        for(let i = 0 ; i < $_pregunta_5_ll_labels.length; i++ ){
            if($_pregunta_5_ll_labels[i].textContent.length == 0){
                $_pregunta_5_ll_labels[i].innerHTML = $pregunta_5_1.textContent;
                break;
            }
        }
 }
if((<HTMLElement> e.target).matches(".pregunta_5_2")){        
    $pregunta_5_2.style.display = "none"
        for(let i = 0 ; i < $_pregunta_5_ll_labels.length; i++ ){
            if($_pregunta_5_ll_labels[i].textContent.length == 0){
                $_pregunta_5_ll_labels[i].innerHTML = $pregunta_5_2.textContent;
                break;
            }
        }
}
if((<HTMLElement> e.target).matches(".pregunta_5_3")){        
    $pregunta_5_3.style.display = "none"
    for(let i = 0 ; i < $_pregunta_5_ll_labels.length; i++ ){
        if($_pregunta_5_ll_labels[i].textContent.length == 0){
            $_pregunta_5_ll_labels[i].innerHTML = $pregunta_5_3.textContent;
            break;
        }
    }
}
  //sexta pregunta
  const $pregunta_6_a =document.querySelector(".pregunta_6_a") as HTMLElement;
  const $pregunta_6_b =document.querySelector(".pregunta_6_b") as HTMLElement;
  const $pregunta_6_c =document.querySelector(".pregunta_6_c") as HTMLElement; 
  const $pregunta_6_1 =document.querySelector(".pregunta_6_1") as HTMLElement; 
  const $pregunta_6_2 =document.querySelector(".pregunta_6_2") as HTMLElement; 
  const $pregunta_6_3 =document.querySelector(".pregunta_6_3") as HTMLElement;
  const $_pregunta_6_ll_1 = document.querySelector("._pregunta_6_ll_1") as HTMLElement;
  const $_pregunta_6_ll_2 = document.querySelector("._pregunta_6_ll_2") as HTMLElement;
  const $_pregunta_6_ll_3 = document.querySelector("._pregunta_6_ll_3") as HTMLElement; 
  const $_pregunta_6_ll_4 = document.querySelector("._pregunta_6_ll_4") as HTMLElement;
  const $_pregunta_6_ll_5 = document.querySelector("._pregunta_6_ll_5") as HTMLElement; 
  const $_pregunta_6_ll_6 = document.querySelector("._pregunta_6_ll_6") as HTMLElement
  const $_pregunta_6_ll_labels: any[] = [$_pregunta_6_ll_1,$_pregunta_6_ll_2,$_pregunta_6_ll_3,$_pregunta_6_ll_4,$_pregunta_6_ll_5,$_pregunta_6_ll_6]
  if((<HTMLElement> e.target).matches(".pregunta_6_a")){    
      $pregunta_6_a.style.display = "none"
          for(let i = 0 ; i < $_pregunta_6_ll_labels.length; i++ ){
              if($_pregunta_6_ll_labels[i].textContent.length == 0){
                  $_pregunta_6_ll_labels[i].innerHTML = $pregunta_6_a.textContent;
                  break;
              }   
        }
}
if((<HTMLElement> e.target).matches(".pregunta_6_b")){
    $pregunta_6_b.style.display = "none"
        for(let i = 0 ; i < $_pregunta_6_ll_labels.length; i++ ){
            if($_pregunta_6_ll_labels[i].textContent.length == 0){
                $_pregunta_6_ll_labels[i].innerHTML = $pregunta_6_b.textContent;
                break;
            }
        }
}
if((<HTMLElement> e.target).matches(".pregunta_6_c")){           
    $pregunta_6_c.style.display = "none"
        for(let i = 0 ; i < $_pregunta_6_ll_labels.length; i++ ){
            if($_pregunta_6_ll_labels[i].textContent.length == 0){
                $_pregunta_6_ll_labels[i].innerHTML = $pregunta_6_c.textContent;
                break;
            }
        }
}
if((<HTMLElement> e.target).matches(".pregunta_6_1")){            
     $pregunta_6_1.style.display = "none"
        for(let i = 0 ; i < $_pregunta_6_ll_labels.length; i++ ){
            if($_pregunta_6_ll_labels[i].textContent.length == 0){
                $_pregunta_6_ll_labels[i].innerHTML = $pregunta_6_1.textContent;
                break;
            }
        }
}
if((<HTMLElement> e.target).matches(".pregunta_6_2")){         
    $pregunta_6_2.style.display = "none"
        for(let i = 0 ; i < $_pregunta_6_ll_labels.length; i++ ){
            if($_pregunta_6_ll_labels[i].textContent.length == 0){
                $_pregunta_6_ll_labels[i].innerHTML = $pregunta_6_2.textContent;
                break;
            }
        }
}
if((<HTMLElement> e.target).matches(".pregunta_6_3")){          
    $pregunta_6_3.style.display = "none"
    for(let i = 0 ; i < $_pregunta_6_ll_labels.length; i++ ){
        if($_pregunta_6_ll_labels[i].textContent.length == 0){
            $_pregunta_6_ll_labels[i].innerHTML = $pregunta_6_3.textContent;
            break;
        }
    }
}


//Verificacion   
if ((<HTMLElement> e.target).matches(".verification_button")) {
  if($btn.getAttribute("data-verificar") == "true"){
        //Primera pregunta                     
        if($input_hidden.value == "primera_pregunta_a"){
            $start.innerHTML = `${ 1 + Number.parseInt($start.textContent as any | null)}`
            Swal.fire({
                title: "¡Buen Trabajo!",
                icon: "success",
                confirmButtonText: "Continuar",
            }).then((result) => {
            if (result.isConfirmed) {
                validar_siguiente_pregunta()                       
            }
          });
        }else{  
          Swal.fire({
              title: "¡Respuesta incorrecta!",
              icon: "error",
              confirmButtonText: "Continuar",
              }).then((result: any) => {
              if (result.isConfirmed) {
                  validar_siguiente_pregunta()                       
              }
            });
        }
        //Segunda Pregunta
        if($input_hidden.value == "pregunta_2_false"){
            $start.innerHTML = `${ 1 + Number.parseInt($start.textContent)}`
              Swal.fire({
                  title: "¡Buen Trabajo!",
                  icon: "success",
                  confirmButtonText: "Continuar",
              }).then((result) => {
                  if (result.isConfirmed) {
                    validar_siguiente_pregunta()                       
                  }
              });
        }
        }
        //Tercera pregunta
        if($input_hidden.value == "pregunta_3_c"){
            $start.innerHTML = `${ 1 + Number.parseInt($start.textContent)}`
                Swal.fire({
                    title: "¡Buen Trabajo!",
                    icon: "success",
                    confirmButtonText: "Continuar",
                }).then((result) => {
                    if (result.isConfirmed) {
                      validar_siguiente_pregunta()                       
                    }
                });
        }
         //Cuarta pregunta
    if($input_hidden.value == "pregunta_4_c"){
        $start.innerHTML = `${1 + Number.parseInt($start.textContent)}`
        Swal.fire({
            title: "¡Buen Trabajo!",
            icon: "success",
            confirmButtonText: "Continuar",
            }).then((result) => {
                if (result.isConfirmed) {
                validar_siguiente_pregunta()                       
                }
            });
    }
    //Quinta pregunta
      let $respuesta_5 = `${$_pregunta_5_ll_1.textContent} ${$_pregunta_5_ll_2.textContent}${$_pregunta_5_ll_3.textContent} ${$_pregunta_5_ll_4.textContent} ${$_pregunta_5_ll_5.textContent} ${$_pregunta_5_ll_6.textContent}`
      if($respuesta_5 == `Desarrollo sostenible: satisfacer las necesidades presentes sin comprometer la capacidad de las generaciones futuras para satisfacer las suyas. Educación ambiental: es un proceso continuo que promueve la justicia social, la conservación del medio ambiente y el desarrollo sostenible. Sostenibilidad: El uso responsable de los recursos para garantizar su disponibilidad en el futuro.`){
          $start.innerHTML = `${1 + Number.parseInt($start.textContent)}`
          Swal.fire({
              title: "¡Buen Trabajo!",
              icon: "success",
              confirmButtonText: "Continuar",
              }).then((result) => {
                  if (result.isConfirmed) {
                  validar_siguiente_pregunta()                       
                  }
              });
      }         
        //sexta pregunta
      let $respuesta_6 = `${$_pregunta_6_ll_1.textContent} ${$_pregunta_6_ll_2.textContent} ${$_pregunta_6_ll_3.textContent} ${$_pregunta_6_ll_4.textContent} ${$_pregunta_6_ll_5.textContent} ${$_pregunta_6_ll_6.textContent}`
      if($respuesta_6 == `UNESCO: Colabora con gobiernos y organizaciones para fortalecer la educación ambiental. ONU Medio Ambiente: Implementa programas educativos sobre cambio climático y biodiversidad. PNUMA: Promueve la educación ambiental para el desarrollo sostenible.`){
          $start.innerHTML = `${1 + Number.parseInt($start.textContent)}`
            Swal.fire({
                title: "¡Buen Trabajo!",
                icon: "success",
                confirmButtonText: "Continuar",
                }).then((result) => {
                    if (result.isConfirmed) {
                    validar_siguiente_pregunta()                       
                    }
                });
      }
    }                
}); 