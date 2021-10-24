<?php
/* Smarty version 3.1.39, created on 2021-10-05 22:30:18
  from 'module:navbarviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615cc3ea2faef0_14543243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac084a1be4bc3a2b4934d767952bcd72c3cda71' => 
    array (
      0 => 'module:navbarviewstemplatesfront',
      1 => 1628074401,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615cc3ea2faef0_14543243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1121099111615cc3ea2f6ab8_52985306', 'page_title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1443340843615cc3ea2f7fb4_45384462', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_1121099111615cc3ea2f6ab8_52985306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1121099111615cc3ea2f6ab8_52985306',
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
class Block_1443340843615cc3ea2f7fb4_45384462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1443340843615cc3ea2f7fb4_45384462',
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
