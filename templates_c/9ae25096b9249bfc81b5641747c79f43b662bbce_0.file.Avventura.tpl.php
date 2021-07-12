<?php
/* Smarty version 3.1.39, created on 2021-07-11 17:50:46
  from 'C:\xampp\htdocs\Books-Corner\templates\Products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60eb1356445af9_35913130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ae25096b9249bfc81b5641747c79f43b662bbce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Products.tpl',
      1 => 1626017831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60eb1356445af9_35913130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Avventura"), 0, false);
?>

<br>
<div class="row">
    <div class="col-sm-2 search">
        <input type="text" placeholder="Search..">
        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
    </div>
    <div class="col-sm-8">
        <div class="container card">
            <h1>Avventura</h1>
            <div class="grid-container">
                <div class="grid-item">
                    <a href="Product-item.tpl"><img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg"
                                                    alt="product-catalog" style="width:20%">
                        <p><strong>$Nome</strong></p></a>
                    <p1>$Autore</p1>
                    <br>
                    <p2>$prezzo</p2>
                </div>
                <div class="grid-item">
                    <a href="Product-item.tpl"><img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg"
                                                    alt="product-catalog" style="width:20%">
                        <p><strong>$Nome</strong></p></a>
                    <p1>$Autore</p1>
                    <br>
                    <p2>$prezzo</p2>
                </div>
                <div class="grid-item">
                    <a href="Product-item.tpl"><img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg"
                                                    alt="product-catalog" style="width:20%">
                        <p><strong>$Nome</strong></p></a>
                    <p1>Autore$</p1>
                    <br>
                    <p2>$prezzo</p2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
