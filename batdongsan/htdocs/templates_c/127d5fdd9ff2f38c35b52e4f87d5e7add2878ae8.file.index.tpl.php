<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:20:38
         compiled from "C:\xampp\htdocs\templates\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125025746f826e61017-50628204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '127d5fdd9ff2f38c35b52e4f87d5e7add2878ae8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\home\\index.tpl',
      1 => 1447904544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125025746f826e61017-50628204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'member' => 0,
    'product1' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746f826ea5894_37347225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f826ea5894_37347225')) {function content_5746f826ea5894_37347225($_smarty_tpl) {?><div class="">
<?php if ($_smarty_tpl->tpl_vars['member']->value['role']==1) {?>
    <h3 style="background: red">Sản phẩm chưa được phê duyệt</h3>
    <div class="products-box">
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

    </div>
  <?php }?>  
    <div class="clearfix"></div>
    <h3>Sản phẩm</h3>
    <div class="products-box">

      
       
        	 <?php echo $_smarty_tpl->getSubTemplate ('../elements/item-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



        
    </div>
    
</div><!--end .content-->
<?php echo $_smarty_tpl->getSubTemplate ('../elements/feature.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
