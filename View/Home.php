<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home</title>

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

    <nav class="navbar bar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="Home.php">Book's Corner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="Home.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >Categorie</a>
                        <div class="dropdown-content">
                            <a href="#">Fantasy</a>
                            <a href="#">Avventura</a>
                            <a href="#">Romanzi</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contatti</a>
                </li>
            </ul>
            <a href="Profile.php"> <i class="fa fa-user" aria-hidden="true"></i></a>
        </div>
    </nav>


</header>

<body>


<div class="container">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slider1.jpg" alt="sconto1" style="width:100%;">
                </div>

                <!-- <div class="item">
                     <img src="/img/sconto2.jpg" alt="sconto2" style="width:100%;">
                 </div>
                 -->


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="container news">
    <h1> TUTTE LE NOVITÀ</h1>
    <h3>Tutte le nuove uscite subito disponibili!!</h3>
    <div class="grid-container">
        <div class="grid-item">
            <a href=""><img src="img/poesie.jpg" alt="poesie" style="width:20%">
                <p><strong>Poesie</strong></p></a>
            <p1> Pablo Neruda</p1>
            <br>
            <p2>prezzo</p2>
        </div>
        <div class="grid-item">
            <a href=""><img src="img/Viaggi.jpg" alt="poesie" style="width:20%">
                <p><strong>Viaggi nel tempo</strong></p></a>
            <p1>James Gleick</p1>
            <br>
            <p2>prezzo</p2>
        </div>
        <div class="grid-item">
            <a href=""><img src="img/5.jpg" alt="poesie" style="width:20%">
                <p><strong>1984</strong></p></a>
            <p1>George Orwell</p1>
            <br>
            <p2>prezzo</p2>
        </div>
        <div class="grid-item">
            <a href=""><img src="img/4.jpg" alt="poesie" style="width:20%">
                <p><strong>Il codice da Vinci</strong></p></a>
            <p1>Dan Brown</p1>
            <br>
            <p2>prezzo</p2>
        </div>
        <div class="grid-item">
            <a href=""><img src="img/1.jpg" alt="poesie" style="width:20%">
                <p><strong>La stanza 13</strong></p></a>
            <p1>Robert Swindells</p1>
            <br>
            <p2>prezzo</p2>
        </div>

    </div>
</div>

<footer>
    <div class="py-10 foot bg-white">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 bottomlogo">

                <img src="img/logo.png" alt="" width="180" class="mb-3">
                <p class="font-italic text-muted">Book's Corner, il tuo sito affidabile </p>

            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4"><strong>Servizi</strong></h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-muted">Contatti</a></li>
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
