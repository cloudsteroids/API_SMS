 <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <title>Historique SMS</title>
    <!-- NAV VERTICALE -->
    <?php
        include('../../nav/nav_vertical.php');
    ?>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">
    <?php
        include('../../nav/nav_horizontal.php');
    ?>

    <?php
    //INCLURE LA CONNEXION A LA BASE DE DONNEES
    include('../../../treatment/actions/connexion.php');
    ?>


    <?php
    //Recuperation de tous les sms dans l'historique
    $recup_sms = $connexion->query("SELECT * FROM messages WHERE id_user = '$id_user'");
    ?>
    
        <div class="containn">
            <div class="box">   
                <h2 class="text-center btn"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;<strong>Historique des SMS</strong> </h2>
                <button id="myBtn" class="btn-delete button"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Supprimer historique</button>
                
                    <div id="myModal" class="modal">
                    <!-- Modal content --> 
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Êtes vous sûre de vouloir supprimer l'historique des sms envoyés ?</p>
                        <div id="pagination">
                                <button  class="btn-pagination button"><a  href="../../../treatment/actions/delete_all_sms.php?id_user=<?php echo $id_user?>">OUI</a></button>
                                <button  class="btn-pagination button"><a href="">NON</a></button>
                        </div>

                    </div>
                    
                </div>
            <input type="text" id="myInput" onkeyup="searchTable()"  placeholder="Recherche..." class="inputsearch">
            <div class="padding5"></div>
            <table id="customers" class="table" style="width:95%; overflow-x:auto;">
                <thead>
                        <tr>
                            <th>Date d'envoie</th>
                            <th>Destinataire</th>
                            <th>Message</th>
                            <th>Statut</th>
                            <th></th>

                        </tr>
            </thead>

            <tbody>

            <?php
                while( $story = $recup_sms->fetch())
                {?>
                <tr>    
                    <td><?php echo $story['date_envoi'] ;?></td>
                    <td><?php echo $story['destinataire'] ;?></td>
                    <td><?php echo $story['contenu_message'] ;?></td>
                    <td><?php echo $story['statut'] ;?></td>
                    <td><button class="btn-green button"><a onclick = "return confirm('Voulez-vous supprimer ce message ?')" href="../../../treatment/actions/delete_all_sms.php?id=<?php echo $id_user;?>&id_sms=<?php echo $story['id_message'];?>">supprimer</a></button></td>
                </tr>
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