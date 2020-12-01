<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 14:09:49
  from 'C:\xampp\htdocs\QFi\admin445izscm7\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc4ef1d0f6885_33384878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c52e76c47d0aa371f9264ba21d30aa217a2640e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QFi\\admin445izscm7\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1606737675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc4ef1d0f6885_33384878 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
