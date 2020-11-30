<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 12:44:43
  from 'C:\xampp\htdocs\QFi\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc4db2baadbd8_19393822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25bb6caf86fd0a1739576f86a2761f5cae12f539' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QFi\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1606736132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc4db2baadbd8_19393822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15221256585fc4db2baac0a0_67921379', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_15221256585fc4db2baac0a0_67921379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_15221256585fc4db2baac0a0_67921379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
