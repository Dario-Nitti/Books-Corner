{include file="header.tpl" title="Carica il prodotto"}

<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="all-product.php" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="#" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="admin-orders.php" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>

        </div>
        <div class="col-8">
            <br>
            <h1 class="new-title">Inserisci Un Nuovo Prodotto</h1><br><br>
            <div class="new-prod">
                <form action="insert_book.php" method="post" enctype="multipart/form-data">
                <p><strong>ISBN:<strong></p>
                <input class="input" type="text" id="isbn" name="isbn"><br><br>
                <p><strong>Nome Articolo:<strong></p>
                <input class="input" type="text" id="title" name="titolo"><br><br>
                <p><strong>Edizione:<strong></p>
                <input class="input" type="text" id="edizione" name="edizione"><br><br>
                <p><strong>Anno di Pubblicazione:<strong></p>
                <input class="input" type="text" id="anno" placeholder="YYY-MM-DD" name="pubblicazione"><br><br>
                <p><strong>Editore:<strong></p>
                <input class="input" type="text" id="editore" name="editore"><br><br>
                <p><strong>Quantità:<strong></p>
                <input class="input" type="number" id="quantita" name="quantita" min="0" max="20"><br><br>
                <p><strong>Prezzo:<strong></p>
                <input class="input" type="text" id="prezzo" name="prezzo"><br><br>
                <p><strong>Categoria:<strong></p>
                <input class="input" type="number" id="categoria" name="categoria" min="1" max="3"><br><br>
                <p><strong>Autore:<strong></p>
                <input class="input" type="text" id="autore" name="autore"><br><br>
                <!--        <p><strong>Sezione:<strong></p>-->
                <!--        <input class="input" type="text" id="ArticoloSection" name="ArticoloSection"><br><br>-->
                <label>Seleziona immagine:</label>
                    <input type="file" name="image"><br><br>
                    <input class="btn btn-primary" name="submit" value="Carica" type="submit"><br><br>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
{include file="footer.tpl"}
