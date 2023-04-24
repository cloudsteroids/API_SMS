
    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    
    <title>envoyer SMS</title>
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
    <div class="row">
        <div class="col-lg-12">
          <div class="send">
              <button type="button" class="btn btn-light" data-bs-toggle="#ajout-contact"><i class="bi bi-person-add"></i> add User</button> 

              <button type="button" class="btn btn-light"><i class="bi bi-people"></i> add multiples Users</button>

              <button type="button" class="btn btn-light" data-bs-toggle="#deletecontact"><i class="bi bi-person-fill-x"></i> delete user</button>

              <button type="button" class="btn btn-light"><i class="bi bi-box-arrow-in-down"></i> export</button>

          </div>
          <div class="contact-table">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th><span class="custom-checkbox">
                      <input type="checkbox" id="selectAll">
                      <label for="selectAll"></label>
                    </th>
                    <th>NOm & Prénoms</th>
                    <th>Numéro</th>
                    <th>Date</th>
                    <th>liste de diffusion</th>
                    <th>Actions</th>
                  </tr>
                </thead>
            
                <tbody>
                  <tr>
                    <th><span class="custom-checkbox">
                      <input type="checkbox" id="checkbox1" name="option[]" value="1">
                      <label for="checkbox1"></label>
                    </th>
                    <th>Thomas Hardy</th>
                    <th>+225 0102315469</th>
                    <th>10/02/2023</th>
                    <th>cloud Steroids</th>
                    <th>
                      <a href="#modif-contact" class="edit" data-toggle="modal">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="#deletecontact" class="delete" data-toggle="modal">
                        <i class="bi bi-trash"></i>
                      </a>
                    </th>
                  </tr>
                    
                  <tr>
                    <th><span class="custom-checkbox">
                      <input type="checkbox" id="checkbox2" name="option[]" value="1">
                      <label for="checkbox2"></label>
                    </th>
                    <th>Dominique Perrier</th>
                    <th>+225 0102315469</th>
                    <th>10/02/2023</th>
                    <th>cloud Steroids</th>
                    <th>
                      <a href="#modif-contact" class="edit" data-toggle="modal">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="#deletecontact" class="delete" data-toggle="modal">
                        <i class="bi bi-trash"></i>
                      </a>
                    </th>
                  </tr>
             
                  <tr>
                    <th><span class="custom-checkbox">
                      <input type="checkbox" id="checkbox3" name="option[]" value="1">
                      <label for="checkbox3"></label>
                    </th>
                    <th>Marai Andres</th>
                    <th>+225 0102315469</th>
                    <th>10/02/2023</th>
                    <th>cloud Steroids</th>
                    <th>
                      <a href="#modif-contact" class="edit" data-toggle="modal">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="#deletecontact" class="delete" data-toggle="modal">
                        <i class="bi bi-trash"></i>
                      </a>
                    </th>
                  </tr>
             
                  <tr>
                    <th><span class="custom-checkbox">
                      <input type="checkbox" id="checkbox4" name="option[]" value="1">
                      <label for="checkbox4"></label>
                    </th>
                    <th>Vishweb Design</th>
                    <th>+225 0102315469</th>
                    <th>10/02/2023</th>
                    <th>cloud Steroids</th>
                    <th>
                      <a href="#modif-contact" class="edit" data-toggle="modal">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="#deletecontact" class="delete" data-toggle="modal">
                        <i class="bi bi-trash"></i>
                      </a>
                    </th>
                  </tr>
             
                  <tr>
                    <th><span class="custom-checkbox">
                      <input type="checkbox" id="checkbox5" name="option[]" value="1">
                      <label for="checkbox5"></label>
                    </th>
                    <th>Vishwajeet Kumar</th>
                    <th>+225 0102315469</th>
                    <th>10/02/2023</th>
                    <th>cloud Steroids</th>
                    <th>
                      <a href="#modif-contact" class="edit" data-toggle="modal">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                      <a href="#deletecontact" class="delete" data-toggle="modal">
                        <i class="bi bi-trash"></i>
                      </a>
                    </th>
                  </tr>
                </tbody>
              </table>
              <div class="clearfix">
                <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
                <ul class="pagination">
                  <li class="page-item disabled"><a href="#">Previous</a></li>
                  <li class="page-item "><a href="#"class="page-link">1</a></li>
                  <li class="page-item "><a href="#"class="page-link">2</a></li>
                  <li class="page-item active"><a href="#"class="page-link">3</a></li>
                  <li class="page-item "><a href="#"class="page-link">4</a></li>
                  <li class="page-item "><a href="#"class="page-link">5</a></li>
                  <li class="page-item "><a href="#" class="page-link">Next</a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>

      									   <!----add-modal start--------->
      <div class="modal fade" tabindex="-1" id="ajout-contact" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ajouter un contact</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
		            <label>Nom & Prénoms</label>
			          <input type="text" class="form-control" required>
		          </div>
		          <div class="form-group">
		            <label>Numéro de téléphone</label>
			          <input type="text" class="form-control" required>
		          </div>
		          <div class="form-group">
		            <label>Liste de diffussion</label>
			          <textarea class="form-control" required></textarea>
		          </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">supprimer</button>
              <button type="button" class="btn btn-success">Ajouter</button>
            </div>
          </div>
        </div>
      </div>
      				   <!----edit-modal start--------->
      <div class="modal fade" tabindex="-1" id="modif-contact" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modifier un contact</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
		            <label>Nom & Prénoms</label>
			          <input type="text" class="form-control" required>
		          </div>
		          <div class="form-group">
		            <label>Numéro de téléphone</label>
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
				   
					 <!----delete-modal start--------->
      <div class="modal fade" tabindex="-1" id="deletecontact" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
  </div>
      </div>
    </div>
  
</body>
</html>
<script src="../../../assets/js/menu.js"></script>