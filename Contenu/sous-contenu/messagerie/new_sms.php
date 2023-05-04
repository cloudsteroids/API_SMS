 

    <!-- Header -->

    <?php include('../../nav/head.php');?>
    
    <title>envoyer SMS</title>
    <!-- NAV VERTICALE -->
    <?php
        include('../../nav/nav_vertical.php');
    ?>
    
    <?php include('../../../treatment/script/send_sms.php');?>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">
    
    <?php
        include('../../nav/nav_horizontal.php');
    ?> 
    <?
    
    $message_erreur='';

    $message_succes='';

    ?>
    



         <!-- Affichage des messages -->
         <?php 
            if(isset($message_erreur)){?>  
            <div class="message_erreur"><?php echo($message_erreur);?></div>
            <?php
            }
        ?>
         <?php 
            if(isset($message_succes)){?>  
            <div class="message_succes"><?php echo($message_succes);?></div>
            <?php
            }
        ?>
        
        
        
    
        <div class="containn">

       

            <div class="form_sms">

                <form method="POST" id="ecoute">


                <div class="option_send">

                <input class="" type="radio" id="hide" onclick="hideShowDiv(1)" name="lang" id="">
                <label for="hide">SMS vers contact</label> 

                <input class="" type="radio" id="show" onclick="hideShowDiv(2)" name="lang" id="">
                <label for="show">SMS vers liste</label>

                <input id="champ" type="text" name="send_number" placeholder="Entrez un Numero 10 chiffres Ex: +2250565282962"></input>

                <select id="deroulant" name="list_send" class="form-select">
                    <option value="">Selectionner un liste</option>
                </select>

                </div>

                    <span class="varchar" size="10">0/160 caractères</span>
                    <textarea name="message" id="caracters"  placeholder="Saisissez le message"></textarea>


                    <div class="button">
                        <button name="SEND_SMS" type="submit">Envoyer</button>
                        <button onclick="popupEcho()" type="button">Programmer</button>
                    </div>

                </form>

            </div>
            
            <!-- POPUP -->
            <div id="popup" class="popup">
                <h2>Planifier Envoi</h2>

                <img src="../../../assets/image/avion.jpg" alt="">
                <form action="" method="post">
                    <label for="date_send">Entrez la date d'envoi</label>
                    <input type="datetime-local" id="date_send" name="date_send">
                    <div class="button">
                        <button onclick="popupRemove()"  type="button">Annuler</button>
                        <button name="Programmer"  type="submit" name="">Valider</button>
                    </div>
                </form>
            </div>
               
        </div>
    </div>    
</body>
</html>
<script src="../../../assets/js/menu.js"></script>
<script src="../../../assets/js/char.js"></script>




