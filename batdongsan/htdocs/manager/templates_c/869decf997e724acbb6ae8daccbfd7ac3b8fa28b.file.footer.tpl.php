<?php /* Smarty version Smarty-3.1.18, created on 2015-10-12 23:59:40
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/elements/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1906810390561c496c3ace78-36284744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869decf997e724acbb6ae8daccbfd7ac3b8fa28b' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/elements/footer.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1906810390561c496c3ace78-36284744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561c496c3b2dc9_10422376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561c496c3b2dc9_10422376')) {function content_561c496c3b2dc9_10422376($_smarty_tpl) {?><hr>
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
