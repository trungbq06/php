<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:39:09
         compiled from "C:\xampp\htdocs\manager\templates\elements\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198355746fc7db4e1e2-24436485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd605552c8d17db50203b82db04e5ce44687f1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manager\\templates\\elements\\menu.tpl',
      1 => 1413518960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198355746fc7db4e1e2-24436485',
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
  'unifunc' => 'content_5746fc7db6d627_87254168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746fc7db6d627_87254168')) {function content_5746fc7db6d627_87254168($_smarty_tpl) {?><div>
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
