<?php
/* Smarty version 3.1.39, created on 2021-06-09 11:57:19
  from 'C:\xampp\htdocs\Books-Corner\templates\Order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c0907f61a639_79370028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf3b42de479eaecda212127fdc9b32c852507d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Order.tpl',
      1 => 1623232623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c0907f61a639_79370028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"ordini"), 0, false);
?>


<body>

<br>
<div class="container card">
    <div class="row">
        <div class="col-4">
            <h2 class="w3-bar-item side">Menu</h2>
            <a href="profile.php" id="datac" class="w3-bar-item w3-button active"><strong>I Miei Dati</strong></a><br>
            <a href="#" id="orderac" class="w3-bar-item w3-button"><strong>I Miei Ordini</strong></a><br>
            <a href="Address.php" id="addressc" class="w3-bar-item w3-button"><strong>In Tuoi
                    Indirizzi</strong></a><br>
            <a href="Cart.php" id="Logout" class="w3-bar-item w3-button"><strong>Carello</strong></a><br>

            <a href="Logout.php" id="Logout" class="w3-bar-item w3-button"><strong>Logout</strong></a><br>
        </div>
        <div class="col-8">
            <section>
                <h3 class="card-title">$NomeOrdine</h3>
                <div class="order card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <img src="./img/doni.jpg" alt="Order" width="150" height="170" style="float: left;">
                            </div>
                            <div class="col-12 col-md-8 option">
                                <h3 class="card-text" id="price">0.00€</h3>
                                <a href="#"  id="delete" class="btn btn-primary">Elimina Ordine</a>
                            </div>
                        </div>
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
