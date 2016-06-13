<?php /* Smarty version Smarty-3.1.18, created on 2015-10-12 09:31:21
         compiled from "C:\xampp\htdocs\php\tuvanxaydung_code\manager\templates\elements\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22302561b61c9222210-53955332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e2fd53c1391569c46951b623a1ef02f20226a96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\tuvanxaydung_code\\manager\\templates\\elements\\sidebar.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22302561b61c9222210-53955332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561b61c9235a99_09842293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b61c9235a99_09842293')) {function content_561b61c9235a99_09842293($_smarty_tpl) {?><!-- left user starts -->
<div class="span2 main-user-span">
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-user">
            <li class="nav-header hidden-tablet">Quản lý chính</li>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
            <li><a class="ajax-link" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['alias'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['list']->value['icon'];?>
"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span></a></li>
            <?php } ?>
        </ul>
    </div><!--/.well -->
</div><!--/span-->
<!-- left user ends -->
<?php }} ?>
