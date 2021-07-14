{include file="header.tpl" title="Indirizzo"}

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="profile.php" id="datac" class="w3-bar-item w3-button "><strong>Liste desideri</strong></a><br>
            <a href="Order.tpl" id="orderac" class="w3-bar-item w3-button active"><strong>I Miei Ordini</strong></a><br>
            <a href="#" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>

            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <h3 class="card-title">I Tuoi Indirizzi</h3>
                {if !empty($addresses)}
                {foreach from=$addresses item="addr"}
                    <div class="order card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <h4>{$addr.street}</h4>
                                </div>

                                <div class="col-12 col-md-8 option">
                                    <form method="post" action="del_addr.php">
                                        <input type="hidden" name="id_addr" value="{$addr.id}">
                                        <input class="btn btn-primary" type="submit" value="Elimina Indirizzo">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                {/foreach}
                {else}
                <div></div>
                {/if}
                <br>
                <p>Non hai un indirizzo?</p>
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#address-add"
                        style="margin-left:-15px; margin-top: -10px ">Aggiungi il tuo indirizzo
                </button>
                <br>
                <div class="modal fade" id="address-add" role="document">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h3 class="modal-title">INSERISCI IL TUO INDIRIZZO</h3>
                            <div class="modal-body">
                                <form method="post" action="Add-Address.php">
                                    <input class="input" type="text" name="name"
                                           placeholder="Ufficio/Casa/Casa vacanze"><br><br>
                                    <input class="input" type="text" name="utente" id="indirizzo"
                                           placeholder="Nome & Cognome"><br><br>
                                    <input class="input" type="text" name="info"
                                           placeholder="Altre Informazioni"><br><br>
                                    <input class="input" type="text" name="via"
                                           placeholder="Indirizzo"><br><br>
                                    <input class="input" type="text" name="citta"
                                           placeholder="Città"><br><br>
                                    <input class="input" type="text" name="provincia" maxlength="2" size="2"
                                           placeholder="Provincia"><br><br>
                                    <input type="text" id="cap" name="cap" maxlength="5" size="5" placeholder="CAP"><br><br>
                                    <input class="input" type="text" name="stato"
                                           placeholder="Stato"><br><br>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Inserisci">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

{include file="footer.tpl"}
