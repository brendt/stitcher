<?php
/* Smarty version 3.1.30, created on 2016-10-07 15:43:08
  from "/sites/stitcher/stitcher/tests/src/template/churches/detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f7c28c08a643_34054976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ba296c40eb3dfbc6ebe49faa18866f12c0d5de9' => 
    array (
      0 => '/sites/stitcher/stitcher/tests/src/template/churches/detail.tpl',
      1 => 1475854987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
  ),
),false)) {
function content_57f7c28c08a643_34054976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41051274557f7c28c089da8_17502765', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_41051274557f7c28c089da8_17502765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    detail
<?php
}
}
/* {/block 'content'} */
}
