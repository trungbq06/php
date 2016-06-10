<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:20:39
         compiled from "C:\xampp\htdocs\templates\elements\item-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121195746f8270224b3-06004159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e96b2abd93a734cd62f2bea5089a041de8d66af3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\item-product.tpl',
      1 => 1447904531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121195746f8270224b3-06004159',
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
  'unifunc' => 'content_5746f827043da3_55354677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f827043da3_55354677')) {function content_5746f827043da3_55354677($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
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
