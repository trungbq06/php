<?php /* Smarty version Smarty-3.1.18, created on 2015-01-13 14:39:40
         compiled from "/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/elements/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117640906654b52e2cc63c71-54444943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f75801442ae9da52f998356a9a9f4d0db07e0b63' => 
    array (
      0 => '/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/elements/footer.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117640906654b52e2cc63c71-54444943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b52e2cc79bf6_21196520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b52e2cc79bf6_21196520')) {function content_54b52e2cc79bf6_21196520($_smarty_tpl) {?><hr>
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<footer>
    <p class="pull-left">&copy; Admin & control 2013</p>
    <p class="pull-right"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - Template: Charisma</p>
</footer>
<?php }} ?>
