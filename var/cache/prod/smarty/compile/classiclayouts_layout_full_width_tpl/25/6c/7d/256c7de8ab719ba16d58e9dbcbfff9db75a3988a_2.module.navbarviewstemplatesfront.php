<?php
/* Smarty version 3.1.39, created on 2021-09-14 22:12:37
  from 'module:navbarviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614110454bc459_71896675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256c7de8ab719ba16d58e9dbcbfff9db75a3988a' => 
    array (
      0 => 'module:navbarviewstemplatesfront',
      1 => 1627285914,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614110454bc459_71896675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1136522952614110454b9025_95009716', 'page_title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_249013651614110454b9f73_53025940', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_1136522952614110454b9025_95009716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1136522952614110454b9025_95009716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


Les catégories


<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_249013651614110454b9f73_53025940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_249013651614110454b9f73_53025940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'categorietest'),$_smarty_tpl ) );?>


<?php
}
}
/* {/block 'page_content'} */
}
