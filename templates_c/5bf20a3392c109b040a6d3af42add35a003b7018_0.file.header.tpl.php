<?php
/* Smarty version 3.1.39, created on 2021-07-16 16:52:31
  from 'C:\xampp\htdocs\Books-Corner\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f19d2f1b7056_68549864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf20a3392c109b040a6d3af42add35a003b7018' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Books-Corner\\templates\\header.tpl',
      1 => 1626447149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f19d2f1b7056_68549864 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"

          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <link href="./templates/css/style.css" rel="stylesheet" type="text/css"/>
    <?php echo '<script'; ?>
 src="./templates/js/scripts.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
>


</head>
<header>
    <div class="wrapper">
        <div class="multi_color_border"></div>
        <div class="top_nav">
            <div class="left">
                <div class="logo"><p><span>Book's</span> Corner</p></div>

            </div>
            <div class="right">
                <ul>
                    <a href="/Books-Corner/Login.php" class="fa fa-user" aria-hidden="true"></a>
                </ul>
            </div>
        </div>
        <div class="bottom_nav">
            <div class="container">
                <ul>
                    <li><a class="nav-link" href="/Books-Corner">Home<span class="sr-only">(current)</span></a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Categorie
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" id="category" name="avventura" href="Products.php?id_category=1">Avventura</a>
                                <a class="dropdown-item" id="category" name="fantasy" href="Products.php?id_category=2">Fantasy</a>
                                <a class="dropdown-item" id="category" name="romanzi" href="Products.php?id_category=3">Romanzi</a>

                            </div>
                        </div>
                    </li>
                    <li><a class="nav-link" href="Contact.php">Contatti</a></li>
                </ul>
            </div>
        </div>
    </div>


</header><?php }
}
