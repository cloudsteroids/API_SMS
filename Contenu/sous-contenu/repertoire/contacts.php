
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
        <div class="contain">
                
                
        <div class="box">   
                <h2 class="text-center btn"><strong>Liste des contacts</strong> </h2>
                <div class="btn-group">
                        <button class="btn-row "><i class="fa fa-plus" aria-hidden="true"></i>Ajouter un contact</button>
                        <button class="btn-row"><i class="fa fa-upload" aria-hidden="true"></i>Exporter la liste</button>
                </div>
            <input type="text" id="myInput" onkeyup="searchTable()"  placeholder="Recherche...">
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
  
</body>
</html>