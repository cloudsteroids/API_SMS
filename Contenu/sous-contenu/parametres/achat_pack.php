<?php
session_start();
?>
<?php
$id = $_SESSION['id'];
    if(!isset($id)){
        header('Location:../../index.php');
    }
?>



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
                
                


        </div>
    </div>    
</body>
</html>