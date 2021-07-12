<!--<!DOCTYPE html>-->
<!---->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <title>Pagamento</title>-->
<!---->
<!---->
<!--    <!-- Bootstrap CSS -->-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"-->
<!--          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
<!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com">-->
<!--    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
<!--    <link href="css/style.css" rel="stylesheet">-->
<!--    <script src="js/scripts.js"></script>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<!--    <script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
<!---->
<!---->
<!--</head>-->
<!--<header>-->
<!---->
<!--    <div class="wrapper">-->
<!--        <div class="multi_color_border"></div>-->
<!--        <div class="top_nav">-->
<!--            <div class="left">-->
<!--                <div class="logo"><p><span>Book's</span> Corner</p></div>-->
<!--                <div class="search_bar">-->
<!--                    <input class="form-control" id="search" type="text" placeholder="Search" aria-label="Search">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="right">-->
<!--                <ul>-->
<!--                    <a href="Profile.tpl" class="fa fa-user" aria-hidden="true"></a>-->
<!--                    <a href="Cart.php" class="fas fa-shopping-cart" aria-hidden="true"></a>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="bottom_nav">-->
<!--            <div class="container">-->
<!--                <ul>-->
<!--                    <li><a class="nav-link" href="Home.tpl">Home<span class="sr-only">(current)</span></a></li>-->
<!--                    <li>-->
<!--                        <div class="dropdown">-->
<!--                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"-->
<!--                               data-toggle="dropdown" aria-haspopup="true"-->
<!--                               aria-expanded="false">-->
<!--                                Categorie-->
<!--                            </a>-->
<!--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
<!--                                <a class="dropdown-item" id="category" href="Products.tpl">Avventura</a>-->
<!--                                <a class="dropdown-item" id="category" href="Products.tpl">Fantasy</a>-->
<!--                                <a class="dropdown-item" id="category" href="Products.tpl">Romanzi</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li><a class="nav-link" href="Contact.php">Contatti</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--</header>-->
<!---->
<!--<body>-->
<!---->
<!--<br>-->
<!--<div class="container card">-->
<!--    <div class="row">-->
<!--        <div class="col-4">-->
<!--            <h2 class="w3-bar-item side">Menu</h2>-->
<!--            <a href="Profile.tpl" id="datac" class="w3-bar-item w3-button "><strong>I Miei Dati</strong></a><br>-->
<!--            <a href="Order.php" id="orderac" class="w3-bar-item w3-button active"><strong>I Miei Ordini</strong></a><br>-->
<!--            <a href="#" id="payac" class="w3-bar-item w3-button"><strong>Metodi di Pagamento</strong></a><br>-->
<!--            <a href="Address.php" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi-->
<!--                    Indirizzi</strong></a><br>-->
<!--        </div>-->
<!--        <div class="col-4">-->
<!--            <h3>I Tuoi Metodi di Pagamento </h3>-->
<!--            <div class="card pay">-->
<!--                <div class="card-body">-->
<!--                    <h5>$metododipagamento</h5>-->
<!--                </div>-->
<!--            </div>-->
<!--            <br>-->
<!--            <p>Non hai un metodo di pagamento?</p>-->
<!--            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#pay"-->
<!--                    style="margin-left:-15px; margin-top: -10px ">Aggiungi il tuo-->
<!--                metodo di pagamento-->
<!--            </button>-->
<!--            <div class="modal fade" id="pay" role="document">-->
<!--                <div class="modal-dialog">-->
<!--                    <div class="modal-content">-->
<!--                        <h3 class="modal-title">INSERISCI I DATI DELLA TUA CARTA</h3>-->
<!--                        <div class="modal-body">-->
<!--                            <input class="input" type="text" name="nome" id="intest" placeholder="Nome"><br><br>-->
<!--                            <input class="input" type="email" id="numcard" name="Ncarta" placeholder="Numero Carta"><br><br>-->
<!--                            <input type="text" id="pin" name="cvv" maxlength="3" size="3" placeholder="CVV"><br><br>-->
<!--                            <p><strong>Data di scadenza</strong></p>-->
<!--                            <span>-->
<!--                    <select name="Mese">-->
<!--                                    <option value="null"></option>-->
<!--                                    <option value="01">1</option>-->
<!--                                    <option value="02">2</option>-->
<!--                                    <option value="03">3</option>-->
<!--                                    <option value="04">4</option>-->
<!--                                    <option value="05">5</option>-->
<!--                                    <option value="06">6</option>-->
<!--                                    <option value="07">7</option>-->
<!--                                    <option value="08">8</option>-->
<!--                                    <option value="09">9</option>-->
<!--                                    <option value="10">10</option>-->
<!--                                    <option value="11">11</option>-->
<!--                                    <option value="12">12</option>-->
<!--                    </select>-->
<!--                </span>-->
<!--                            <span>-->
<!--                    <select name="year">-->
<!--                             <option value="null"></option>-->
<!--                             <option value="2030">2030</option>-->
<!--                          <option value="2029">2029</option>-->
<!--                          <option value="2028">2028</option>-->
<!--                          <option value="2027">2027</option>-->
<!--                          <option value="2026">2026</option>-->
<!--                          <option value="2025">2025</option>-->
<!--                          <option value="2024">2024</option>-->
<!--                          <option value="2023">2023</option>-->
<!--                          <option value="2022">2022</option>-->
<!--                          <option value="2021">2021</option>-->
<!--                         <option value="2020">2020</option>-->
<!--                    </select>-->
<!--                </span><br>-->
<!---->
<!--                            <button class="btn btn-primary"-->
<!--                                    style=" margin-top: 20px">-->
<!--                                Inserisci-->
<!--                            </button>-->
<!--                    </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!--<footer class="bg-white">-->
<!--    <div class="py-10 foot">-->
<!--        <div class="row py-4">-->
<!--            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 bottomlogo">-->
<!---->
<!--                <img src="img/logo.png" alt="" width="180" class="mb-3">-->
<!--                <p class="font-italic text-muted">Book's Corner, il tuo sito affidabile </p>-->
<!---->
<!--            </div>-->
<!--            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">-->
<!--                <h6 class="text-uppercase font-weight-bold mb-4"><strong>Servizi</strong></h6>-->
<!--                <ul class="list-unstyled mb-0">-->
<!--                    <li class="mb-2"><a href="Contact.php" class="text-muted">Contatti</a></li>-->
<!--                    <li class="mb-2"><a href="#" class="text-muted">Lavora con noi</a></li>-->
<!--                    <li class="mb-2"><a href="#" class="text-muted">Buoni sconti</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">-->
<!--                <h6 class="text-uppercase font-weight-bold mb-4"><strong>Connettiti</strong></h6>-->
<!--                <p class="text-muted mb-4">Ricevi la nostra Newsletter.</p>-->
<!--                <div class="p-1 rounded border">-->
<!--                    <div class="input-group">-->
<!--                        <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1"-->
<!--                               class="form-control border-0 shadow-0">-->
<!--                        <div class="input-group-append">-->
<!--                            <button id="button-addon1" type="submit" class="btn btn-link"><i-->
<!--                                        class="fa fa-paper-plane"></i></button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-2 col-md-6 mb-lg-0 money">-->
<!--                <i class="fab visa fa-cc-visa"></i>-->
<!--                <i class="fab paypal fa-cc-paypal"></i>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--</footer>-->
<!--</body>-->
<!--</html>-->
