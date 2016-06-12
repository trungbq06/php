<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 01:31:11
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1166033146564148df6190d3-46087866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff7e764eac7554b2b270fcc479f2ea3e040ef122' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/slider.tpl',
      1 => 1444701530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166033146564148df6190d3-46087866',
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
  'unifunc' => 'content_564148df638ea5_59591181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564148df638ea5_59591181')) {function content_564148df638ea5_59591181($_smarty_tpl) {?><ul class="bxslider">
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_p2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <li><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
" title="Funky roots" /></li>
    <?php } ?>
</ul><?php }} ?>
