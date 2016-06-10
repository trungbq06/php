<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 01:31:11
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1531288105564148df53fe36-85266555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090cf8d19ec521bcf813111053f1d0e3073f4c79' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/category.tpl',
      1 => 1444809750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1531288105564148df53fe36-85266555',
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
  'unifunc' => 'content_564148df58a643_13647038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564148df58a643_13647038')) {function content_564148df58a643_13647038($_smarty_tpl) {?><div class="category box">
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
