
    <!-- Header -->

    <?php include('../../nav/head.php');   ?>
    <link rel="stylesheet" href="../../../assets/css/buy_pack.css">

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
            <h1><i class="fa fa-window-minimize" aria-hidden="true"></i>  Acheter un pack</h1>
            <div id="products">
                <div class="product">
                <img src="../../../assets/image/pack1000.png" alt="Produit 1">
                <h3>SMALL</h3>
                <p>Description du produit 1.</p>
               
                        <li>1000  SMS</li>
                        <li> Support 7/24</li>
                        <li> Forfait Illimité</li>
               
                <p>Prix : 2000 CFA</p>
                <button class="buy-btn " onclick="addToCart(1)">Ajouter au panier</button>
                </div>
            
                <div class="product">
                <img src="../../../assets/image/pack5000.png" alt="Produit 2">
                <h3>Premium</h3>
                <p>Description du produit 2.</p>
                        <li> 10000 Sms</li>
                        <li>Support 7/24</li>
                        <li>Forfait Illimité</li>
                <p>Prix : 10000 CFA</p>
                <button class="buy-btn " onclick="addToCart(2)">Ajouter au panier</button>
                </div>

                <div class="product">
                <img src="../../../assets/image/pack10000-300x300.png" alt="Produit 3">
                <h3>Essential</h3>
                <p>Description du produit 3.</p>
                        <li> 2000 Sms</li>
                        <li> Support 7/24</li>
                        <li>Forfait Illimité</li>
                <p>Prix : 4000 CFA</p>
                <button class="buy-btn" onclick="addToCart(3)">Ajouter au panier</button>
                </div>
            </div>

            <h2><i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier</h2>
            <div id="panier" class="container">
            <ul id="cart"><i class="fa fa-check-circle" aria-hidden="true"></i></ul>
            <button class="btn-left buy-btn ">Valider</button>
            </div>



    <script>
        var cartItems = [];
            function addToCart(productId) {
            cartItems.push(productId);
            updateCart();
            }

            function updateCart() {
            var cartList = document.getElementById("cart");
            cartList.innerHTML = "";

            for (var i = 0; i < cartItems.length; i++) {
                var li = document.createElement("li");
                li.textContent = "Produit " + cartItems[i];
                cartList.appendChild(li);
            }
            }
  </script>
        </div>
    </div>    
</body>
</html>