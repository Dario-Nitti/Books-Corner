<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=EUR"
            data-sdk-integration-source="button-factory"></script>


</head>
<header>
    <div class="wrapper">
        <div class="multi_color_border"></div>
        <div class="top_nav">
            <div class="left">
                <div class="logo"><p><span>Book's</span> Corner</p></div>
                <div class="search_bar">
                    <input class="form-control" id="search" type="text" placeholder="Search" aria-label="Search">
                </div>
            </div>
            <div class="right">
                <ul>
                    <a href="Profile.php" class="fa fa-user" aria-hidden="true"></a>
                    <a href="Cart.php" class="fas fa-shopping-cart" aria-hidden="true"></a>
                </ul>
            </div>
        </div>
        <div class="bottom_nav">
            <div class="container">
                <ul>
                    <li><a class="nav-link" href="Home.php">Home<span class="sr-only">(current)</span></a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Categorie
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" id="category" href="Products.php">Avventura</a>
                                <a class="dropdown-item" id="category" href="Products.php">Fantasy</a>
                                <a class="dropdown-item" id="category" href="Products.php">Romanzi</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="nav-link" href="Contact.php">Contatti</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>
<body>
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
                <td><a href="Checkout.php" class="btn btn-primary second-btn">Acquista</a></td>
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

<footer class="bg-white">
    <div class="py-10 foot">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 bottomlogo">

                <img src="img/logo.png" alt="" width="180" class="mb-3">
                <p class="font-italic text-muted">Book's Corner, il tuo sito affidabile </p>

            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4"><strong>Servizi</strong></h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="Contact.php" class="text-muted">Contatti</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Lavora con noi</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Buoni sconti</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4"><strong>Connettiti</strong></h6>
                <p class="text-muted mb-4">Ricevi la nostra Newsletter.</p>
                <div class="p-1 rounded border">
                    <div class="input-group">
                        <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1"
                               class="form-control border-0 shadow-0">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link"><i
                                        class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-lg-0 money">
                <i class="fab visa fa-cc-visa"></i>
                <i class="fab paypal fa-cc-paypal"></i>


            </div>
        </div>
    </div>


</footer>
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
