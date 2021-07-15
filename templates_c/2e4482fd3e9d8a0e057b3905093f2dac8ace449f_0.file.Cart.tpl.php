<?php
/* Smarty version 3.1.39, created on 2021-07-15 17:23:51
  from 'C:\xampp\htdocs\Books-Corner\templates\Cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f053073b6771_82778055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e4482fd3e9d8a0e057b3905093f2dac8ace449f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Cart.tpl',
      1 => 1626362382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f053073b6771_82778055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Books-Corner\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Carrello"), 0, false);
?>


<br>
<div class="row">
    <div class="col-10">
        <div class="container card">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cart-page">
                        <h1> Carrello</h1>
                        <div class="container">

                            <table id="cart" class="table table-hover table-condensed">
                                <thead>
                                <tr>
                                    <th style="width:50%">Prodotto</th>
                                    <th style="width:10%">Prezzo</th>
                                    <th style="width:8%">Quantità</th>
                                    <th style="width:10%"></th>
                                    <th style="width:10%"></th>
                                </tr>
                                </thead>
                                <?php if (!empty($_smarty_tpl->tpl_vars['carts']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carts']->value, 'cart');
$_smarty_tpl->tpl_vars['cart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->do_else = false;
?>
                                        <tbody>
                                        <strong>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-2 hidden-xs">

                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['cart']->value['pic'];?>
" alt="..."
                                                             class="img-responsive"/>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <h4 class="nomargin"></h4>
                                                        <p></p>
                                                    </div>
                                                </div>


                                            </td>
                                            <!--- prezzo--->
                                            <td data-th="Price">
                                                <strong><?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['subtotal'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['item_quantity']),$_smarty_tpl);?>

                                            </td>
                                        </strong>
                                        <td data-th="Quantity">
                                            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cart']->value['item_quantity'];?>
</p>
                                        </td>
                                        <!---subtotale-->
                                        <td data-th="Subtotal" class="text-center"></td>
                                        </tr>


                                        </tbody>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <div></div>
                                <?php }?>
                                <tfoot>
                                <tr class="visible-xs">
                                    <td class="text-center"><strong></strong></td>
                                    <!--totale-->
                                </tr>
                                <tr>
                                    <td><a href="index.php" class="btn btn-warning">Continua
                                            lo shopping</a></td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-xs text-center"><strong></strong></td>
                                    <!---totale-->
                                    <td><a href="checkout.php" class="btn btn-primary">Vai alla cassa</a></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="container card" style=" width: 18rem;">
            <h4 class="total">Totale</h4>
            <hr>
            <?php if (!empty($_smarty_tpl->tpl_vars['carts']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carts']->value, 'cart', false, NULL, 'foo', array (
));
$_smarty_tpl->tpl_vars['cart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->do_else = false;
?>
                    <td data-th="totale"><p>- <?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['subtotal'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['item_quantity']),$_smarty_tpl);?>
</p></td>
                    <br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div></div>
            <?php }?>
            <br>
            <td data-th="totale"><strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong></td>

            <td><a href="checkout.php" class="btn btn-primary second-btn">Vai alla cassa</a></td>
            <br>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
