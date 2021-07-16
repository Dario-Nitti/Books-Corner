<?php
/* Smarty version 3.1.39, created on 2021-07-16 18:47:13
  from 'C:\xampp\htdocs\Books-Corner\templates\admin-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f1b8117938d4_50595156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1edd4a2c0e2487f382baee0ef03378d9c335431c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\admin-orders.tpl',
      1 => 1626454031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f1b8117938d4_50595156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Carica il prodotto"), 0, false);
?>


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="all-product.php" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="#" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>

        </div>
        <div class="col-8">
            <br>
            <section>
                <br>
                <?php if ((!empty($_smarty_tpl->tpl_vars['orders']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                        <div class="order card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-4">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value['pic'];?>
" alt="Order" width="150" height="170" style="float: left;">
                                    </div>
                                    <div class="col-12 col-md-8 option">
                                        <h3 class="card-title" style="margin-bottom: -10px"><?php echo $_smarty_tpl->tpl_vars['order']->value['title'];?>
</h3>
                                        <br><br>
                                        <p>Ordine fatto da: <?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
</p>
                                        <h3 class="card-text" id="price"><?php echo $_smarty_tpl->tpl_vars['order']->value['subtotal'];?>
€</h3>
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
            </section>
                <br>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
