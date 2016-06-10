<?php /* Smarty version Smarty-3.1.18, created on 2015-11-14 02:43:56
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161125315756469fec932d57-71141517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa1a8eaf783de3cc0bee2e41d5ecd91b7518d39d' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/register.tpl',
      1 => 1407161874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161125315756469fec932d57-71141517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56469feca8df63_56267022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56469feca8df63_56267022')) {function content_56469feca8df63_56267022($_smarty_tpl) {?><div id="Register">
	<div class="use">
		<div class="wap-x55">
			<div class="pad mar-3rgt">
			</div>
		</div>
		
		<div class="wap-x45">
			<div class="bor pad-big bg mar-3mid">	
				<h1 class="bor-btm">Đăng ký tài khoản</h1>
				<form action="" method="post" class="" id="FrmValidate">
					<table class="table mar-2top">
						<tr>
							<td width="130px">Email đăng nhập <span class="color-red">(*)</span></td>
							<td><input type="text" name="email" class="required email fnt-x200"></td>
						</tr>
						<tr>
							<td>Mật khẩu <span class="color-red">(*)</span></td>
							<td><input type="password" name="password" class="required fnt-x200" minlength="6"></td>
						</tr>
						<tr>
							<td>Nhập lại mật khẩu <span class="color-red">(*)</span></td>
							<td><input type="password" name="repass" class="required fnt-x200" minlength="6"></td>
						</tr>
						<tr>
							<td width="130px">Tên đầy đủ <span class="color-red">(*)</span></td>
							<td><input type="text" name="name" class="required fnt-x200" minlength="3"></td>
						</tr>
						<tr>
							<td>Ngày sinh <span class="color-red">(*)</span></td>
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
							<td>Giới tính <span class="color-red">(*)</span></td>
							<td>
								<select name="gender" class="required">
									<?php echo $_smarty_tpl->tpl_vars['select']->value['gender'];?>

								</select>
							</td>
						</tr>
						<tr>
							<td>Tỉnh thành <span class="color-red">(*)</span></td>
							<td>
								<select name="province_id" class="required">
									<?php echo $_smarty_tpl->tpl_vars['select']->value['province'];?>

								</select>
							</td>
						</tr>
						<tr>
							<td>Số điện thoại <span class="color-red">(*)</span></td>
							<td><input type="text" name="phone" class="number fnt-x200 required"></td>
						</tr>
						<tr>
							<td>Yahoo</td>
							<td><input type="text" name="yahoo" class=" fnt-x200"></td>
						</tr>
						<tr>
							<td>Skype</td>
							<td><input type="text" name="skype" class=" fnt-x200"></td>
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
								<input type="submit" name="FrmRegister" value="Đăng Ký">
								<input type="reset" value="Huỷ bỏ">
							</td>
						</tr>
						
					</table>
				</form>
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
</div><?php }} ?>
