<?php /* Smarty version Smarty-3.1.18, created on 2015-11-19 02:56:45
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1616803160564d3a6d356591-26280595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fb230fa7db5537f553152d9f85b724ae9a9e4c9' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/change.tpl',
      1 => 1407161874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1616803160564d3a6d356591-26280595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'select' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564d3a6d3e7992_65548733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d3a6d3e7992_65548733')) {function content_564d3a6d3e7992_65548733($_smarty_tpl) {?><div class="pad">
	<h1 class="bor-btm">Thay đổi thông tin</h1>
			
	<form action="" method="post" class="mar-top" id="FrmValidate">
		<table class="table mar-2top">
			<tr>
				<td width="130px">Tên đầy đủ:</td>
				<td><input type="text" name="name" class="required fnt-x200" minlength="3" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"></td>
			</tr>
			<tr>
				<td>Ngày sinh:</td>
				<td>
					<select name="day" class="required">
						<?php echo $_smarty_tpl->tpl_vars['select']->value['day'];?>

					</select>
					<select name="month" class="required">
						<?php echo $_smarty_tpl->tpl_vars['select']->value['month'];?>

					</select>
					<select name="year" class="required">
						<?php echo $_smarty_tpl->tpl_vars['select']->value['year'];?>

					</select>
				</td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td>
					<select name="gender" class="required">
						<?php echo $_smarty_tpl->tpl_vars['select']->value['gender'];?>

					</select>
				</td>
			</tr>
			<tr>
				<td>Tỉnh thành:</td>
				<td>
					<select name="province_id" class="required">
						<?php echo $_smarty_tpl->tpl_vars['select']->value['province'];?>

					</select>
				</td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="phone" class="fnt-x200" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
"></td>
			</tr>
			<tr>
				<td>Yahoo</td>
				<td><input type="text" name="yahoo" class=" fnt-x200" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['yahoo'];?>
"></td>
			</tr>
			<tr>
				<td>Skype</td>
				<td><input type="text" name="skype" class=" fnt-x200" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['skype'];?>
"></td>
			</tr>
			<tr>
				<td colspan="2"><h3 class="bor-btm">&nbsp</h3></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="checkbox" checked name="check" value="1"> Tôi đồng ý với những điều khoản và quy định của website</td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td>
					<input type="submit" name="FrmSubmit" value="Lưu thay đổi">
					<input type="reset" value="Huỷ bỏ">
				</td>
			</tr>
			
		</table>
	</form>
</div><?php }} ?>
