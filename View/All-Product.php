<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tutti i Prodotti</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="#" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
        </div>
        <div class="col-8">
            <br>
            <h1>Tutti i Prodotti</h1><br><br>
            <section>
                <div class="all-prod card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg" alt="Order" width="150" height="170" style="float: left;">
                            </div>
                            <div class="col-12 col-md-8 option">
                                <h3 class="card-text" id="name-prod">$Nome</h3>
                                <input href="#"  id="delete-prod" class="btn btn-primary" type="Submit" value="Elimina">
                                <button  id="modif" class="btn btn-primary" data-toggle="modal" data-target="#modify">Modifica</button>
                            </div>
                            <div class="modal fade" id="modify" role="document">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <h3 class="modal-title">Modifica prodotto</h3>
                                        <div class="modal-body">
                                            <p><strong>Nome Articolo:<strong></p>
                                            <input class="input" type="text" placeholder="$Nome" id="ArticoloName" name="ArticoloName"><br><br>
                                            <p><strong>Descrizione:<strong></p>
                                            <textarea name="ArticoloDescr" placeholder="$Descrizione"  id="ArticoloDescr" rows="4" cols="40"> </textarea><br><br>
                                            <p><strong>Editore:<strong></p>
                                            <input class="input" type="text" placeholder="$Editore" id="ArticoloEditor" name="ArticoloEditor"><br><br>
                                            <p><strong>Lingua:<strong></p>
                                            <input class="input" type="text" placeholder="$Lingua" id="ArticoloLang" name="ArticoloLang"><br><br>
                                            <p><strong>ISBN:<strong></p>
                                            <input class="input" type="text" placeholder="$ISBN" id="ArticoloISBN" name="ArticoloISBN"><br><br>
                                            <p><strong>Categoria:<strong></p>
                                            <input class="input" type="text" placeholder="$Categoria" id="ArticoloCategory" name="ArticoloCategory"><br><br>
                                            <!--        <p><strong>Sezione:<strong></p>-->
                                            <!--        <input class="input" type="text" placeholder="$Settore" id="ArticoloSection" name="ArticoloSection"><br><br>-->
                                            <label>Seleziona immagine:</label
                                            <form action="/action_page.php">
                                                <input type="file" id="img" name="img" accept="image/*"><br><br>
                                                <input id="upload" class="btn btn-primary" value="Carica" type="submit"><br><br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
