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

if($connexion){
            $pref = uniqid('CS_');
            $test = uniqid($pref);
            echo($test);
        }