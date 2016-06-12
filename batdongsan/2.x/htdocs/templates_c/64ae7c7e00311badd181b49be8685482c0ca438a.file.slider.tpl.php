<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:15:02
         compiled from "/home/chungcu2/public_html/templates/elements/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:555653621575acb66c7e898-28247636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ae7c7e00311badd181b49be8685482c0ca438a' => 
    array (
      0 => '/home/chungcu2/public_html/templates/elements/slider.tpl',
      1 => 1444701530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555653621575acb66c7e898-28247636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gallery_p2' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acb66c86690_57053187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acb66c86690_57053187')) {function content_575acb66c86690_57053187($_smarty_tpl) {?><ul class="bxslider">
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_p2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <li><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
" title="Funky roots" /></li>
    <?php } ?>
</ul><?php }} ?>
