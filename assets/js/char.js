let form = document.querySelector('#ecoute')


form.caracters.addEventListener('keyup', function(){
    nombrechars(this);
    
});

const nombrechars = function(Nombre_char){
    let nombre = Nombre_char.value.length
    let reste = nombre % 160;
    let message = Math.floor(nombre/160);
    let span = document.getElementById('caracters').previousElementSibling;
    if(nombre==0){
        span.innerHTML = "";
    }

    if(nombre>=0 && nombre<161){
        span.innerHTML = nombre+"/160 caractères";
    }
    if(nombre>160){
        span.innerHTML = message +" SMS et " + reste + " caractères /160";
        if(reste==0){
            span.innerHTML = message +" SMS";
        }


    
}
span

    

}