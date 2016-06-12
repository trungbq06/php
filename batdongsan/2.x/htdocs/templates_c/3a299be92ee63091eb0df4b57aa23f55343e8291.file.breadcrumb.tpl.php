<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:15:06
         compiled from "/home/chungcu2/public_html/templates/elements/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:634600534575acb6aae7574-80988160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a299be92ee63091eb0df4b57aa23f55343e8291' => 
    array (
      0 => '/home/chungcu2/public_html/templates/elements/breadcrumb.tpl',
      1 => 1464272090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '634600534575acb6aae7574-80988160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acb6aaf50b6_21405588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acb6aaf50b6_21405588')) {function content_575acb6aaf50b6_21405588($_smarty_tpl) {?> <div class="breadcrumb">
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['category']->value['site_map'];?>
 <?php if ($_smarty_tpl->tpl_vars['number']->value!=null) {?>(<font color="#f60"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</font>)<?php }?>
    </ul>
</div><?php }} ?>
