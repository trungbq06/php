<?php /* Smarty version Smarty-3.1.18, created on 2015-11-14 02:43:51
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/passreset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13515734556469fe77edc11-81374999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb9cc071ed3beb774eaf7b513a066a7e97fecc93' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/passreset.tpl',
      1 => 1407161874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13515734556469fe77edc11-81374999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56469fe78bd906_90554230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56469fe78bd906_90554230')) {function content_56469fe78bd906_90554230($_smarty_tpl) {?><div class="pad-big">

	<div class="wap-x55">
		<div class="bor pad mar-3rgt">
		
			
			
		</div>
	</div>
	
	<div class="wap-x45">
		<div class="bor pad">
			<h1 class="bor-btm">Quên mật khẩu</h1>
			<div class="mar-2mid">
				<p class="mar-mid bold"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
				<form method="post" action="" class="mar-xmid" id="FrmValidate">
				<table class="table">
					<tr>
						<td width="140" class="bold">Email đăng nhập: </td>
						<td><input type="text" name="email" class="required email fnt-x200"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="FrmReset" value="Gửi xác nhận tới email"></td>
					</tr>
				</table>
				</form>
				<p class="mar-2top">Nếu chưa có tài khoản, vui lòng <a href="register.html">đăng ký</a> tại đây !</p>
			</div>
		</div>
	</div>
	
	<div class="clear"></div>
</div><?php }} ?>
