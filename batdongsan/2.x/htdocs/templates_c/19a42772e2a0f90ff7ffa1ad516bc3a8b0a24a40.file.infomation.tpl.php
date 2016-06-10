<?php /* Smarty version Smarty-3.1.18, created on 2015-11-19 02:01:28
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/infomation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1639694607564d2d78549f77-52367641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19a42772e2a0f90ff7ffa1ad516bc3a8b0a24a40' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/infomation.tpl',
      1 => 1407161874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1639694607564d2d78549f77-52367641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564d2d78579c08_91870084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d2d78579c08_91870084')) {function content_564d2d78579c08_91870084($_smarty_tpl) {?><div class="pad">
	<h1 class="bor-btm">Thay đổi thông tin</h1>
			
	<form action="" method="post" class="mar-top" id="FrmValidate">
		<table class="table mar-2top">
			<tr>
				<td width="130px">Tên đầy đủ:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</td>
			</tr>
			<tr>
				<td>Ngày sinh:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['result']->value['birthday'];?>
</td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['result']->value['gender'];?>
</td>
			</tr>
			<tr>
				<td>Tỉnh thành:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['result']->value['province'];?>
</td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><?php echo $_smarty_tpl->tpl_vars['result']->value['phone'];?>
</td>
			</tr>
			<tr>
				<td>yahoo</td>
				<td><?php echo $_smarty_tpl->tpl_vars['result']->value['yahoo'];?>
</td>
			</tr>
			<tr>
				<td>Skype</td>
				<td><?php echo $_smarty_tpl->tpl_vars['result']->value['skype'];?>
</td>
			</tr>
			<tr>
				<td>Gold</td>
				<td><?php echo $_smarty_tpl->tpl_vars['result']->value['gold'];?>
</td>
			</tr>
			
		</table>
	</form>
</div><?php }} ?>
