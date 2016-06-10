<?php /* Smarty version Smarty-3.1.18, created on 2014-10-25 02:25:35
         compiled from "/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/elements/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1309706546544b0a1f6bd8c3-41306061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd158375e60db7a00e36218c25d87a5ae305a01b' => 
    array (
      0 => '/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/elements/footer.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1309706546544b0a1f6bd8c3-41306061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544b0a1f7bfac9_42041298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b0a1f7bfac9_42041298')) {function content_544b0a1f7bfac9_42041298($_smarty_tpl) {?><hr>
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
