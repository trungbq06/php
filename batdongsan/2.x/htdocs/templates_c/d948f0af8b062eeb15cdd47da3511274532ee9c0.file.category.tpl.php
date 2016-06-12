<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:20:38
         compiled from "C:\xampp\htdocs\templates\elements\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98515746f826ad6740-24550854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd948f0af8b062eeb15cdd47da3511274532ee9c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\category.tpl',
      1 => 1444809750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98515746f826ad6740-24550854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate_news' => 0,
    'list' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746f826afd086_98101678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f826afd086_98101678')) {function content_5746f826afd086_98101678($_smarty_tpl) {?><div class="category box">
   <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h3>
    <ul>
   
 <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a></li>
 <?php } ?>    
    </ul>
   <?php } ?>   
</div><?php }} ?>
