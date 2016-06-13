<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 01:33:09
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/product/lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177215669256414955060e96-70993683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ed32285da0b93edac6fcb352d0528f2ee86c737' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/product/lists.tpl',
      1 => 1444816098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177215669256414955060e96-70993683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56414955080230_05009589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56414955080230_05009589')) {function content_56414955080230_05009589($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../elements/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="content" style="padding-left: 0px !important;">
                       
    <div class="products-box">

        <?php echo $_smarty_tpl->getSubTemplate ("../elements/item-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
    </div>
</div><!--end .content-->
<?php echo $_smarty_tpl->getSubTemplate ("../elements/feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
