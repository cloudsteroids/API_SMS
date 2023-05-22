
    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link rel="stylesheet" href="../../../assets/css/style.css">

    <!-- NAV VERTICALE -->
    <?php
        include('../../nav/nav_vertical.php');
    ?>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">
    <?php
        include('../../nav/nav_horizontal.php');
    ?>
        <div class="container box2" >
        <h2 class="text-center btn"><i class="fa fa-user" aria-hidden="true"></i> &nbsp; <strong>Paramètres du profil</strong> </h2>  &nbsp; 
        <div class="tabs ">
        <div class="tabby-tab">
            <input type="radio" id="tab-1" name="tabby-tabs" checked>
            <label for="tab-1" class="labeltab">Aperçu</label>
            <div class="tabby-content">
            <div class="shadow">
            <h2 class="text_center btn-grey"> Détails du profil &nbsp;</h2>

                                    <div class="info-row">
                                        <div class="marginR5"><strong>Nom & Prénoms:</strong> </div>
                                        <div class="marginR5">Ahideon Patricia</div>
                                    </div>
                                    <div class="info-row">
                                        <div class="marginR5"><strong> Sender Name:</strong></div>
                                        <div class="marginR5">Cloud Steroids</div>
                                    </div>
                                    <div class="info-row">
                                        <div class="marginR5"><strong>Adresse:</strong> </div>
                                        <div class="marginR5">93H6+36C, Abidjan, Cocody, Faya</div>
                                    </div>
                                    <div class="info-row">
                                        <div class="marginR5"><strong>Téléphone:</strong> </div>
                                        <div class="marginR5">(+225) 0758461239</div>
                                    </div>
                                    <div class="info-row">
                                        <div class="marginR5"><strong>Email:</strong> </div>
                                        <div class="marginR5">ahideonpatricia@cloudsteroids.com</div> 
                                    </div> 
                    </div>
             </div>
        </div>

        <div class="tabby-tab">
            <input type="radio" id="tab-2" name="tabby-tabs">
            <label for="tab-2" class="labeltab">Editer le profil</label>
            <div class="tabby-content">

                    <form>
                    <label for="fullName" class="btn-grey text_center">&nbsp; <strong> Modifier vos informations</strong> &nbsp; </label> 
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <br>
                        <label for="username" >Nom d'utilisateur</label>
                        <input type="text" id="username" name="username" class="inputedit" required>
                        </div>
                        <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" minlength="8" required>
                        </div>
                        <div class="form-group">
                        <label for="confirm-password">Confirmer le mot de passe</label>
                        <input type="password" id="confirm-password" name="confirm-password" minlength="8" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="image-file">Sélectionner une image :</label>
                            <input type="file" id="image-file" name="image" accept="image/*" onchange="previewImage(event)">
                        </div>
                        <div class="image-preview-container padding5"> 
                            <img class="image-preview" id="preview" src="#" alt="Aperçu de l'image sélectionnée">
                        </div>
                      </div>
                    </div>
                    
                        <button type="submit">Enregistrer</button>
                    </form>
               </div>
        </div>

        <div class="tabby-tab">
            <input type="radio" id="tab-3" name="tabby-tabs">
            <label for="tab-3" class="labeltab">Paramètres supplémentaires</label>
            <div class="tabby-content padding5">
            <form>
                                        <div >
                                            <label for="fullName" class="btn-grey text_center">&nbsp; <strong> Email Notifications</strong> &nbsp; </label> 
                                            <div class=""> <br>
                                                <div >
                                                    <input  type="checkbox" id="changesMade" >
                                                    <label  for="changesMade">
                                                        Modifications apportées à votre compte
                                                    </label>
                                                </div>
                                                <div >
                                                    <input  type="checkbox" id="newProducts" >
                                                    <label  for="newProducts">
                                                        Informations sur les nouveaux produits et services
                                                    </label>
                                                </div>
                                                <div >
                                                    <input  type="checkbox" id="proOffers">
                                                    <label  for="proOffers">
                                                        Offres marketing et promotionnelles
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input  type="checkbox" id="securityNotify" checked disabled>
                                                    <label  for="securityNotify">
                                                        Alertes de Sécurité
                                                    </label>
                                                </div> <br>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn-upgrade">Sauvegarder les Modifications</button>
                                        </div>
                                    </form>
                                
                                </div>
        </div>

        </div>
    </div> 
    <script>
        const form = document.querySelector('form');
        const username = document.querySelector('#username');
        const email = document.querySelector('#email');
        const password = document.querySelector('#password');
        const confirmPassword = document.querySelector('#confirm-password');

        form.addEventListener('submit', (e) => {
        e.preventDefault();

        if (password.value !== confirmPassword.value) {
            alert('Les mots de passe ne correspondent pas.');
            return;
        }

        // Enregistrer les modifications ici

        alert('Le profil a été mis à jour.');
        });
    </script>  
    <script>
      function previewImage(event) {
        var preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(event.target.files[0]);
      }
    </script> 
</body>
</html>
