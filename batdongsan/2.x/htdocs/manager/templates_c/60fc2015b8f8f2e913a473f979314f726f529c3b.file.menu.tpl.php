<?php /* Smarty version Smarty-3.1.18, created on 2015-01-13 14:39:40
         compiled from "/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/elements/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117210746954b52e2cc08b39-04421546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60fc2015b8f8f2e913a473f979314f726f529c3b' => 
    array (
      0 => '/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/elements/menu.tpl',
      1 => 1413518959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117210746954b52e2cc08b39-04421546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b52e2cc20011_99492887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b52e2cc20011_99492887')) {function content_54b52e2cc20011_99492887($_smarty_tpl) {?><div>
    <ul class="breadcrumb">
    	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        <li>
            <i class="<?php echo $_smarty_tpl->tpl_vars['list']->value['icon'];?>
"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['alias'];?>
"> <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a> <span class="divider">|</span>
        </li>
        <?php } ?>
    </ul>
</div>
<?php }} ?>
