<?php
/* Smarty version 3.1.39, created on 2021-07-18 17:01:13
  from 'C:\xampp\htdocs\Books-Corner\templates\modify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f44239b803a6_55732941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eb91261b0967c03a88bae2666aedee4fee1c6c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\modify.tpl',
      1 => 1626618192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f44239b803a6_55732941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Carica il prodotto"), 0, false);
?>


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="all-product.php" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <br>
            <div class="new-prod">
                <h2>Sei sicuro di voler eliminare il prodotto?</h2>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="del-book.php" method="post">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
" name="book">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['author']->value['id'];?>
" name="author">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['publisher_id'];?>
" name="pub">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" name="category">
                                <input class="btn btn-primary" type="submit" value="Sì" name="elimina">
                            </form>
                        </div>
                        <div class="col">
                            <a href="all-product.php" class="btn btn-primary" type="submit" style="margin-left: -160px">No<a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
