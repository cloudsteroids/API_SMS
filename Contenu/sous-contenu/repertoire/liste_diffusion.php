
    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


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
            <section class="section">
                <div class="row">
                    <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center send">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ajoutlist"><i class="bi bi-people-fill"></i>add Group</button>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deletelist"><i class="bi bi-person-fill-x"></i> delete group</button>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#"><i class="bi bi-box-arrow-in-down"></i> export</button>
                    </div>
                    <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center send">
                        <div class=" search ">
                            <input type="search" placeholder="type to search" >
                            <button class="btn btn-secondary" ><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <div>
                        <div class="contact-table">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </th>
                                        <th>NOm de la liste</th>
                                        <th>Description</th>
                                        <th>Nombre de Contact</th>
                                        <th>date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
            
                                <tbody>
                                    <tr>
                                        <th><span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                            <label for="checkbox1"></label>
                                        </th>
                                        <th>Cloud steroids</th>
                                        <th>liste des employés de l'entreprise</th>
                                        <th>10</th>
                                        <th>15/03/2024</th>
                                        <th>
                                            <button type="button" class="btn modif" data-bs-toggle="modal" data-bs-target="#modiflist">
                                                <i class="bi bi-pencil-square" data-toggle="tooltip"></i>
                                            </button>
                                            <button type="button" class="btn delete" data-bs-toggle="modal" data-bs-target="#deletelist">
                                                <i class="bi bi-trash" data-toggle="tooltip"></i>
                                            </button>
                                        </th>
                                    </tr>
                    
                                    <tr>
                                        <th><span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox2" name="option[]" value="1">
                                            <label for="checkbox2"></label>
                                        </th>
                                        <th>AF food</th>
                                        <th>liste des clients de AF food</th>
                                        <th>200</th>
                                        <th>02/11/2023</th>
                                        <th>
                                            <button type="button" class="btn modif" data-bs-toggle="modal" data-bs-target="#modiflist">
                                                <i class="bi bi-pencil-square" data-toggle="tooltip"></i>
                                            </button>
                                            <button type="button" class="btn delete" data-bs-toggle="modal" data-bs-target="#deletelist">
                                                <i class="bi bi-trash" data-toggle="tooltip"></i>
                                            </button>
                                        </th>
                                    </tr>
             
                                    <tr>
                                        <th><span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox3" name="option[]" value="1">
                                            <label for="checkbox3"></label>
                                        </th>
                                        <th>MSweet Plan'S</th>
                                        <th>liste des clients du mois de janvier</th>
                                        <th>30</th>
                                        <th>02/03/2024</th>
                                        <th>
                                            <button type="button" class="btn modif" data-bs-toggle="modal" data-bs-target="#modiflist">
                                                <i class="bi bi-pencil-square" data-toggle="tooltip"></i>
                                            </button>
                                            <button type="button" class="btn delete" data-bs-toggle="modal" data-bs-target="#deletelist">
                                                <i class="bi bi-trash" data-toggle="tooltip"></i>
                                            </button>
                                        </th>
                                    </tr>
             
                                    <tr>
                                        <th><span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox4" name="option[]" value="1">
                                            <label for="checkbox4"></label>
                                        </th>
                                        <th>Heaven Yap'Shop</th>
                                        <th>liste des clients de janvier à decembre</th>
                                        <th>30</th>
                                        <th>05/08/2023</th>
                                        <th>
                                            <button type="button" class="btn modif" data-bs-toggle="modal" data-bs-target="#modiflist">
                                                <i class="bi bi-pencil-square" data-toggle="tooltip"></i>
                                            </button>
                                            <button type="button" class="btn delete" data-bs-toggle="modal" data-bs-target="#deletelist">
                                                <i class="bi bi-trash" data-toggle="tooltip"></i>
                                            </button>
                                        </th>
                                    </tr>
             
                                    <tr>
                                        <th><span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox5" name="option[]" value="1">
                                            <label for="checkbox5"></label>
                                        </th>
                                        <th>MSweet Plan'S</th>
                                        <th>liste des prestataires du volet mariage</th>
                                        <th>10</th>
                                        <th>03/09/2023</th>
                                        <th>
                                            <button type="button" class="btn modif" data-bs-toggle="modal" data-bs-target="#modiflist">
                                                <i class="bi bi-pencil-square" data-toggle="tooltip"></i>
                                            </button>
                                            <button type="button" class="btn delete" data-bs-toggle="modal" data-bs-target="#deletelist">
                                                <i class="bi bi-trash" data-toggle="tooltip"></i>
                                            </button>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!------------------------ajouter une liste de diffusion---------------------->
                <div class="modal fade" tabindex="-1" id="ajoutlist" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Création d'une liste</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
		                            <label>Nom de la liste</label>
			                        <input type="text" class="form-control" required>
		                        </div>
		                        <div class="form-group">
		                            <label>Desription</label>
			                        <input type="text" class="form-control" required>
		                        </div>
		                        <div class="form-group">
		                            <label>Liste de diffussion</label>
                                    <select class="form-select" id="validationDefault04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="1">Ensit</option>
                                        <option value="2">AF food</option>
                                        <option value="3">liste Cloud Steroids</option>
                                    </select>
		                        </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">supprimer</button>
                                <button type="button" class="btn btn-success">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
      				   <!----Modifier une liste de diffusion-modal start--------->
                <div class="modal fade" tabindex="-1" id="modiflist" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modifier une liste de diffusion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
		                            <label>Nom de liste</label>
			                        <input type="text" class="form-control" required>
		                        </div>
		                        <div class="form-group">
		                            <label>description</label>
			                         <input type="text" class="form-control" required>
		                        </div>
		                        <div class="form-group">
		                            <label>Liste de diffusion</label>
			                        <input type="text" class="form-control" required>
		                        </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Supprimer</button>
                                <button type="button" class="btn btn-success">Sauvegarder</button>
                            </div>
                        </div>
                    </div>
                </div>			   
                <!-----------------------delete-modal start------------------------------------>
                <div class="modal fade" tabindex="-1" id="deletelist" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Employees</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Êtes-vous sûr de vouloir supprimer cet enregistrement ?</p>
		                        <p class="text-warning"><small>cette action ne peut pas être annulée,</small></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-success">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>    
</body>
</html>