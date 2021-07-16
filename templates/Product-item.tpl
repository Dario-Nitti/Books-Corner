{include file="header.tpl" title="Prodotto"}


<br>
<!-- /BREADCRUMB -->
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container card">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product">
                <div class="row">
                    <div class="col">
                        <div class="product-img">
                            <img src="{$book.pic}" alt="prduct" width="50%"
                                 style="margin-left: 200px; margin-top: 50px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-descr">
                            <h1>{$book.title}</h1>
                            <br>
                            <form action="Add-Cart.php" method="post">
                                <label for="quantity">Disponibilità: {$book.quantity}</label>
                                <input class="input" type="number" id="quantita" name="quantita" value="1" min="1"
                                       max="{$book.quantity}"><br><br>
                                <input type="hidden" name="price" value={$book.price}>
                                <input type="hidden" name="id_book" value={$book.id}>
                                <input class="btn btn-primary" type="submit" value="Aggiungi al carrello">
                            </form>
                            <br>
                            <h3>{$book.price} €</h3>
                            <br><br>
                            <form action="Add-Whislist.php" method="post">
                                <input type="hidden" name="id_book" value={$book.id}>
                                <input class="btn btn-primary" type="submit" value="Metti nella lista dei desideri">

                            </form>

                        </div>

                    </div>


                </div>
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Recensioni</a></li>
                            <li><a data-toggle="tab" href="#tab2">Dettagli</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                {if (!empty($reviews))}
                                    {foreach from=$reviews item=review}
                                    <h4>{$review.email}</h4>
                                        <strong>{$review.title}</strong>
                                        <p>{$review.body}</p>
                                        <p>{$review.rating}</p>
                                        <p style="color: gray">{$review.submission_date}</p>
                                        <hr>
                                    {/foreach}
                                {else}
                                    <div></div>
                                {/if}
                                <br><br>
                                <div class="review">
                                    <br><br>
                                <strong><p>  &nbsp;&nbsp;&nbsp;&nbsp;Aggiungi la tua recensione</p></strong>
                                    <form action="add-review.php" method="post">
                                        &nbsp; <textarea type="text" id="review" name="testo-rec"
                                                         placeholder="recensione" rows="5" cols="50"
                                                         style="margin-bottom: -10px"></textarea>
                                        &nbsp; <input type="text" id="review" name="titolo-rec" placeholder="titolo">
                                        <input type="hidden" name="id_book" value={$book.id}>
                                        &nbsp; <input type="number" id="review" name="number-rec" min="1" max="5"
                                                      placeholder="voto">
                                        &nbsp;&nbsp;<input class="btn btn-primary" type="submit"
                                                           value="Aggiungi recensione">
                                    </form>
                                    <p>  <?php echo "Data" ?></p>
                                    <p1> <?php echo "$" ?></p1>
                                </div>


                            </div>
                            <div id="tab2" class="tab-pane fade in">
                                <strong>Autore: </strong>
                                <p>  {$author.first_name} {$author.last_name}</p>
                                <strong>Data pubblicazione: </strong>
                                <p> {$book.pub_date}</p>
                                <strong>ISBN: </strong>
                                <p>  {$book.isbn}</p>
                                <strong>Edizione: </strong>
                                <p>  {$book.edition}</p>
                                <strong>Categoria: </strong>
                                <p>  {$category.name}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

{include file="footer.tpl"}

