<?php
/* Smarty version 3.1.39, created on 2021-06-09 12:18:10
  from 'C:\xampp\htdocs\Books-Corner\templates\Contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c095621c89e1_57718541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf79974216e397c6980de1c659fe1e17156e1fa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Contact.tpl',
      1 => 1623233813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c095621c89e1_57718541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Contatti"), 0, false);
?>

<body>
<br>
<div class="container card">
<form action="Mailer.php" method="POST" id="actionID">
    <h2>Contattaci</h2>
    <p>Hai domande? Non esitare a contattarci direttamente. Il nostro team ti aiuterà.</p>


            <p><strong>Nome</strong></p>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nome"><br>

            <p><strong>Email</strong></p>
            <input type="email" id="email" name="email" class="form-control" style="width: 100%"
                   placeholder="La tua Email"><br>

            <p><strong>Messaggio</strong></p>
            <textarea type="text" id="message" name="message" class="form-control"
                      placeholder="Inserisci qui il tuo testo"></textarea><br><br>

            <button onclick="InputNull();" class="btn btn-primary send" type="submit" value="Submit">Invia
            </button>


</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    function InputNull() {
        var input = document.getElementById("name");
        var input2 = document.getElementById("email");
        var email = document.getElementById("actionID");

        if (input2.value.length == 0 && input.value.length == 0) {
            alert("Non hai inserito il tuo nome e la tua email");
            email.action = "";
        } else {
            return true;


        }
    }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
