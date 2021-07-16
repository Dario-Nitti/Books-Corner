{include file="header.tpl" title="Carrello"}


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="#" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="admin-orders.php" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>

        </div>
        <div class="col-8">
            <br>
            <h1>Tutti i Prodotti</h1><br><br>
            <section>
                {if !empty($books)}
                {foreach from=$books item="book"}
                    <div class="all-prod card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <img src="{$book.pic}" alt="Order"
                                         width="150" height="170" style="float: left;">
                                </div>
                                <div class="col-12 col-md-8 option">

                                    <h3 class="card-text" id="name-prod">{$book.title}</h3>
                                    <a href="modify.php?id={$book.id}" class="btn btn-primary">
                                        Elimina
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
                {else}
                <div></div>
                {/if}
        </div>
    </div>
    </section>
</div>
</div>
</div>


{include file="footer.tpl"}

</body>
</html>
