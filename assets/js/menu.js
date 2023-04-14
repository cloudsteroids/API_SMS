

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



function popupEcho(val)
{
    
    if(val==1)
    {
        document.getElementById('popup').style.display="block";
    }
    if(val==0)
    {
        document.getElementById('popup').style.display="none";
    }
}
