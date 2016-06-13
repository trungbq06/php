<?php /* Smarty version Smarty-3.1.18, created on 2015-08-12 04:15:10
         compiled from "C:\xampp\htdocs\php\daisan_temp_code\manager\templates\elements\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557755caac2eb7d973-98750420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdf4549fa4fa812980647190c43b973ce7bf5381' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\daisan_temp_code\\manager\\templates\\elements\\sidebar.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557755caac2eb7d973-98750420',
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
  'unifunc' => 'content_55caac2eb911f6_29813448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55caac2eb911f6_29813448')) {function content_55caac2eb911f6_29813448($_smarty_tpl) {?><!-- left user starts -->
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
