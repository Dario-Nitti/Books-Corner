<?php
/* Smarty version 3.1.39, created on 2021-07-16 18:58:54
  from 'C:\xampp\htdocs\Books-Corner\templates\Profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f1bace1f0e69_12165560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '036d5f30c90e5142e7c4db31f61a6bf5d16cc354' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Profile.tpl',
      1 => 1626454733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f1bace1f0e69_12165560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Profilo"), 0, false);
?>


<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="#" id="datac" class="w3-bar-item w3-button active"><strong>Lista desideri</strong></a><br>
            <a href="Order.php" id="orderac" class="w3-bar-item w3-button"><strong>I Miei Ordini</strong></a><br>
            <a href="Address.php" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>
            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <h2> Benvenuto <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
</h2><br><br>
                <div class="row">
                    <?php if ((!empty($_smarty_tpl->tpl_vars['books']->value))) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
                            <div class="col-md-3">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="Product-item.php?id=<?php echo $_smarty_tpl->tpl_vars['book']->value['book_id'];?>
">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value['pic'];?>
" alt="product-catalog" style="width:50%">
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><strong> <?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</strong></h3></a>
                                        <div class="price"><?php echo $_smarty_tpl->tpl_vars['book']->value['price'];?>
 €</div>
                                        <br>

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
            </section>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
