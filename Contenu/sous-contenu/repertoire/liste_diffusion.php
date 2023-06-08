    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link rel="stylesheet" href="../../../assets/css/style.css">

    <!-- NAV VERTICALE -->
    <?php
        include('../../nav/nav_vertical.php');
    ?>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">

    <?php include('../../../treatment/actions/ajouter_groupe.php'); ?>

    <?php
        include('../../nav/nav_horizontal.php');
    ?>


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
        $list_groupe = $connexion->query("SELECT * FROM groupe_contact WHERE id_user = '$id_user'");
        
        //var_dump($list_contact);
    ?>


        <div class="containn">
                
                
                
                
        <div class="box">   
                <h2 class="text-center btn"><i class="fa fa-share" aria-hidden="true"></i> &nbsp;<strong>Liste de diffusion</strong> </h2>
                <div class="btn-group">
                        <button class="btn-row " id="myBtn"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Ajouter un groupe</button>


                        <a onclick = "return confirm('Voulez-vous supprimer ce Groupe ?')"  href="../../../treatment/actions/delete_all_groupe.php?id_u=<?php echo $id_user ;?>"><button class="btn-delete button"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; vider les groupes</button></a>
                         <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content" >
                                <span class="close">&times;</span>
                                <h2>Ajouter un Groupe</h2>
                                <form method="POST" action="">
                                    <!-- <label for="id">Votre ID:</label>-->
                                    <input  type="id" name="id" id="id" VALUE="<?php echo $info['id_user'] ?>" readonly >
                                    <br><br>
                                    <!-- <label for="nom">Nom du Groupe :</label> -->
                                    <input  type="text" name="nom" id="nom" placeholder="Entrez le nom" required>
                                    <br><br>
                                    <!-- <label for="description">Description :</label> -->
                                    <input type="text" name="description" id="description" placeholder="Entrez la description"  required>
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
                            <th>Nom de la liste</th>
                            <th>Description</th>
                            <th>Date d'ajout</th>
                            <th>Actions</th>
                        </tr>
                </thead>

                <tbody>
                <?php
                $groupe = $list_groupe->fetchAll();
                foreach ($groupe as $groupe_c){
                ?>
                        <tr> 
                        <a href="link_contact.php">        
                        <td><?php echo $groupe_c['nom_groupe'];?></td>
                        <td><?php echo $groupe_c['description_groupe'];?></td>
                        <td><?php echo $groupe_c['date_creation'] ?></td>
                        </a>
                        <td>
                            <button type="button" id="<?php echo $groupe_c['id_groupe'];?>" class="btn-update button">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                            <a href="link_contact?id_user=<?php echo $id_user?>&id_groupe=<?php echo $groupe_c['id_groupe']?>"><button style="background-color:#2BAEEF; cursor:pointer;" type="button" class="btn-trash buttonn" data-bs-toggle="modal">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            </a>
                            <a onclick = "return confirm('Voulez-vous supprimer ce groupe ?')" href="../../../treatment/actions/delete_all_groupe.php?id_user=<?php echo $id_user?>&id_groupe=<?php echo $groupe_c['id_groupe']?>"><button type="button" class="btn-trash button" data-bs-toggle="modal">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            </a>
                            
                        </td>
                    </tr>

                      <!-- FORMULAIRE DE MODIFICATION POPUP-->
                                    <!-- The Modal -->
                                    <div id="popup_<?php echo $groupe_c['id_groupe'];?>" class="moda">
                                <!-- Modal content -->
                                <div class="moda-content" >
                                <span class="closee">&times;</span>
                                <h2>Modifier Contact</h2>
                                <form method="POST" action="../../../treatment/actions/modifier_groupe.php?groupe=<?php echo $groupe_c['nom_groupe']?>&id_groupe=<?php echo $groupe_c['id_groupe']?>">
                                    <!-- <label for="id">Votre ID:</label> -->
                                    <input  type="id" name="id" id="id" VALUE="<?php echo $info['id_user'] ?>" readonly >
                                    <br><br>
                                    <!-- <label for="nom_groupe">Nom :</label> -->
                                    <input  type="text" value="<?php echo $groupe_c['nom_groupe']?>" name="nom_groupe" id="nom_groupe" placeholder="Entrez le nom"  required >
                                    <br><br>
                                    <!-- <label for="description_groupe">Description :</label> -->
                                    <input type="text" value="<?php echo $groupe_c['description_groupe']?>"  name="description_groupe" id="description_groupe" placeholder="Entrez la description"  required>
                                    <br><br>
                                    <button type="submit">Modifier</button>
                                    <br>
                                </form>  
                              </div>
                            </div>

                            <script>
                    <?php foreach ($groupe as $groupe_c) { ?>

                        // Get the modal
                        var modal_<?php echo $groupe_c['id_groupe'];?> = document.getElementById("popup_<?php echo $groupe_c['id_groupe'];?>");

                        // Get the button that opens the modal
                        var btn_<?php echo $groupe_c['id_groupe'];?> = document.getElementById("<?php echo $groupe_c['id_groupe'];?>");

                        // Get the <span> element that closes the modal
                        var span_<?php echo $groupe_c['id_groupe'];?> = modal_<?php echo $groupe_c['id_groupe'];?>.getElementsByClassName("closee")[0];

                        // When the user clicks on the button, open the modal
                        btn_<?php echo $groupe_c['id_groupe'];?>.onclick = function() {
                            modal_<?php echo $groupe_c['id_groupe'];?>.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span_<?php echo $groupe_c['id_groupe'];?>.onclick = function() {
                            modal_<?php echo $groupe_c['id_groupe'];?>.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal_<?php $groupe_c['id_groupe'];?>) {
                                modal_<?php echo $groupe_c['id_groupe'];?>.style.display = "none";
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

   