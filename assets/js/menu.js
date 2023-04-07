const dropdowns =document.querySelectorAll('.dropdown');

dropdowns.forEach( dropdown =>{

    const menu = document.querySelector('.menu');
    const Messagerie = document.querySelector('.Messagerie');

    const options = document.querySelectorAll('.menu li');

    
    Messagerie.addEventListener('click', () => {
        
        Messagerie.classList.toggle('Messagerie-clicked');
 
        menu.classList.toggle('menu-open');


    });


    options.forEach(option =>{

       option.addEventListener('click', () =>{

        Messagerie.innerText = option.innerText;

        menu.classList.remove('menu-open');





       });
    }); 



});