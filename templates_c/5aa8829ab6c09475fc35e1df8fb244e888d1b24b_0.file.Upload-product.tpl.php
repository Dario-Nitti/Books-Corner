<?php
/* Smarty version 3.1.39, created on 2021-07-09 10:16:35
  from 'C:\xampp\htdocs\Books-Corner\templates\Upload-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e805e3d28385_81145858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aa8829ab6c09475fc35e1df8fb244e888d1b24b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Upload-product.tpl',
      1 => 1625818593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e805e3d28385_81145858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Carica il prodotto"), 0, false);
?>

<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="All-Product.tpl" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="#" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="Users_Man.html" class="w3-bar-item w3-button active"><strong>Gestione Utenti</strong></a><br>

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
                <input class="input" type="number" id="quantita" name="quantita" min="0" max="10"><br><br>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
