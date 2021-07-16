<?php
/* Smarty version 3.1.39, created on 2021-07-16 17:21:29
  from 'C:\xampp\htdocs\Books-Corner\templates\Address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f1a3f9c0d720_05238190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72f5b8689d92c50597f4a1d24a8fe40f469f21ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Address.tpl',
      1 => 1626442167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f1a3f9c0d720_05238190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Indirizzo"), 0, false);
?>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="profile.php" id="datac" class="w3-bar-item w3-button "><strong>Liste desideri</strong></a><br>
            <a href="Order.php" id="orderac" class="w3-bar-item w3-button active"><strong>I Miei Ordini</strong></a><br>
            <a href="#" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>

            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <h3 class="card-title">I Tuoi Indirizzi</h3>
                <?php if (!empty($_smarty_tpl->tpl_vars['addresses']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'addr');
$_smarty_tpl->tpl_vars['addr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addr']->value) {
$_smarty_tpl->tpl_vars['addr']->do_else = false;
?>
                    <div class="order card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <h4><?php echo $_smarty_tpl->tpl_vars['addr']->value['street'];?>
</h4>
                                </div>

                                <div class="col-12 col-md-8 option">
                                    <form method="post" action="del_addr.php">
                                        <input type="hidden" name="id_addr" value="<?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
">
                                        <input class="btn btn-primary" type="submit" value="Elimina Indirizzo">
                                    </form>
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
                <br>
                <p>Non hai un indirizzo?</p>
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#address-add"
                        style="margin-left:-15px; margin-top: -10px ">Aggiungi il tuo indirizzo
                </button>
                <br>
                <div class="modal fade" id="address-add" role="document">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h3 class="modal-title">INSERISCI IL TUO INDIRIZZO</h3>
                            <div class="modal-body">
                                <form method="post" action="Add-Address.php">
                                    <input class="input" type="text" name="name"
                                           placeholder="Ufficio/Casa/Casa vacanze"><br><br>
                                    <input class="input" type="text" name="utente" id="indirizzo"
                                           placeholder="Nome & Cognome"><br><br>
                                    <input class="input" type="text" name="info"
                                           placeholder="Altre Informazioni"><br><br>
                                    <input class="input" type="text" name="via"
                                           placeholder="Indirizzo"><br><br>
                                    <input class="input" type="text" name="citta"
                                           placeholder="Città"><br><br>
                                    <input class="input" type="text" name="provincia" maxlength="2" size="2"
                                           placeholder="Provincia"><br><br>
                                    <input type="text" id="cap" name="cap" maxlength="5" size="5" placeholder="CAP"><br><br>
                                    <input class="input" type="text" name="stato"
                                           placeholder="Stato"><br><br>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Inserisci">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
