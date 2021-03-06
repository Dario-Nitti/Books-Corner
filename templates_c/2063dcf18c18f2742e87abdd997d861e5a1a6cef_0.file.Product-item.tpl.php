<?php
/* Smarty version 3.1.39, created on 2021-07-16 18:55:51
  from 'C:\xampp\htdocs\Books-Corner\templates\Product-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f1ba1754dd79_74009227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2063dcf18c18f2742e87abdd997d861e5a1a6cef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Product-item.tpl',
      1 => 1626454549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f1ba1754dd79_74009227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Prodotto"), 0, false);
?>


<br>
<!-- /BREADCRUMB -->
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container card">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product">
                <div class="row">
                    <div class="col">
                        <div class="product-img">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value['pic'];?>
" alt="prduct" width="50%"
                                 style="margin-left: 200px; margin-top: 50px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-descr">
                            <h1><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</h1>
                            <br>
                            <form action="Add-Cart.php" method="post">
                                <label for="quantity">Disponibilità: <?php echo $_smarty_tpl->tpl_vars['book']->value['quantity'];?>
</label>
                                <input class="input" type="number" id="quantita" name="quantita" value="1" min="1"
                                       max="<?php echo $_smarty_tpl->tpl_vars['book']->value['quantity'];?>
"><br><br>
                                <input type="hidden" name="price" value=<?php echo $_smarty_tpl->tpl_vars['book']->value['price'];?>
>
                                <input type="hidden" name="id_book" value=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
>
                                <input class="btn btn-primary" type="submit" value="Aggiungi al carrello">
                            </form>
                            <br>
                            <h3><?php echo $_smarty_tpl->tpl_vars['book']->value['price'];?>
 €</h3>
                            <br><br>
                            <form action="Add-Whislist.php" method="post">
                                <input type="hidden" name="id_book" value=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
>
                                <input class="btn btn-primary" type="submit" value="Metti nella lista dei desideri">

                            </form>

                        </div>

                    </div>


                </div>
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Recensioni</a></li>
                            <li><a data-toggle="tab" href="#tab2">Dettagli</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <?php if ((!empty($_smarty_tpl->tpl_vars['reviews']->value))) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['review']->value['email'];?>
</h4>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</strong>
                                        <p><?php echo $_smarty_tpl->tpl_vars['review']->value['body'];?>
</p>
                                        <p><?php echo $_smarty_tpl->tpl_vars['review']->value['rating'];?>
</p>
                                        <p style="color: gray"><?php echo $_smarty_tpl->tpl_vars['review']->value['submission_date'];?>
</p>
                                        <hr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <div></div>
                                <?php }?>
                                <br><br>
                                <div class="review">
                                    <br><br>
                                <strong><p>  &nbsp;&nbsp;&nbsp;&nbsp;Aggiungi la tua recensione</p></strong>
                                    <form action="add-review.php" method="post">
                                        &nbsp; <textarea type="text" id="review" name="testo-rec"
                                                         placeholder="recensione" rows="5" cols="50"
                                                         style="margin-bottom: -10px"></textarea>
                                        &nbsp; <input type="text" id="review" name="titolo-rec" placeholder="titolo">
                                        <input type="hidden" name="id_book" value=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
>
                                        &nbsp; <input type="number" id="review" name="number-rec" min="1" max="5"
                                                      placeholder="voto">
                                        &nbsp;&nbsp;<input class="btn btn-primary" type="submit"
                                                           value="Aggiungi recensione">
                                    </form>
                                    <p>  <?php echo '<?php ';?>
echo "Data" <?php echo '?>';?>
</p>
                                    <p1> <?php echo '<?php ';?>
echo "$" <?php echo '?>';?>
</p1>
                                </div>


                            </div>
                            <div id="tab2" class="tab-pane fade in">
                                <strong>Autore: </strong>
                                <p>  <?php echo $_smarty_tpl->tpl_vars['author']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value['last_name'];?>
</p>
                                <strong>Data pubblicazione: </strong>
                                <p> <?php echo $_smarty_tpl->tpl_vars['book']->value['pub_date'];?>
</p>
                                <strong>ISBN: </strong>
                                <p>  <?php echo $_smarty_tpl->tpl_vars['book']->value['isbn'];?>
</p>
                                <strong>Edizione: </strong>
                                <p>  <?php echo $_smarty_tpl->tpl_vars['book']->value['edition'];?>
</p>
                                <strong>Categoria: </strong>
                                <p>  <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
