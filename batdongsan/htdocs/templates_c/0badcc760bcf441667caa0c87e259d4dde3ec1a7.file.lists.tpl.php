<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:41:54
         compiled from "C:\xampp\htdocs\templates\product\lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2569757470b3276adb9-31937357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0badcc760bcf441667caa0c87e259d4dde3ec1a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\product\\lists.tpl',
      1 => 1444816098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2569757470b3276adb9-31937357',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57470b327c1c47_29257259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57470b327c1c47_29257259')) {function content_57470b327c1c47_29257259($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../elements/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="content" style="padding-left: 0px !important;">
                       
    <div class="products-box">

        <?php echo $_smarty_tpl->getSubTemplate ("../elements/item-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
    </div>
</div><!--end .content-->
<?php echo $_smarty_tpl->getSubTemplate ("../elements/feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
