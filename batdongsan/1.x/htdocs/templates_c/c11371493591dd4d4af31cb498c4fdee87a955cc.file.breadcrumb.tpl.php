<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 01:33:09
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148489320156414955082f24-02204899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c11371493591dd4d4af31cb498c4fdee87a955cc' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/breadcrumb.tpl',
      1 => 1444810938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148489320156414955082f24-02204899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56414955099927_50136923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56414955099927_50136923')) {function content_56414955099927_50136923($_smarty_tpl) {?> <div class="breadcrumb">
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['category']->value['site_map'];?>
 (<font color="#f60"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</font>)
    </ul>
</div><?php }} ?>
