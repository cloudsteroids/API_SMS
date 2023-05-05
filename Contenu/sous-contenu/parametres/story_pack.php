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
        <div class="containn">
                
                
        <div class="box">   
                <h2 class="text-center btn"><i class="fa fa-archive" aria-hidden="true"></i>&nbsp;<strong>Historique de vos achats</strong> </h2>
               <button class="btn-grey"><i class="fa fa-cloud-download" aria-hidden="true"></i> &nbsp; Exporter en CSV</button>
            <input type="text" id="myInput" onkeyup="searchTable()"  placeholder="Recherche..." class="inputsearch">
            <div class="padding5"></div>
            <table id="customers" class="table" style="width:95%; overflow-x:auto;">
                <thead>
                        <tr>
                            <th>Date et heure</th>
                            <th>Numéro de commande</th>
                            <th>Achats</th>
                            <th>Moyen de paiement</th>
                            <th>Prix</th>
                            <th>Statut</th>

                        </tr>
            </thead>

            <tbody>
                        <tr>
                            <td>26/02/2023 12:15:03:01</td>
                            <td>ABHLMEU4E</td>
                            <td>Pack minis</td>
                            <td>Orange Money</td>
                            <td>8000 CFA</td>
                            <td><button class="btn-green">Activé</button></td>

                        </tr>
                        <tr>
                            <td>26/02/2023 12:15:03:01</td>
                            <td>ABHLMEU4E</td>
                            <td>Pack minis</td>
                            <td>Orange Money</td>
                            <td>8000 CFA</td>
                            <td><button class="btn-green">Activé</button></td>

                        </tr>
                            <td>26/02/2023 12:15:03:01</td>
                            <td>ABHLMEU4E</td>
                            <td>Pack minis</td>
                            <td>Orange Money</td>
                            <td>8000 CFA</td>
                            <td><button class="btn-green">Activé</button></td>

                        </tr>
                             <td>26/02/2023 12:15:03:01</td>
                            <td>ABWC81HLL</td>
                            <td>Pack Premium</td>
                            <td>Carte Visa</td>
                            <td>8000 CFA</td>
                            <td><button class="btn-red">Desactivé</button></td>

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