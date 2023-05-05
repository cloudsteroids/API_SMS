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
                <h2 class="text-center btn"><strong>Liste de diffusion</strong> </h2>
                <div class="btn-group">
                        <button class="btn-row "><i class="fa fa-plus" aria-hidden="true"></i>Ajouter un groupe</button>
                        <button class="btn-row"><i class="fa fa-upload" aria-hidden="true"></i>Exporter la liste</button>
                </div>
            <input type="text" id="myInput" onkeyup="searchTable()"  placeholder="Recherche...">
            <div class="padding5"></div>
            <table id="customers" class="table" style="width:95%; overflow-x:auto;">
                <thead>
                        <tr>
                            <th>Nom de la liste</th>
                            <th>Description</th>
                            <th>Nombre de contact</th>
                            <th>Date d'ajout</th>
                            <th></th>

                        </tr>
            </thead>

            <tbody>
                                <tr>
                                   
                                    <td>Cloud Steroids</td>
                                    <td>liste des employés de l'entreprise</td>
                                    <td>10</td>
                                    <td>15/03/2023</td>
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
                                    <td>AF food</td>
                                    <td>liste des employés de l'entreprise</td>
                                    <td>200</td>
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
                                    <td>MSweet Plan'S</td>
                                    <td>liste des clients du mois de janvier</td>
                                    <td>500</td>
                                    <td>01/01/2023</td>
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
                                    <td>Heaven Yap'Shop</td>
                                    <td>liste des clients de janvier à decembre</td>
                                    <td>50</td>
                                    <td>22/02/2023</td>
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
                                    <td>Heaven Yap'Shop</td>
                                    <td>liste des clients de janvier à decembre</td>
                                    <td>50</td>
                                    <td>22/02/2023</td>
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
                                    <td>Heaven Yap'Shop</td>
                                    <td>liste des clients de janvier à decembre</td>
                                    <td>50</td>
                                    <td>22/02/2023</td>
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
                                    <td>Heaven Yap'Shop</td>
                                    <td>liste des clients de janvier à decembre</td>
                                    <td>50</td>
                                    <td>22/02/2023</td>
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
                                    <td>Heaven Yap'Shop</td>
                                    <td>liste des clients de janvier à decembre</td>
                                    <td>50</td>
                                    <td>22/02/2023</td>
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