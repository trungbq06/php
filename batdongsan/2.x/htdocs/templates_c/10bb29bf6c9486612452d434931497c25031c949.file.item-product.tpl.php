<?php /* Smarty version Smarty-3.1.18, created on 2015-11-19 01:49:22
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/item-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629672981564148df664f02-64929671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10bb29bf6c9486612452d434931497c25031c949' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/item-product.tpl',
      1 => 1447904531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629672981564148df664f02-64929671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564148df689927_34745156',
  'variables' => 
  array (
    'product' => 0,
    'data' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564148df689927_34745156')) {function content_564148df689927_34745156($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<div class="col-item col-md-3 col-sm-6 col-xs-6 col-default">
    <div class="item">
         <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
"></a>
         <p class="name">
             <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</a>
         </p>
    </div>
</div>

<?php } ?>

<div class="paging mar-top"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>

<?php }} ?>
