<?php
/* Smarty version 3.1.39, created on 2021-07-18 16:11:06
  from 'C:\xampp\htdocs\Books-Corner\templates\Order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f4367af18581_81603644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf3b42de479eaecda212127fdc9b32c852507d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Order.tpl',
      1 => 1626617436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f4367af18581_81603644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"ordini"), 0, false);
?>


<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="profile.php" id="datac" class="w3-bar-item w3-button active"><strong>Liste desideri</strong></a><br>
            <a href="#" id="orderac" class="w3-bar-item w3-button"><strong>I Miei Ordini</strong></a><br>
            <a href="Address.php" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>

            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
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
                                <p>Stato: <?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
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
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>

<?php }
}
