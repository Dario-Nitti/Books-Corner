{include file="header.tpl" title="Carrello"}


<br>
<div class="row">
    <div class="col-10">
        <div class="container card">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cart-page">
                        <h1> Carrello</h1>
                        <div class="container">

                            <table id="cart" class="table table-hover table-condensed">
                                <thead>
                                <tr>
                                    <th style="width:50%">Prodotto</th>
                                    <th style="width:10%">Prezzo</th>
                                    <th style="width:8%">Quantità</th>
                                    <th style="width:10%"></th>
                                    <th style="width:10%"></th>
                                </tr>
                                </thead>
                                {if !empty($carts)}
                                    {foreach from=$carts item=cart }
                                        <tbody>
                                        <strong>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-2 hidden-xs">

                                                        <img src="{$cart.pic}" alt="..."
                                                             class="img-responsive"/>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <h4 class="nomargin"></h4>
                                                        <strong>{$cart.title}</strong>
                                                    </div>
                                                </div>

                                                <!--- prezzo--->
                                            <td data-th="Price">
                                                <strong>{$cart.subtotal}
                                                    <input type="hidden" value="{$cart.price}" id="price">
                                            </td>
                                        </strong>

                                        <td data-th="Quantity">
                                            <form action="update_cart.php" method="post">
                                                <input type="number" name="quantity_item" value="{$cart.item_quantity}"
                                                       min="1" max="{$cart.quantity}">
                                                <input type="hidden" name="id_book_cart" value="{$cart.book_id}">
                                        </td>
                                        <!---Elimina-->
                                        <td data-th="Subtotal" class="text-center">
                                            <input class="btn btn-primary" type="submit" value="Aggiorna Carrello"">
                                            </form>

                                            <form action="del_cart.php" method="post">
                                                <input type="hidden" name="id_book_cart" value="{$cart.book_id}">
                                                <br>
                                                <input type="submit" class="btn btn-primary" name="Elimina"
                                                       value="Rimuovi Articolo">
                                            </form>
                                        </td>
                                        </tr>


                                        </tbody>
                                    {/foreach}
                                {else}
                                    <div></div>
                                {/if}
                                <tfoot>
                                <tr class="visible-xs">
                                    <td class="text-center"><strong></strong></td>
                                    <!--totale-->
                                </tr>
                                <tr>
                                    <td><a href="index.php" class="btn btn-warning">Continua
                                            lo shopping</a></td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-xs text-center"><strong></strong></td>
                                    <!---totale-->

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="container card" style=" width: 18rem;">
            <h4 class="total">Totale</h4>
            <hr>
            {if !empty($carts)}
                {foreach from=$carts item=cart name=foo}
                    <td data-th="totale"><p>- {math equation="x * y" x=$cart.subtotal y=$cart.item_quantity}</p></td>
                    <br>
                {/foreach}
            {else}
                <div></div>
            {/if}
            <br>
            <td data-th="totale"><strong>{$total}</strong></td>

            <td><a href="checkout.php" class="btn btn-primary second-btn">Vai alla cassa</a></td>
            <br>
        </div>
    </div>
</div>


{include file="footer.tpl"}


