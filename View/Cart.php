<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Carrello</title>
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
                                <tbody>
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-2 hidden-xs"><img src="img/1.jpg" alt="..."
                                                                                 class="img-responsive"/></div>
                                            <div class="col-sm-10">
                                                <h4 class="nomargin"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </td>
                                    <!--- prezzo--->
                                    <td data-th="Price">$Price</td>
                                    <td data-th="Quantity">
                                        <input type="number" class="form-control text-center" value="1">
                                    </td>
                                    <!---subtotale-->
                                    <td data-th="Subtotal" class="text-center"></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="visible-xs">
                                    <td class="text-center"><strong></strong></td>
                                    <!--totale-->
                                </tr>
                                <tr>
                                    <td><a href="Home.php" class="btn btn-warning">Continua
                                            lo shopping</a></td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-xs text-center"><strong></strong></td>
                                    <!---totale-->
                                    <td><a href="Checkout.php" class="btn btn-primary">Vai alla cassa</a></td>
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
            <td data-th="totale"><strong>$Prezzo totale</strong></td>
            <td><a href="Checkout.php" class="btn btn-primary second-btn">Vai alla cassa</a></td><br>
        </div>
    </div>
</div>
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
</body>
</html>
