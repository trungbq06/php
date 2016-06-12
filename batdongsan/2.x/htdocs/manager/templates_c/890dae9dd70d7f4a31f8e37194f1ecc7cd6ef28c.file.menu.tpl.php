<?php /* Smarty version Smarty-3.1.18, created on 2015-10-12 23:59:40
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/elements/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2059957962561c496c3727a3-95603630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890dae9dd70d7f4a31f8e37194f1ecc7cd6ef28c' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/elements/menu.tpl',
      1 => 1413518960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2059957962561c496c3727a3-95603630',
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
  'unifunc' => 'content_561c496c389c33_38497995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561c496c389c33_38497995')) {function content_561c496c389c33_38497995($_smarty_tpl) {?><div>
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
