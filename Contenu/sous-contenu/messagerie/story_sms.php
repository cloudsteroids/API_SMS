

    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
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
        <div class="containn">
            <div class="box">   
                <h2 class="text-center btn"><strong>Historique des SMS</strong> </h2>
                <button id="myBtn" class="btn-delete button"><i class="fa fa-trash" aria-hidden="true"></i>Supprimer historique</button>
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Êtes vous sûre de vouloir supprimer l'historique des sms envoyés ?</p>
                        <div id="pagination">
                                <button  class="btn-pagination button">OUI</button>
                                <button  class="btn-pagination button">NON</button>
                        </div>

                    </div>
                </div>
            <input type="text" id="myInput" onkeyup="searchTable()"  placeholder="Recherche...">
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
                        <tr>
                            <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <tr>
                        <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                       
                        <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <td>24/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <td>24/02/2023 12:15:03:01</td>
                            <td>Groupe3</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Retard</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        <td>26/02/2023 12:15:03:01</td>
                            <td>Groupe2</td>
                            <td>Nous vous souhaitons la bienvenue à Cloud Steroids...</td>
                            <td>Envoyé</td>
                            <td><button class="btn-green button"><i class="fa fa-eye" aria-hidden="true"></i>voir</button></td>

                        </tr>
                        
             </tbody>

             <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>

                        </tr>
             </tfoot>
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