{include file="header.tpl" title="ordini"}


<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="profile.php" id="datac" class="w3-bar-item w3-button active"><strong>Liste desideri</strong></a><br>
            <a href="#" id="orderac" class="w3-bar-item w3-button"><strong>I Miei Ordini</strong></a><br>
            <a href="Address.php" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>

            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <br>
                {if (!empty($orders))}
                    {foreach from=$orders item="order"}
                    <div class="order card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <img src="{$order.pic}" alt="Order" width="150" height="170" style="float: left;">
                            </div>
                            <div class="col-12 col-md-8 option">
                                <h3 class="card-title" style="margin-bottom: -10px">{$order.title}</h3>
                                <br><br>
                                <p>Stato: {$order.status}</p>
                                <h3 class="card-text" id="price">{$order.subtotal}€</h3>
                            </div>
                        </div>
                    </div>
                </div>
                    {/foreach}
                {else}
                    <div></div>
                {/if}
            </section>
        </div>
    </div>
</div>


{include file="footer.tpl"}

</body>
</html>

