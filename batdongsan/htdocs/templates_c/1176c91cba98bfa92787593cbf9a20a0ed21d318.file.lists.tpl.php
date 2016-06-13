<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:15:09
         compiled from "/home/chungcu2/public_html/templates/product/lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1874909594575acb6db38eb3-80131730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1176c91cba98bfa92787593cbf9a20a0ed21d318' => 
    array (
      0 => '/home/chungcu2/public_html/templates/product/lists.tpl',
      1 => 1444816098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1874909594575acb6db38eb3-80131730',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acb6dbd7a11_99930711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acb6dbd7a11_99930711')) {function content_575acb6dbd7a11_99930711($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../elements/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="content" style="padding-left: 0px !important;">
                       
    <div class="products-box">

        <?php echo $_smarty_tpl->getSubTemplate ("../elements/item-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
    </div>
</div><!--end .content-->
<?php echo $_smarty_tpl->getSubTemplate ("../elements/feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
