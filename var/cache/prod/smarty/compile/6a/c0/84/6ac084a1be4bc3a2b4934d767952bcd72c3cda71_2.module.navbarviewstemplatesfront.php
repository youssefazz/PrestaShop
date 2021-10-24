<?php
/* Smarty version 3.1.39, created on 2021-08-03 14:40:01
  from 'module:navbarviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61094731d4bd58_88156113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac084a1be4bc3a2b4934d767952bcd72c3cda71' => 
    array (
      0 => 'module:navbarviewstemplatesfront',
      1 => 1627465003,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61094731d4bd58_88156113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4279656361094731d48801_28748220', 'page_title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139446193461094731d496a2_28230290', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_4279656361094731d48801_28748220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_4279656361094731d48801_28748220',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    Fabrication


<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_139446193461094731d496a2_28230290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_139446193461094731d496a2_28230290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'fabrication'),$_smarty_tpl ) );?>


<?php
}
}
/* {/block 'page_content'} */
}
