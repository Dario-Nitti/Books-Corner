{include file="header.tpl" title="Carica il prodotto"}


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="all-product.php" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="#" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>

        </div>
        <div class="col-8">
            <br>
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
                                        <p>Ordine fatto da: {$order.email}</p>
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
                <br>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}