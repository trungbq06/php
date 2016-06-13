<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:39:09
         compiled from "C:\xampp\htdocs\manager\templates\elements\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235375746fc7dd00767-20821926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb119697f367fae424f6e39c02edd64ebdd8791' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manager\\templates\\elements\\footer.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235375746fc7dd00767-20821926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746fc7dd08423_52438618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746fc7dd08423_52438618')) {function content_5746fc7dd08423_52438618($_smarty_tpl) {?><hr>
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
