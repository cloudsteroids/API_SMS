let form = document.querySelector('#ecoute')
let maVariableGlobale = 0;// Déclaration de la variable globale

form.caracters.addEventListener('keyup', function(){
    maVariableGlobale = nombrechars(this);// Stockage de la valeur de message dans la variable globale
    
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
        message = 1;
        return message;
    }
    if(nombre>160){
        span.innerHTML = message +" SMS et " + reste + " caractères /160";
        
        if(reste==0){
            span.innerHTML = message +" SMS";
            return message;
        }

        return message;
    }
}

