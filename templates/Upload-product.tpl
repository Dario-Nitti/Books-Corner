{include file="header.tpl" title="Accedi o Registrati"}

<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="All-Product.html" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="#" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="Users_Man.html" class="w3-bar-item w3-button active"><strong>Gestione Utenti</strong></a><br>

        </div>
        <div class="col-8">
            <br>
            <h1 class="new-title">Inserisci Un Nuovo Prodotto</h1><br><br>
            <div class="new-prod">
                <p><strong>Nome Articolo:<strong></p>
                <input class="input" type="text" id="ArticoloName" name="ArticoloName"><br><br>
                <p><strong>Descrizione:<strong></p>
                <textarea name="ArticoloDescr" id="ArticoloDescr" rows="4" cols="40"> </textarea><br><br>
                <p><strong>Editore:<strong></p>
                <input class="input" type="text" id="ArticoloEditor" name="ArticoloEditor"><br><br>
                <p><strong>Lingua:<strong></p>
                <input class="input" type="text" id="ArticoloLang" name="ArticoloLang"><br><br>
                <p><strong>ISBN:<strong></p>
                <input class="input" type="text" id="ArticoloISBN" name="ArticoloISBN"><br><br>
                <p><strong>Categoria:<strong></p>
                <input class="input" type="text" id="ArticoloCategory" name="ArticoloCategory"><br><br>
                <!--        <p><strong>Sezione:<strong></p>-->
                <!--        <input class="input" type="text" id="ArticoloSection" name="ArticoloSection"><br><br>-->
                <label>Seleziona immagine:</label
                <form action="/action_page.php">
                    <input type="file" id="img" name="img" accept="image/*"><br><br>
                    <input id="upload" class="btn btn-primary" value="Carica" type="submit"><br><br>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
{include file="footer.tpl"}
