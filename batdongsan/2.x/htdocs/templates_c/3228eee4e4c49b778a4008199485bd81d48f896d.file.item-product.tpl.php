<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:15:02
         compiled from "/home/chungcu2/public_html/templates/elements/item-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1858150857575acb66ca6661-19809744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3228eee4e4c49b778a4008199485bd81d48f896d' => 
    array (
      0 => '/home/chungcu2/public_html/templates/elements/item-product.tpl',
      1 => 1447904530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858150857575acb66ca6661-19809744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'data' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acb66cb77f9_00651079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acb66cb77f9_00651079')) {function content_575acb66cb77f9_00651079($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
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
