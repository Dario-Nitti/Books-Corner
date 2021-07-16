<?php
/* Smarty version 3.1.39, created on 2021-07-16 18:03:06
  from 'C:\xampp\htdocs\Books-Corner\templates\Checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f1adba9f0a74_71832761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e88bf6afe84bff6d7612b1af7d83a0693ae63d27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Checkout.tpl',
      1 => 1626451383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f1adba9f0a74_71832761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Books-Corner\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>''), 0, false);
?>

<br>
<!-- BODY CHECKOUT-->
<form action="add_orders.php" method="post">
    <div class="container">
        <!--card products  details-->
        <div class="title-card ">
            <h2>Dettagli prodotto</h2>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
                <div class="card check">
                    <div class="row">
                        <div class=" col-sm-2">
                            <img class="card-img" src="<?php echo $_smarty_tpl->tpl_vars['book']->value['pic'];?>
" width="20px"
                                 alt="Card image"/ >
                        </div>
                        <div class=" col-sm-8">
                            <h3 class="card-text"><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</h3>
                            <input type="hidden" name="id_book" value=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
>
                            <br>
                            <p>Quantità: <?php echo $_smarty_tpl->tpl_vars['book']->value['item_quantity'];?>
</p>
                            <br>
                            <h4><strong>&nbsp;&nbsp;<?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['book']->value['subtotal'],'y'=>$_smarty_tpl->tpl_vars['book']->value['item_quantity']),$_smarty_tpl);?>

                                    €</strong></h4>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <!-- CARD ADDRESS -->
    <div class="row">
        <div class="col-10 address">
            <div class="title-card container ">
                <h2>Indirizzo di spedizione</h2>
                <div class="card check">
                    <div>
                        <?php if ((!empty($_smarty_tpl->tpl_vars['addresses']->value))) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'addr');
$_smarty_tpl->tpl_vars['addr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addr']->value) {
$_smarty_tpl->tpl_vars['addr']->do_else = false;
?>
                            <div class="form-check">

                                <input name="address1" type="radio" id="address1" checked>
                                <label for="address1"><?php echo $_smarty_tpl->tpl_vars['addr']->value['street'];?>
 </label>
                                <p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $_smarty_tpl->tpl_vars['addr']->value['optional_info'];?>
</p>
                                <p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $_smarty_tpl->tpl_vars['addr']->value['town'];?>
 , <?php echo $_smarty_tpl->tpl_vars['addr']->value['province'];?>
</p>
                                <p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $_smarty_tpl->tpl_vars['addr']->value['postcode'];?>
</p>
                                <p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $_smarty_tpl->tpl_vars['addr']->value['state'];?>
</p>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                        <div></div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col total-check">
            <div class="container card" style=" width: 18rem;">
                <h4 class="total">Totale</h4>
                <hr>
                <td data-th="totale"><strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 €</strong></td>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 " name="totale">
                <br>
            </div>
        </div>

    </div>


    <!--card payment -->
    <div class="container">
        <div class="row">
            <div class="col ">
                <div class="title-card">
                    <h2>Metodo di pagamento</h2>
                </div>
                <div class="card check">
                    <div class="row">
                        <div class=" col">
                            <input type="radio" id="pay" name="pay" value="pay" checked>
                            <label for="pay">Contrassegno ( +8 €)</label><br>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><input class="check btn btn-primary" type="submit" value="Acquista" style="margin-left: 400px"><br><br>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
