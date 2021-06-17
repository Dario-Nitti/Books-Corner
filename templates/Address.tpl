<?php $title = "Indirizzo";
session_start();
include_once "../View/header.php";
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>


<body>


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="Profile.tpl" id="datac" class="w3-bar-item w3-button "><strong>I Miei Dati</strong></a><br>
            <a href="Order.tpl" id="orderac" class="w3-bar-item w3-button active"><strong>I Miei Ordini</strong></a><br>
            <a href="#" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <h3 class="card-title">I Tuoi Indirizzi</h3>
                <div class="order card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <h4>$Indirizzo</h4>
                            </div>
                            <div class="col-12 col-md-8 option">
                                <a href="#"  id="address" class="btn btn-primary">Elimina Indirizzo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>  <p>Non hai um indirizzo?</p>
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#address-add"
                        style="margin-left:-15px; margin-top: -10px ">Aggiungi il tuo indirizzo
                </button><br>
                <div class="modal fade" id="address-add" role="document">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h3 class="modal-title">INSERISCI IL TUO INDIRIZZO</h3>
                            <div class="modal-body">
                                <input class="input" type="text" name="indirizzo" id="indirizzo" placeholder="Indirizzo"><br><br>
                                <input class="input" type="text" id="città" name="città" placeholder="Città"><br><br>
                                <input type="text" id="cap" name="cap" maxlength="5" size="5" placeholder="CAP"><br>
                                <button class="btn btn-primary"
                                        style=" margin-top: 20px">
                                    Inserisci
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

<?php include_once "../View/footer.php";?>

</body>
</html>