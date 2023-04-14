
    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    
    <title>envoyer SMS</title>
    <!-- NAV VERTICALE -->
    <?php
        include('../../nav/nav_vertical.php');
    ?>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">
    <?php
        include('../../nav/nav_horizontal.php');
    ?> 
        <div class="containn">
                
            <div class="option_send">

                <input class="" type="radio" id="hide" onclick="hideShowDiv(1)" name="lang" id="">
                <label for="hide">SMS vers contact</label> 

                <input class="" type="radio" id="show" onclick="hideShowDiv(2)" name="lang" id="">
                <label for="show">SMS vers liste</label>

                <input id="champ" type="text" placeholder="Entrez un Numero 10 chiffres Ex: 0565282962"></input>

                <select id="deroulant" class="form-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="3">Three</option>
                </select>
                
            </div>

            <div class="form_sms">

                <form action="" method="post">

                    <textarea name="" id="" cols="100" rows="20" size=""></textarea>


                    <div class="button">
                        <button name="" type="submit">Envoyer</button>
                        <button onclick="popupEcho(1)" type="button">Programmer</button>
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
                                <button onclick="popupEcho(0)"  type="button">Annuler</button>
                                <button  type="submit" name="">Valider</button>
                            </div>
                        </form>
                    </div>
               
        </div>
    </div>    
</body>
</html>
<script src="../../../assets/js/menu.js"></script>