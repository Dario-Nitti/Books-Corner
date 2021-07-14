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
                                {if $carts}
                                    {foreach from=$carts item=cart }
                                    <tbody>
                                <tr>
                                    <td data-th="Product">
                                    <div class="row">
                                        {foreach from=$books item=book}
                                        <div class="col-sm-2 hidden-xs">
                                            <img src="{$books.pic}" alt="..."
                                                 class="img-responsive"/>
                                        </div>
                                        {/foreach}

                                        <div class="col-sm-10">
                                            <h4 class="nomargin"></h4>
                                            <p></p>
                                        </div>
                                        </div>
                                        </td>
                                        <!--- prezzo--->
                                        <td data-th="Price">{$cart.subtotal}</td>
                                        <td data-th="Quantity">
                                            <input type="number" class="form-control text-center"
                                                   value="{$cart.quantity}">
                                        </td>
                                        <!---subtotale-->
                                        <td data-th="Subtotal" class="text-center"></td>
                                        </tr>


                                        </tbody>
                                    {/foreach}
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
                                    <td><a href="Checkout.tpl" class="btn btn-primary">Vai alla cassa</a></td>
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
            <td data-th="totale"><p>total</p></td>
            <br>
            <td data-th="totale"><strong>total</strong></td>

            <td><a href="Checkout.php" class="btn btn-primary second-btn">Vai alla cassa</a></td>
            <br>
        </div>
    </div>
</div>

{include file="footer.tpl"}


