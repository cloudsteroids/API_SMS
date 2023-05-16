
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
    <?php
        //Recuperer les informations de l'uilisateur

        $info_user = $connexion->query("SELECT * FROM utilisateurs WHERE id_user = '$id_user'");
        $info = $info_user->fetch();
        //var_dump($info);
        $list_contact = $connexion->query("SELECT * FROM contacts ");
        $list_contact = $list_contact->fetch();
        //var_dump($list_contact);
    ?>
        <div class="containn">
               
                
        <div class="box">   
                <h2 class="text-center btn"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<strong>Liste des contacts</strong> </h2>
                <div class="btn-group">
                        <button class="btn-row " id="myBtn"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Ajouter un contact</button>
                         <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content" >
                                <span class="close">&times;</span>
                                <h2>Ajouter un contact</h2>
                                <form method="POST" action="../../../treatment/actions/ajouter_contact.php">
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
                                    <input type="submit" value="Ajouter" class="btn-row">
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
                            <th>Liste de diffusion</th>
                            <th>Date d'ajout</th>
                            <th></th>
                        </tr>
            </thead>

            <tbody>
                                <tr>
                                   
                                    <td>Thomas Radisson</td>
                                    <td>+225 0102315469</td>
                                    <td>cloud Steroids</td>
                                    <td>10/02/2023</td>
                                    <td>
                                        <button type="button" class="btn-update button" data-bs-toggle="modal" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn-trash button" data-bs-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                    
                                <tr>
                                    <td>Dominique Yao</td>
                                    <td>+225 0102315469</td>
                                    <td>AF food</td>
                                    <td>10/02/2023</td>
                                    <td>
                                        <button type="button" class="btn-update button" data-bs-toggle="modal" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn-trash button" data-bs-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
             
                                <tr>
                                    <td>Malou Andres</td>
                                    <td>+225 0102315469</td>
                                    <td>cloud Steroids</td>
                                    <td>10/02/2023</td>
                                    <td>
                                        <button type="button" class="btn-update button" data-bs-toggle="modal" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn-trash button" data-bs-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
             
                                <tr>
                                    <td>Aby Lobe</td>
                                    <td>+225 0102315469</td>
                                    <td>AF food</td>
                                    <td>10/02/2023</td>
                                    <td>
                                        <button type="button" class="btn-update button" data-bs-toggle="modal" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn-trash button" data-bs-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
             
                                <tr>
                                    
                                    <td>Ahmed Kaba</td>
                                    <td>+225 0102315469</td>
                                    <td>cloud Steroids</td>
                                    <td>10/02/2023</td>

                                    <td>
                                        <button type="button" class="btn-update button" data-bs-toggle="modal" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn-trash button" data-bs-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>Ahmed Kaba</td>
                                    <td>+225 0102315469</td>
                                    <td>cloud Steroids</td>
                                    <td>10/02/2023</td>

                                    <td>
                                        <button type="button" class="btn-update button" data-bs-toggle="modal" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn-trash button" data-bs-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>Ahmed Kaba</td>
                                    <td>+225 0102315469</td>
                                    <td>cloud Steroids</td>
                                    <td>10/02/2023</td>

                                    <td>
                                        <button type="button" class="btn-update button" data-bs-toggle="modal" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn-trash button" data-bs-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                 <tr>
                                    
                                    <td>Ahmed Kaba</td>
                                    <td>+225 0102315469</td>
                                    <td>cloud Steroids</td>
                                    <td>10/02/2023</td>

                                    <td>
                                        <button type="button" class="btn-update button" data-bs-toggle="modal" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn-trash button" data-bs-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
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