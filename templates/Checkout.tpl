{include file="header.tpl" title=""}

<br>
<!-- BODY CHECKOUT-->
<form action="/action_page.php">
    <div class="container">
        <!--card products  details-->
        <div class="title-card ">
            <h2>Dettagli prodotto</h2>

            {foreach from=$books item=book}
                <div class="card check">
                    <div class="row">
                        <div class=" col-sm-2">
                            <img class="card-img" src="{$book.pic}"
                                 alt="Card image"/>
                        </div>
                        <div class=" col-sm-8">
                            <h3 class="card-text">{$book.titolo}</h3>


                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <!-- CARD ADDRESS -->
    <div class="row">
        <div class="col-10 address">
            <div class="title-card container ">
                <h2>Indirizzo di spedizione</h2>
                <div class="card check">
                    <div>
                        {foreach from=$addresses item=addr}
                            <div class="form-check">

                                <input name="address1" type="radio" id="address1" checked>
                                <label for="address1">{$addr.street} </label>
                                <p> &nbsp; &nbsp; &nbsp; &nbsp;{$addr.optional_info}</p>
                                <p> &nbsp; &nbsp; &nbsp; &nbsp;{$addr.town} , {$addr.province}</p>
                                <p> &nbsp; &nbsp; &nbsp; &nbsp;{$addr.postcode}</p>
                                <p> &nbsp; &nbsp; &nbsp; &nbsp;{$addr.state}</p>



                            </div>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
        <div class="col total-check">
            <div class="container card" style=" width: 18rem;">
                <h4 class="total">Totale</h4>
                <hr>
                <td data-th="totale"><strong>{$total}</strong></td>
                <td><a href="Checkout.tpl" class="btn btn-primary second-btn">Acquista</a></td>
                <br>
            </div>
        </div>

    </div>


    <!--card payment -->
    <div class="container">
        <div class="row">
            <div class="col ">
                <div class="title-card">
                    <h2>Metodo di pagamento</h2>
                </div>
                <div class="card check">
                    <div class="row">
                        <div class=" col">
                            <input type="radio" id="pay" name="pay" value="pay">
                            <label for="pay">Contrassegno</label><br>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
                <br><input class="check btn btn-primary" type="submit" value="Acquista"><br><br>
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
    </div>

</form>

{include file="footer.tpl"}


</body>
</html>
