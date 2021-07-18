{include file="header.tpl" title="Carica il prodotto"}


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="all-product.php" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <br>
            <div class="new-prod">
                <h2>Sei sicuro di voler eliminare il prodotto?</h2>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="del-book.php" method="post">
                                <input type="hidden" value="{$book.id}" name="book">
                                <input type="hidden" value="{$author.id}" name="author">
                                <input type="hidden" value="{$book.publisher_id}" name="pub">
                                <input type="hidden" value="{$category.id}" name="category">
                                <input class="btn btn-primary" type="submit" value="Sì" name="elimina">
                            </form>
                        </div>
                        <div class="col">
                            <a href="all-product.php" class="btn btn-primary" type="submit" style="margin-left: -160px">No<a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}