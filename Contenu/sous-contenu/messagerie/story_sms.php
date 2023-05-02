
    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

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
        <div class="containn" id="containn">
            <div class="card">
                <div class="card-body">
                    <!--<h5 class="card-title"></h5> -->
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Message</th>
                                <th scope="col">destinataire</th>
                                <th scope="col">Date</th>
                                <th scope="col">
                                    statut
                                    <select class="form-select" id="floatingSelect" aria-label="State">
                                        <option selected>tout</option>
                                        <option value="1">livré</option>
                                        <option value="2">échoué</option>
                                        <option value="3">programmé</option>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>le web-binaire est prévu...</td>
                                <td>Cloud-client</td>
                                <td>2016-05-25</td>
                                <td>échoué</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>La reunion commence dans....</td>
                                <td>Cloud Steroids</td>
                                <td>2014-12-05</td>
                                <td>livré</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Bonjour, votre code est..</td>
                                <td>Amichia Dani</td>
                                <td>2011-08-12</td>
                                <td>livré</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Vous etes tous inviter à mon anniv...</td>
                                <td>M'Sweet Plan'S</td>
                                <td>2012-06-11</td>
                                <td>programmé</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td> Votre commande n°20v32 est...</td>
                                <td>AF food</td>
                                <td>2011-04-19</td>
                                <td>écoué</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End small tables -->

                </div>
            </div>
        </div>   
</body>
</html>