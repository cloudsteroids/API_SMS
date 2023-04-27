
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
            <section class="section contact">
                <div class="row gy-4">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="info-box card">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Adresse</h3>
                                    <p>93H6+36C, Abidjan<br>Cocody, Faya</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-box card">
                                    <i class="bi bi-telephone"></i>
                                    <h3>contactez--nous</h3>
                                    <p>+225 2722246838<br>+225 0757927013</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-box card">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Envoyez-nous un email </h3>
                                    <p>info@cloudsteroids.com<br>sales@cloudsteroids.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-box card">
                                    <i class="bi bi-clock"></i>
                                    <h3>Heure d'ouverture</h3>
                                    <p>lundi- samedi<br>8:00 - 20:00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card p-4">
                            <form action="forms/contact.php" method="post" class="php-email-form">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Nom & Prénoms" required>
                                    </div>
                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Sujet" required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Votre message a été envoyé. Merci!</div>
                                        <button type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>    
</body>
</html>