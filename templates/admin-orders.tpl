{include file="header.tpl" title="Carica il prodotto"}


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="all-product.php" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="admin-orders.php" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>

        </div>
        <div class="col-8">
            <br>
            <section>
                <br>
                {if (!empty($orders))}
                    <div class="order card">

                        {foreach from=$orders item="order"}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-4">
                                        <h3 class="card-title">Ordine No. {$order.id}</h3>
                                    </div>
                                    <div class="col-12 col-md-8 option">
                                        <br>
                                        <p>Ordine fatto da: {$order.email}</p>
                                        <p>il: {$order.submission_date}</p>
                                        <p>Stato dell'ordine:<strong>{$order.status}</strong></p>
                                            <button  onclick="location.href='orders-details.php?id={$order.id}'" type="submit" class="btn btn-primary" name="details-order"
                                                    style="margin-bottom: -78px;margin-left: 200px">Dettagli Ordine</button>
                                    </div>

                                </div>
                            </div>
                            <form action="send_order.php" method="post">
                                <input type="hidden" name="email" value="{$order.email}">
                                <input type="hidden" name="id" value="{$order.id}">

                                <input type="submit" class="btn btn-primary" name="send-order"
                                       value="Spedisci ordine" style="margin-left: 600px">

                            </form>
                            <br>
                        {/foreach}


                    </div>
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