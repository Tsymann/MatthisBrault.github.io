<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 12:44:29
  from 'C:\xampp\htdocs\QFi\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc4db1dae0662_94563524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b999ef9a9568a3d8c1863f7140a74f152929c87d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QFi\\themes\\classic\\templates\\page.tpl',
      1 => 1606736132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc4db1dae0662_94563524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6887474705fc4db1dadb7e8_99095116', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6127377465fc4db1dadc3c7_36926792 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_10909315965fc4db1dadbcc3_79650331 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6127377465fc4db1dadc3c7_36926792', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11946923165fc4db1dade7f7_24271380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3969544085fc4db1dadee10_37519916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6209643555fc4db1dade375_36702500 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11946923165fc4db1dade7f7_24271380', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3969544085fc4db1dadee10_37519916', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3847936505fc4db1dadfbd0_39857447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12457327395fc4db1dadf776_91842914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3847936505fc4db1dadfbd0_39857447', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_6887474705fc4db1dadb7e8_99095116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6887474705fc4db1dadb7e8_99095116',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10909315965fc4db1dadbcc3_79650331',
  ),
  'page_title' => 
  array (
    0 => 'Block_6127377465fc4db1dadc3c7_36926792',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6209643555fc4db1dade375_36702500',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11946923165fc4db1dade7f7_24271380',
  ),
  'page_content' => 
  array (
    0 => 'Block_3969544085fc4db1dadee10_37519916',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12457327395fc4db1dadf776_91842914',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3847936505fc4db1dadfbd0_39857447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10909315965fc4db1dadbcc3_79650331', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6209643555fc4db1dade375_36702500', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12457327395fc4db1dadf776_91842914', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
