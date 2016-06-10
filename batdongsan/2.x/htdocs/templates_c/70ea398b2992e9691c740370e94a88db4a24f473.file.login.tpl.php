<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 04:59:17
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1005104261564179a5d0c2c5-49610402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70ea398b2992e9691c740370e94a88db4a24f473' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/login.tpl',
      1 => 1407161874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1005104261564179a5d0c2c5-49610402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564179a60ba247_96302563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564179a60ba247_96302563')) {function content_564179a60ba247_96302563($_smarty_tpl) {?><div id="Register">
<div class="use">

	<div class="wap-x55">
		<div class="pad mar-3rgt">
		</div>
	</div>
	
	<div class="wap-x45">
		<div class="bor pad-big mar-3mid bg">
			<h1 class="bor-btm">Đăng nhập</h1>
			<div class="mar-2mid">
				<p class="mar-mid"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
				<form method="post" action="" class="mar-xmid" id="FrmValidate">
				<table class="table">
					<tr>
						<td width="140">Tên đăng nhập</td>
						<td><input type="text" name="email" class="required email fnt-x200"></td>
					</tr>
					<tr>
						<td>Mật khẩu</td>
						<td><input type="password" name="password" class="required fnt-x200"></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="?mod=member&site=passreset">Bạn quên mật khẩu ?</a></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="checkbox" name="remember"> Ghi nhớ đăng nhập</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="FrmLogin" value="Đăng Nhập"></td>
					</tr>
				</table>
				</form>
				<p class="mar-2top">Nếu chưa có tài khoản, vui lòng <a href="register.html">đăng ký</a> tại đây !</p>
			</div>
		</div>
	</div>
	
	<div class="clear"></div>
</div>
</div><?php }} ?>
