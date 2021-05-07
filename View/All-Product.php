<?php $title = "Profile";
session_start();
include_once "../View/header.php";
session_start();
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>


<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="#" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="Users_Man.php" class="w3-bar-item w3-button active"><strong>Gestione Utenti</strong></a><br>

        </div>
        <div class="col-8">
            <br>
            <h1>Tutti i Prodotti</h1><br><br>
            <section>
                <div class="all-prod card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg" alt="Order"
                                     width="150" height="170" style="float: left;">
                            </div>
                            <div class="col-12 col-md-8 option">
                                <h3 class="card-text" id="name-prod">$Nome</h3>
                                <input href="#" id="delete-prod" class="btn btn-primary" type="Submit" value="Elimina">
                                <button id="modif" class="btn btn-primary" data-toggle="modal" data-target="#modify">
                                    Modifica
                                </button>
                            </div>
                            <div class="modal fade" id="modify" role="document">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <h3 class="modal-title">Modifica prodotto</h3>
                                        <div class="modal-body">
                                            <p><strong>Nome Articolo:<strong></p>
                                            <input class="input" type="text" placeholder="$Nome" id="ArticoloName"
                                                   name="ArticoloName"><br><br>
                                            <p><strong>Descrizione:<strong></p>
                                            <textarea name="ArticoloDescr" placeholder="$Descrizione" id="ArticoloDescr"
                                                      rows="4" cols="40"> </textarea><br><br>
                                            <p><strong>Editore:<strong></p>
                                            <input class="input" type="text" placeholder="$Editore" id="ArticoloEditor"
                                                   name="ArticoloEditor"><br><br>
                                            <p><strong>Lingua:<strong></p>
                                            <input class="input" type="text" placeholder="$Lingua" id="ArticoloLang"
                                                   name="ArticoloLang"><br><br>
                                            <p><strong>ISBN:<strong></p>
                                            <input class="input" type="text" placeholder="$ISBN" id="ArticoloISBN"
                                                   name="ArticoloISBN"><br><br>
                                            <p><strong>Categoria:<strong></p>
                                            <input class="input" type="text" placeholder="$Categoria"
                                                   id="ArticoloCategory" name="ArticoloCategory"><br><br>
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


<?php include_once "../View/footer.php"; ?>

</body>
</html>
