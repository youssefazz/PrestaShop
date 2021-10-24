<?php
/* Smarty version 3.1.39, created on 2021-10-05 22:30:46
  from 'module:navbarviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615cc4060fea63_66659787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e9ab43b77834858df57cb32eb126072decff804' => 
    array (
      0 => 'module:navbarviewstemplatesfront',
      1 => 1627285512,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615cc4060fea63_66659787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1696176718615cc4060e9125_27081184', 'page_title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_460091206615cc4060f0ea1_76898551', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_1696176718615cc4060e9125_27081184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1696176718615cc4060e9125_27081184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    Matière


<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_460091206615cc4060f0ea1_76898551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_460091206615cc4060f0ea1_76898551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'matiere'),$_smarty_tpl ) );?>


<?php
}
}
/* {/block 'page_content'} */
}
