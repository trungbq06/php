<?php /* Smarty version Smarty-3.1.18, created on 2015-04-16 07:22:09
         compiled from "E:\VertrigoServ\www\DAISAN\daisan\manager\templates\elements\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27277552f6321484484-14955733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d3de4b008741b325b9c75211aaf17c6fb17bd4' => 
    array (
      0 => 'E:\\VertrigoServ\\www\\DAISAN\\daisan\\manager\\templates\\elements\\footer.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27277552f6321484484-14955733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_552f632149b3f1_81749635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f632149b3f1_81749635')) {function content_552f632149b3f1_81749635($_smarty_tpl) {?><hr>
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
