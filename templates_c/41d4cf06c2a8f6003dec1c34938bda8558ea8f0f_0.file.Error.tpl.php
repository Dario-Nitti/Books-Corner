<?php
/* Smarty version 3.1.39, created on 2021-07-10 18:11:33
  from 'C:\xampp\htdocs\Books-Corner\templates\Error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e9c6b5bc4bc2_94475854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d4cf06c2a8f6003dec1c34938bda8558ea8f0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Error.tpl',
      1 => 1625933490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e9c6b5bc4bc2_94475854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Errore"), 0, false);
?>

<div class="row">

    <div class="col">
        <div class="error-img">
            <img src="./templates/img/error.png" alt="error" width="750" height="750">
        </div>
    </div>
    <div class="col">
        <div class="error-title">
            <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-396ef71ce5d4fd132f64">
                <div class="sqs-block-content">
                    <p style="text-align: center; white-space: pre-wrap;">Awww...Don’t Cry.</p>
                    <h1 style="text-align: center; white-space: pre-wrap;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>

<?php }
}
