
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
        <div class="containn" id="containn">
            <div class="pagetitle">
                <h1>HISTORIQUE DES PACKS SMS</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item">Paramètre</li>
                        <li class="breadcrumb-item active">Historique des Packs</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pack acheté</h5>
                    <!-- Liste des packs acheté -->
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Pack Mini</h5>
                      <small>Il ya 3 jours</small>
                    </div>
                    <p class="mb-1">le pack mini vous donne droit à 50sms.</p>
                    <small>Ce pack est illimité.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Pack Premium</h5>
                      <small class="text-muted">Il ya 10 jours</small>
                    </div>
                    <p class="mb-1">le Pack premium vous donne droit à 1000sms.</p>
                    <small class="text-muted">Ce pack est illimité puis vous donne droit à un conseil gratuit.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Pack Maxi</h5>
                      <small class="text-muted">Il ya 50 jours</small>
                    </div>
                    <p class="mb-1">Le pack maxi vous donne droit à 500Sms.</p>
                    <small class="text-muted">Ce pack est illimité.</small>
                  </a>
                </div><!-- End Liste des packs acheté -->
              </div>
            </div>
            
          </div>
   
</body>
</html>