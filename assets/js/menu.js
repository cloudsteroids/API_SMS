

document.getElementById('champ').style.display="inline-block";

function hideShowDiv(val)
{
    
    if(val==1)
    {
        document.getElementById('champ').style.display="inline-block";
        document.getElementById('deroulant').style.display="none";
    }
    if(val==2)
    {
        document.getElementById('champ').style.display="none";
        document.getElementById('deroulant').style.display="inline-block";
    }
}



//Code JS du Popup sur la page Envoi message



function popupEcho()
{
    

        document.getElementById('popup').style.visibility="visible";
        document.getElementById('popup').style.transform="scale(1.5)";
        document.getElementById('popup').style.transitionDuration="0.6s";
}

function popupRemove()
{
        document.getElementById('popup').style.visibility="hidden";
        document.getElementById('popup').style.transform="scale(0.01)";
        document.getElementById('popup').style.transitionDuration="0.2s";
        document.getElementById('popup').style.top="15%";
}