<?php
/* Smarty version 3.1.39, created on 2021-06-06 15:55:30
  from 'C:\xampp\htdocs\Books-Corner\templates\Profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bcd3d2673eb4_26431862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '036d5f30c90e5142e7c4db31f61a6bf5d16cc354' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Profile.tpl',
      1 => 1622987728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60bcd3d2673eb4_26431862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Profilo"), 0, false);
?>


<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="#" id="datac" class="w3-bar-item w3-button active"><strong>I Miei Dati</strong></a><br>
            <a href="Order.html" id="orderac" class="w3-bar-item w3-button"><strong>I Miei Ordini</strong></a><br>
            <!--            <a href="Payment.php" id="payac" class="w3-bar-item w3-button"><strong>Metodi di Pagamento</strong></a><br>-->
            <a href="Address.html" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>

            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <a id="data">
                    <h2> Benvenuto <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h2><br><br>
                    <p><strong>ID</strong></p>
                    <p><strong>Nome e Cognome</strong></p>
                    <p><strong>Email</strong></p>
                    <p><strong>Password</strong></p>
                    <p><strong>Indirizzo</strong></p>
                    <p><strong>Città</strong></p>
                    <p><strong>Cap</strong></p>
                </a>
            </section>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
