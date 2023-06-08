

<?php include('../../../treatment/actions/ajouter_contact.php'); ?>
<?php //include('../../../treatment/actions/list_and_contact.php'); ?>

  <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- NAV VERTICALE -->
    <?php include('../../nav/nav_vertical.php');?>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">


      
<?php
 $id_groupe = htmlspecialchars($_GET['id_groupe']);



    $affiche_contact_groupe = $connexion ->query("SELECT * FROM contacts WHERE id_user = '$id_user'");
  
    $AppartientAucuneList = $connexion -> query("SELECT * FROM contacts WHERE
    id_contact NOT IN (
        SELECT id_contact FROM appartenir
    );"
    );
   
		
/*
 $affiche_contact_groupe = $connexion ->query("SELECT
    c.id_contact, c.nom_contact, c.prenom_contact, c.numero_contact, c.date_creation,
    CASE
    WHEN a.id_groupe IS NOT NULL THEN 'Retirer'
    ELSE 'Ajouter'
    END AS action
    FROM contacts c
    LEFT JOIN appartenir a ON c.id_contact = a.id_contact AND a.id_groupe = '$id_groupe'
    WHERE a.id_groupe = '$id_groupe' OR a.id_contact IS NULL;
    ");
    */
 ?> 
 <?php
 //Selectionner la liste en cours
        $groupe = $connexion->query("SELECT * FROM groupe_contact WHERE id_groupe = '$id_groupe'");
        $groupe = $groupe->fetch();

        //Selectionner les contacts qui appartiennent a la liste

        $appartenance = $connexion-> query("SELECT COUNT(*) FROM appartenir WHERE id_groupe =  '$id_groupe';");

        $app = $appartenance->fetch();
?>

    
    
    <?php include('../../nav/nav_horizontal.php');?>   


    <div class="containn">

 
    <div class="box">   
                <h2 class="text-center btn"></i>&nbsp;<strong>liste <?php //echo $groupe['nom_groupe']. ' possède ' .$app[0]; ?></strong> </h2>
                <div class="btn-group">
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

                while($row = $affiche_contact_groupe->fetch())
                {
                ?>
                    <?php
                        $id_contact = $row['id_contact'];

                        $Appartient = $connexion ->query("SELECT * FROM appartenir WHERE id_groupe = '$id_groupe' AND id_contact = '$id_contact'");

                        $AppartientAutreList = $connexion ->query("SELECT * FROM  appartenir WHERE id_contact<>'$id_contact'");
                    ?>
                    
                    <?php
                        while($Appartien = $Appartient->fetch())
                        {
                            if($id_contact == $Appartien['id_contact']){
                            ?>
                            <tr>          
                            <td><?php echo $row['prenom_contact'].' '.$row['nom_contact'];?></td>
                            <td><?php echo $row['numero_contact'];?></td>
                            <td><?php echo $row['date_creation'] ?></td>
                            <td>
                            <a href="../../../treatment/actions/Actions_contact_list.php?Retirer=<?php echo $Appartien["id_contact"];?>&id_groupe=<?php echo $id_groupe?>">Retirer</a>
                            </td>
                        </tr>
                      
                        <?php
                            }
                        }
                        ?>

                        
                        <?php
                        
                            while($roww = $AppartientAucuneList->fetch()){?>

                        <tr>        
                            <td><?php echo $roww['prenom_contact'].' '.$roww['nom_contact'];?></td>
                            <td><?php echo $roww['numero_contact'];?></td>
                            <td><?php echo $roww['date_creation'] ?></td>
                            <td>
                            <a href="../../../treatment/actions/Actions_contact_list.php?Ajouter=<?php echo $roww["id_contact"];?>&id_groupe=<?php echo $id_groupe?>">Ajouter</a>
                            </td>
                        </tr>

                        <?php     
                            }
                        
                        ?>


                        <?php               
                        while($row = $AppartientAutreList->fetch())
                        {
                            if($id_contact == $row['id_contact']){
                            ?>
                            <tr>          
                            <td><?php echo $row['prenom_contact'].' '.$row['nom_contact'];?></td>
                            <td><?php echo $row['numero_contact'];?></td>
                            <td><?php echo $row['date_creation'] ?></td>
                            <td>
                            <a href="../../../treatment/actions/Actions_contact_list.php?Retirer=<?php echo $AppartientAutreList["id_contact"];?>&id_groupe=<?php echo $id_groupe?>">Retirer</a>
                            </td>
                        </tr>
                      
                        <?php
                            }  
                        }
                        ?>   
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
    
    </div>
  

