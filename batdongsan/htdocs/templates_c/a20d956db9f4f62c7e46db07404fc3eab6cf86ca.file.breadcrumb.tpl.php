<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:16:38
         compiled from "C:\xampp\htdocs\templates\elements\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222574704354ce369-38706594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a20d956db9f4f62c7e46db07404fc3eab6cf86ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\breadcrumb.tpl',
      1 => 1464272091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222574704354ce369-38706594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_574704354d9392_01389936',
  'variables' => 
  array (
    'category' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574704354d9392_01389936')) {function content_574704354d9392_01389936($_smarty_tpl) {?> <div class="breadcrumb">
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['category']->value['site_map'];?>
 <?php if ($_smarty_tpl->tpl_vars['number']->value!=null) {?>(<font color="#f60"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</font>)<?php }?>
    </ul>
</div><?php }} ?>
