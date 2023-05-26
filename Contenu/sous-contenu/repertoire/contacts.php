
    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link rel="stylesheet" href="../../../assets/css/style.css">

    <!-- NAV VERTICALE -->
    <?php include('../../nav/nav_vertical.php');?>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">

    <?php include('../../../treatment/actions/ajouter_contact.php'); ?>
    
    <?php include('../../nav/nav_horizontal.php');?>   
  
<?
//Initialisation des messages d'erreur

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
    

    <?php
        //Recuperer les informations de l'uilisateur

        $info_user = $connexion->query("SELECT * FROM utilisateurs WHERE id_user = '$id_user'");
        $info = $info_user->fetch();
        //var_dump($info);
        $list_contact = $connexion->query("SELECT * FROM contacts WHERE id_user = '$id_user'");
        
        //var_dump($list_contact);
    ?>
        <div class="containn">
               
                
        <div class="box">   
                <h2 class="text-center btn"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<strong>Liste des contacts</strong> </h2>
                <div class="btn-group">
                        <button class="btn-row " id="myBtn"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Ajouter un contact</button>
                        <a onclick = "return confirm('Voulez-vous supprimer ce contact ?')"  href="../../../treatment/actions/delete_all_contacts.php?id_u=<?php echo $id_user ;?>"><button id="myBtn" class="btn-delete button"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Vider repertoire</button></a>
                         <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content" >
                                <span class="close">&times;</span>
                                <h2>Ajouter un contact</h2>
                                <form method="POST" action="">
                                    <label for="id">Votre ID:</label>
                                    <input  type="id" name="id" id="id" VALUE="<?php echo $info['id_user'] ?>" readonly >
                                    <br><br>
                                    <label for="nom">Nom du contact :</label>
                                    <input  type="text" name="nom" id="nom" required >
                                    <br><br>
                                    <label for="prenom">prenom du contact :</label>
                                    <input type="text" name="prenom" id="prenom" required>
                                    <br><br>
                                    <label for="numero">numero du contact :</label>
                                    <input type="text" name="numero" id="numero" required>
                                    <br><br>
                                    <input type="submit" name="Ajouter" value="Ajouter" class="btn-row">
                                    <br>
                                </form>  
                              </div>
                             </div>

                            




                        <button class="btn-row"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Exporter la liste</button>
                </div>
            <input type="text" id="myInput" onkeyup="searchTable()"  placeholder="Recherche..." class="inputsearch">
            <div class="padding5"></div>
            <table id="customers" class="table" style="width:95%; overflow-x:auto;">
                <thead>
                        <tr>
                            <th>Noms & prénoms</th>
                            <th>Numéro</th>
                            <th>Date d'ajout</th>
                            <th>Action(s)</th>
                        </tr>
                </thead>

                <tbody>

                <?php
                $list = $list_contact->fetchAll();
                foreach ($list as $list_c){
                ?>
                        <tr>          
                        <td><?php echo $list_c['prenom_contact'].' '.$list_c['nom_contact'];?></td>
                        <td><?php echo $list_c['numero_contact'];?></td>
                        <td><?php echo $list_c['date_creation'] ?></td>
                        <td>
                            <button type="button" id="<?php echo $list_c['id_contact'];?>" class="btn-update button">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                            <a onclick = "return confirm('Voulez-vous supprimer ce contact ?')" href="../../../treatment/actions/delete_all_contacts.php?id_user=<?php echo $id_user?>&id_contact=<?php echo $list_c['id_contact']?>"><button type="button" class="btn-trash button" data-bs-toggle="modal">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            </a>
                        </td>
                    </tr>

                    <!-- FORMULAIRE DE MODIFICATION POPUP-->
                                    <!-- The Modal -->
                                <div id="popup_<?php echo $list_c['id_contact'];?>" class="moda">
                                <!-- Modal content -->
                                <div class="moda-content" >
                                <span class="closee">&times;</span>
                                <h2>Modifier Contact</h2>
                                <form method="POST" action="">
                                    <label for="id">Votre ID:</label>
                                    <input  type="id" name="id" id="id" VALUE="<?php echo $info['id_user'] ?>" readonly >
                                    <br><br>
                                    <label for="nom">Nom :</label>
                                    <input  type="text" value="<?php echo $list_c['nom_contact']?>" name="nom_contact" id="nom" required >
                                    <br><br>
                                    <label for="prenom">Prénom :</label>
                                    <input type="text" value="<?php echo $list_c['prenom_contact']?>"  name="prenom_contact" id="prenom" required>
                                    <br><br>
                                    <label for="numero">Numéro :</label>
                                    <input type="text"value="<?php echo $list_c['numero_contact']?>"  name="numero_contact" id="numero" required>
                                    <br><br>
                                    <input type="submit" name="Modifier" value="Modifier" class="btn-row">
                                    <br>
                                </form>  
                              </div>
                             </div>


                    <script>
                    <?php foreach ($list as $list_c) { ?>
                        // Get the modal
                        var modal_<?php echo $list_c['id_contact'];?> = document.getElementById("popup_<?php echo $list_c['id_contact'];?>");

                        // Get the button that opens the modal
                        var btn_<?php echo $list_c['id_contact'];?> = document.getElementById("<?php echo $list_c['id_contact'];?>");

                        // Get the <span> element that closes the modal
                        var span_<?php echo $list_c['id_contact'];?> = modal_<?php echo $list_c['id_contact'];?>.getElementsByClassName("closee")[0];

                        // When the user clicks on the button, open the modal
                        btn_<?php echo $list_c['id_contact'];?>.onclick = function() {
                            modal_<?php echo $list_c['id_contact'];?>.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span_<?php echo $list_c['id_contact'];?>.onclick = function() {
                            modal_<?php echo $list_c['id_contact'];?>.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal_<?php echo $list_c['id_contact'];?>) {
                                modal_<?php echo $list_c['id_contact'];?>.style.display = "none";
                            }
                        }
                    <?php } ?>
                    </script>


                <?php      
                }
                ?>
                </tbody>

          </table> 
          <div id="pagination">
                <button id="prev" class="btn-pagination button">Précédent</button>
                <button id="next" class="btn-pagination button">Suivant</button>
          </div>

            </div>   

        </div>
    </div>  





    <script src="../../../assets/js/pagination.js"></script>
    <script>
            // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>



</body>
</html>

