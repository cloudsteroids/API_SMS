
    <!-- Header -->

    <?php include('../../nav/head.php');   ?>

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
                
        <div class="pagetitle">
                <h1>PROFIL</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item">Paramètre</li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <img src="../../../assets/image/profile-img.jpg" alt="Profile" class="rounded-circle">
                                <h2>Patricia Ahideon</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- bordure des Onglets  -->
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Aperçu</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editer le profil</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Paramètre</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer le mot de passe</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2">
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title"> Détails du Profil</h5>
                                        <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nom & Prénoms</div>
                                        <div class="col-lg-9 col-md-8">Ahideon Patricia</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Sender Name</div>
                                        <div class="col-lg-9 col-md-8">Cloud Steroids</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Adresse</div>
                                        <div class="col-lg-9 col-md-8">93H6+36C, Abidjan, Cocody, Faya</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Téléphone</div>
                                        <div class="col-lg-9 col-md-8">(+225) 0758461239</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">ahideonpatricia@cloudsteroids.com</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                                    <!-- formulaire editer profil -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo de Profil</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="../../../assets/image/profile-img.jpg" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Télécharger un nouveau profil"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm" title="Supprimer mon profil"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom & Prénoms</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fullName" type="text" class="form-control" id="fullName" placeholder="Nom - Prénoms">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Sender Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="text" class="form-control" id="company" placeholder="Votre nom commerciale">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address" placeholder="Abidjan, cocody, Danga">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone" placeholder="(+225) 0758963216">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email" placeholder="patriciaahideon@cloudsteroids.com">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </form><!-- End Formulaire Editer Profil  -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-settings">
                                        <!--  Formulaire de Paramètre -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                    <label class="form-check-label" for="changesMade">
                                                        Modifications apportées à votre compte
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                    <label class="form-check-label" for="newProducts">
                                                        Informations sur les nouveaux produits et services
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="proOffers">
                                                    <label class="form-check-label" for="proOffers">
                                                        Offres marketing et promotionnelles
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                                    <label class="form-check-label" for="securityNotify">
                                                        Alertes de Sécurité
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Sauvegarder les Modifications</button>
                                        </div>
                                    </form><!-- End Formulaire de Paramètre -->
                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                        <!-- Changer Password Formulaire -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mot de passe actuel</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control" id="currentPassword">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">nouveau mot de passe</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control" id="newPassword">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Ré-entrez le nouveau mot de passe</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
                                        </div>
                                     </form><!-- End Changer Password Formulaire -->
                                </div>
                            </div><!-- End bordure des Onglets -->
                        </div>
                    </div>
                </div>
            </section>    


        </div>
    </div>    
</body>
</html>