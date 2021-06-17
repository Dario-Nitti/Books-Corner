<?php
/* Smarty version 3.1.39, created on 2021-06-09 11:35:32
  from 'C:\xampp\htdocs\Books-Corner\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c08b648df494_58660612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e6f079f4d4d13cff8b6b0e74449a6407c205e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\Home.tpl',
      1 => 1623228217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c08b648df494_58660612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Benvenuto"), 0, false);
?>
<div class="container">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="./templates/img/slider1.jpg" alt="sconto1" style="width:100%;">
                </div>

                <!-- <div class="item">
                     <img src="/img/sconto2.jpg" alt="sconto2" style="width:100%;">
                 </div>
                 -->
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="container news">
    <h1> TUTTE LE NOVITÀ</h1>
    <h3>Tutte le nuove uscite subito disponibili!!</h3>
    <div class="grid-container">
        <div class="grid-item">
            <a href=""><img src="./templates/img/robot.jpg" alt="poesie" style="width:20%">
                <p><strong>Io Robot</strong></p></a>
            <p1> Isaac Asimov</p1>
            <br>
            <p2>prezzo</p2>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
