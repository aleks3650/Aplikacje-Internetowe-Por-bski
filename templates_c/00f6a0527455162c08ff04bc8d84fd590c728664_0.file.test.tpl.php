<?php
/* Smarty version 4.3.2, created on 2024-04-24 13:40:08
  from 'C:\xampp new\htdocs\smarty\smarty\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6628ef980b4f17_25907049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00f6a0527455162c08ff04bc8d84fd590c728664' => 
    array (
      0 => 'C:\\xampp new\\htdocs\\smarty\\smarty\\templates\\test.tpl',
      1 => 1713958805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6628ef980b4f17_25907049 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXf/jnFgYWt/xP8KOOEjJxndL4IK3hENt0BPsTndyVYrь" crossorigin="anonymous">
</head>
<body style="margin: 30px;display: flex; justify-content: center; background: rgb(223, 223, 223);">
    <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
            <h2>Kalkulator Kredytowy</h2>
            <form class="pure-form pure-form-stacked" action="#" method="post">
                <fieldset>
                    <label for="kwota">Kwota kredytu:</label>
                    <input class="pure-input-1" type="number" name="kwota" id="kwota" required>

                    <label for="oprocentowanie">Oprocentowanie (roczne):</label>
                    <input class="pure-input-1" type="number" name="oprocentowanie" id="oprocentowanie" required>

                    <label for="okres">Okres spłaty (w latach):</label>
                    <input class="pure-input-1" type="number" name="okres" id="okres" required>

                    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
                </fieldset>
            </form>
        </div>
        <div class="pure-u-1 pure-u-md-1-2">
            <?php if ((isset($_smarty_tpl->tpl_vars['rata']->value))) {?>
                <p>Miesięczna rata: <?php echo $_smarty_tpl->tpl_vars['rata']->value;?>
</p>
            <?php }?>
        </div>
    </div>
</body>
</html><?php }
}
