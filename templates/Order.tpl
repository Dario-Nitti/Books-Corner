{include file="header.tpl" title="ordini"}


<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="profile.php" id="datac" class="w3-bar-item w3-button active"><strong>I Miei Dati</strong></a><br>
            <a href="#" id="orderac" class="w3-bar-item w3-button"><strong>I Miei Ordini</strong></a><br>
            <a href="Address.php" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>

            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <h3 class="card-title">$NomeOrdine</h3>
                <div class="order card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <img src="./img/doni.jpg" alt="Order" width="150" height="170" style="float: left;">
                            </div>
                            <div class="col-12 col-md-8 option">
                                <h3 class="card-text" id="price">0.00€</h3>
                                <a href="#"  id="delete" class="btn btn-primary">Elimina Ordine</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


{include file="footer.tpl"}

</body>
</html>

