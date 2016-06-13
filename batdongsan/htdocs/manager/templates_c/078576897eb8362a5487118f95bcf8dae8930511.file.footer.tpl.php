<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:15:39
         compiled from "/home/chungcu2/public_html/manager/templates/elements/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1561253785575acb8b3dacf6-90313060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078576897eb8362a5487118f95bcf8dae8930511' => 
    array (
      0 => '/home/chungcu2/public_html/manager/templates/elements/footer.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1561253785575acb8b3dacf6-90313060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acb8b3de0c2_77992179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acb8b3de0c2_77992179')) {function content_575acb8b3de0c2_77992179($_smarty_tpl) {?><hr>
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
