<?php
/* Smarty version 3.1.39, created on 2021-07-18 16:54:52
  from 'C:\xampp\htdocs\Books-Corner\templates\admin-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f440bc5ad9c3_15904524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1edd4a2c0e2487f382baee0ef03378d9c335431c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\admin-orders.tpl',
      1 => 1626620090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f440bc5ad9c3_15904524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Carica il prodotto"), 0, false);
?>


<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="all-product.php" class="w3-bar-item w3-button "><strong>Tutti i Prodotti</strong></a><br>
            <a href="Upload-product.php" class="w3-bar-item w3-button active"><strong>Inserisci un Articolo</strong></a><br>
            <a href="admin-orders.php" class="w3-bar-item w3-button "><strong>Tutti gli ordini</strong></a><br>
            <a href="Logout.php" class="w3-bar-item w3-button active"><strong>Logout</strong></a><br>

        </div>
        <div class="col-8">
            <br>
            <section>
                <br>
                <?php if ((!empty($_smarty_tpl->tpl_vars['orders']->value))) {?>
                    <div class="order card">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-4">
                                        <h3 class="card-title">Ordine No. <?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</h3>
                                    </div>
                                    <div class="col-12 col-md-8 option">
                                        <br>
                                        <p>Ordine fatto da: <?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
</p>
                                        <p>il: <?php echo $_smarty_tpl->tpl_vars['order']->value['submission_date'];?>
</p>
                                        <p>Stato dell'ordine:<strong><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</strong></p>
                                            <button  onclick="location.href='orders-details.php?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
'" type="submit" class="btn btn-primary" name="details-order"
                                                    style="margin-bottom: -78px;margin-left: 200px">Dettagli Ordine</button>
                                    </div>

                                </div>
                            </div>
                            <form action="send_order.php" method="post">
                                <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">

                                <input type="submit" class="btn btn-primary" name="send-order"
                                       value="Spedisci ordine" style="margin-left: 600px">

                            </form>
                            <br>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                    </div>
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
