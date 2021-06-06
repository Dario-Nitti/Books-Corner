<?php
/* Smarty version 3.1.39, created on 2021-06-06 11:52:31
  from 'C:\xampp\htdocs\Books-Corner\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bc9adf9cfc49_94967011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a92373bba910f866088fd9c94f3d805658eb31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Login.tpl',
      1 => 1622973148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60bc9adf9cfc49_94967011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Accedi o Registrati"), 0, false);
?>
<br>
<div class="container">
    <div class="row">
        <div class="col login">
            <div class="card">
                <div class="card-body">
                    <h1>Login</h1><br><br>
                    <form method="post" action="Autentication.php">
                        <p><strong>Email</strong></p>
                        <input type="email" id="Email" name="email-log"><br><br>
                        <p><strong>Password</strong></p>
                        <input type="password" id="password" name="password-log"><br><br>
                        <p id="wrong" style="color: red"></p>
                        <input type="submit" name="login" onclick="insert()" class="btn btn-primary" id="login"
                               value="Accedi"><br><br>
                    </form>
                    <p>Non sei ancora registrato?</p>
                    <button onclick="show()" type="button" class="btn btn-link" style="margin-bottom: 25px">Crea il tuo account</button>

                </div>
            </div>
        </div>
        <div class="col register" id="signup">
            <div class="card">
                <div class="card-body">
                    <h1> Sign Up</h1><br><br>
                    <form method="post" action="RegistrationController.php">
                        <p><strong>Nome</strong></p>
                        <input type="text" id="nome" name="nome"><br><br>
                        <p><strong>Cognome</strong></p>
                        <input type="text" id="cognome" name="cognome"><br><br>
                        <p><strong>Email</strong></p>
                        <input type="email" id="email-sign" name="email-sign"><br><br>
                        <p><strong>Password</strong></p>
                        <input type="password" id="password-sign" name="password-sign"><br><br>
                        <p id="email" style="color: red"></p>
                        <input type="submit" onclick="email()" class="btn btn-primary" id="signup-btn"
                               value="Registrati">
                    </form>
                    <button onclick="canc()" type="button" class="btn btn-primary" id="canc">Pulisci</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
