<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 12:46:55
  from 'C:\xampp\htdocs\QFi\admin445izscm7\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc4dbaf57e0c2_72129170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ac5a68036256e75ca2dcf652bfc2dbc7838993' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QFi\\admin445izscm7\\themes\\default\\template\\content.tpl',
      1 => 1606736129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc4dbaf57e0c2_72129170 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
