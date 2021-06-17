<?php $title = "Riepilogo";
session_start();
include_once "../View/header.php";
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>
<body>
<br>
<!-- BODY CHECKOUT-->
<form action="/action_page.php">
    <div class="container">
        <!--card products  details-->
        <div class="title-card ">
            <h2>Dettagli prodotto</h2>

            <div class="card check">
                <div class="row">
                    <div class=" col-sm-2">
                        <img class="card-img" src="https://material.angular.io/assets/img/examples/shiba1.jpg"
                             alt="Card image"/>
                    </div>
                    <div class=" col-sm-8">
                        <h3 class="card-text">Dettagli prodotto</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARD ADDRESS -->
    <div class="row">
        <div class="col-10 address">
            <div class="title-card container ">
                <h2>Indirizzo di spedizione</h2>
                <div class="card check">
                    <div>
                        <div class="form-check">
                            <input name="address1" type="radio" id="address1" checked>
                            <label for="address1">$Address1</label>
                        </div>
                        <div class="form-check">
                            <input name="address2" type="radio" id="address2">
                            <label for="address2">Address2</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col total-check">
            <div class="container card" style=" width: 18rem;">
                <h4 class="total">Totale</h4>
                <hr>
                <td data-th="totale"><strong>$Prezzo totale</strong></td>
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
                            <label for="pay">payment method</label><br>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
                <br><input class="check btn btn-primary" type="submit" value="Acquista"><br><br>
                <label>Oppure Paga con</label><br><br>
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
    </div>

</form>

<?php include_once "../View/footer.php";?>

<script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'pill',
                color: 'gold',
                layout: 'horizontal',
                label: 'paypal',
                tagline: true
            },

            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{"amount": {"currency_code": "EUR", "value": 1}}]
                });
            },

            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            },

            onError: function (err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }

    initPayPalButton();
</script>
</body>
</html>