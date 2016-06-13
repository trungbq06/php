<?php /* Smarty version Smarty-3.1.18, created on 2015-11-19 02:56:55
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1660031159564d3a77c94657-21911108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '488e6a047b7628f836eb5fcc3ab9d97a3b83cbfd' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/password.tpl',
      1 => 1407161874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1660031159564d3a77c94657-21911108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564d3a77cd3537_13482004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d3a77cd3537_13482004')) {function content_564d3a77cd3537_13482004($_smarty_tpl) {?><div class="pad">
	<h1 class="bor-btm">Thay đổi mật khẩu</h1>
	<p class="mar-mid"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
	<form method="post" action="" class="mar-xmid" id="Validate">
	<table class="table">
		<tr>
			<td width="180">nhập mật khẩu cũ (*)</td>
			<td><input type="password" name="old" class="fnt-x200 required" minlength="6"></td>
		</tr>
		<tr>
			<td>Mật khẩu mới (*)</td>
			<td><input type="password" name="new" class="fnt-x200 required" minlength="6"></td>
		</tr>
		<tr>
			<td>Xác nhận mật khẩu mới (*)</td>
			<td><input type="password" name="re" class="fnt-x200 required" minlength="6"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="FrmSubmit" value="Thay đổi mật khẩu" class=""></td>
		</tr>
	</table>
	</form>
</div>
<?php }} ?>
