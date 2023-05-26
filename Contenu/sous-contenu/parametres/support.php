 <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link rel="stylesheet" href="../../../assets/css/support.css">

    <!-- NAV VERTICALE -->
    <?php
        include('../../nav/nav_vertical.php');
    ?>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">
    <?php
        include('../../nav/nav_horizontal.php');
    ?>
        <div class="container " id="support">
            <!-- The grid: three columns -->
            <div class="row">
            <div class="column" onclick="openTab('b1');" style="background:lightslategrey;"><i class="fa fa-location-arrow" aria-hidden="true"></i> Adresse</div>
            <div class="column" onclick="openTab('b2');" style="background:lightslategrey;"><i class="fa fa-clock" aria-hidden="true"></i> Heure d'ouverture</div>
            <div class="column" onclick="openTab('b3');" style="background:lightslategrey;"><i class="fa fa-phone" aria-hidden="true"></i> Contacts</div>
            </div>

            <!-- The expanding grid (hidden by default) -->
            <div id="b1" class="containerTab" style="display:none;background:lightgray;">
            <!-- If you want the ability to close the container, add a close button -->
            <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
            <p>93H6+36C, Abidjan<br>Cocody, Faya</p>
            </div>

            <div id="b2" class="containerTab" style="display:none;background:silver">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
            <p>lundi- vendredi<br>8:00 - 17:30</p>
            </div>

            <div id="b3" class="containerTab" style="display:none;background:lightsteelblue">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
            <p><i class="fa fa-mobile" aria-hidden="true"></i> +225 2722246838<br><i class="fa fa-mobile" aria-hidden="true"></i> +225 0757927013</p>
            <p>info@cloudsteroids.com<br>sales@cloudsteroids.com</p>

            </div>
            <div class="container" >     
                    <form action="https://formsubmit.co/jeanphilippeouraga52@gmail.com" method="POST">
                       <!-- <input type="hidden" name="_next" value="\localhost/API_SMS/contenu/sous-contenu/parametres/support.php">-->
                        <input type="hidden" name="_subject" value="Demande Support API SMS !">
                        <!-- <input type="hidden" name="_cc" value=" un autre@email.com , encoreunautre@email.com "> -->
                        <input type="hidden" name="_captcha" value="true">
                        <input type="text" name="_honey" style="display:none">
                        <input type="hidden" name="_autoresponse" value="Bonjour, Ici Cloud Steroids, nous avons reçu votre demande de support, Notre equipe vous contactera dans un delais court.">
                        <input type="hidden" name="_template" value="table">

                        <div class="row">
                        <div class="col-25">
                            <label for="fname">Nom</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Votre nom.." required>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="lname">Prénoms</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="Votre prénom.."required>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="country">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="email" placeholder="Votre email.."required>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="subject">Sujet</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="écrire quelque chose.." style="height:200px" required></textarea>
                        </div>
                        </div>
                        <div class="row">
                        <input type="submit" value="Soumettre">
                        </div>
            </form>
  
            </div>
        </div>
    </div> 
    <script>
        // Hide all elements with class="containerTab", except for the one that matches the clickable grid column
        function openTab(tabName) {
        var i, x;
        x = document.getElementsByClassName("containerTab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
        }
    </script>   
</body>
</html>