<select id="deroulant" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="3">Three</option>
            </select>



            
  

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