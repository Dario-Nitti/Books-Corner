<?php
/* Smarty version 3.1.39, created on 2021-07-16 18:47:32
  from 'C:\xampp\htdocs\Books-Corner\templates\All-Product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f1b824cedae8_07107192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14317a4a4a4a164fb8f048ad4798ec61c494e1ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\All-Product.tpl',
      1 => 1626453932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f1b824cedae8_07107192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Carrello"), 0, false);
?>


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="#" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="admin-orders.php" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>

        </div>
        <div class="col-8">
            <br>
            <h1>Tutti i Prodotti</h1><br><br>
            <section>
                <?php if (!empty($_smarty_tpl->tpl_vars['books']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
                    <div class="all-prod card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value['pic'];?>
" alt="Order"
                                         width="150" height="170" style="float: left;">
                                </div>
                                <div class="col-12 col-md-8 option">

                                    <h3 class="card-text" id="name-prod"><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</h3>
                                    <a href="modify.php?id=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
" class="btn btn-primary">
                                        Elimina
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                <div></div>
                <?php }?>
        </div>
    </div>
    </section>
</div>
</div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
