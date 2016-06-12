<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:20:38
         compiled from "C:\xampp\htdocs\templates\elements\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237935746f826da9c76-99924674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2166ef2d6f4955da315cf482fa1108ebd19cc412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\slider.tpl',
      1 => 1444701530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237935746f826da9c76-99924674',
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
  'unifunc' => 'content_5746f826db9318_25654532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f826db9318_25654532')) {function content_5746f826db9318_25654532($_smarty_tpl) {?><ul class="bxslider">
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_p2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <li><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
" title="Funky roots" /></li>
    <?php } ?>
</ul><?php }} ?>
