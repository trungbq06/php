<?php /* Smarty version Smarty-3.1.18, created on 2014-11-23 02:13:27
         compiled from "/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/elements/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2086199304547142c7eea5c1-31454054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1acef5be419a913f8c5fd7724481275a272fa84a' => 
    array (
      0 => '/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/elements/footer.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2086199304547142c7eea5c1-31454054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547142c7ef0119_16518098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547142c7ef0119_16518098')) {function content_547142c7ef0119_16518098($_smarty_tpl) {?><hr>
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
