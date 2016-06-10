<?php /* Smarty version Smarty-3.1.18, created on 2015-11-19 02:55:29
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1272373424564d3a210f0a38-67901349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f59192487fa5ebc5fe47177c79a4b2592da16e0' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/profile.tpl',
      1 => 1407161874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272373424564d3a210f0a38-67901349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'account' => 0,
    'shops' => 0,
    'list' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564d3a211aa570_86624405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d3a211aa570_86624405')) {function content_564d3a211aa570_86624405($_smarty_tpl) {?><div class="wap-x25">
	<div class="bor mar shadow">
		<h3 class="pad bg gray">Cá nhân</h3>
		<div class="pad">
			<div class="wap-x50">
				<div class="img shadow pad-sml"><img src="<?php echo $_smarty_tpl->tpl_vars['account']->value['img'];?>
"></div>
			</div>
			<div class="wap-x50">
				<div class="mar-lft mar-stop">
					<p class="bold"><?php echo $_smarty_tpl->tpl_vars['account']->value['name'];?>
</p>
					<p class="mar-top"><a href="#">Thiết lập tài khoản</a></p>
				</div>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
	
	<div class="mar bor shadow">
		<h3 class="pad bg gray">Danh sách gian hàng của bạn</h3>
		<div>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
			<div class="mar bor-btm">
				<div class="wap-x25 img shadow">
					<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['img'];?>
"></a>
				</div>
				<div class="wap-x75">
					<div class="mar-lft">
						<p class="bold mar-btm"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a></p>
						<p class="mar-sbtm"><a href="?mod=helps&site=set_admin_page&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" target="_blank">Chỉnh sửa thông tin</a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<?php } ?>
			
			<div class="clear"></div>
		</div>
	</div>
</div>

<div class="wap-x75">
	
	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
	<div class="wap-x50">
		<div class="bor mar shadow">
			<p class="pad bg gray bold"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a></p>
			
			<div class="pad">
				<div class="wap-x40">
					<div class="img bor">
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['image'];?>
"></a>
					</div>
				</div>
				<div class="wap-x60">
					<div class="mar-2lft">
						<p>
							<b class="red font-x14"><?php echo $_smarty_tpl->tpl_vars['list']->value['price_sale'];?>
</b>
							<?php if ($_smarty_tpl->tpl_vars['list']->value['promotions']!=0) {?><span class="price_old"><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span><?php }?>
						</p>
						<p class="mar-mid"><?php echo $_smarty_tpl->tpl_vars['list']->value['description'];?>
</p>
						
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="pad bg gray">
				<p>Shop: <a href=""><?php echo $_smarty_tpl->tpl_vars['list']->value['page'];?>
</a></p>
			</div>
	
		</div>
	</div>
	<?php } ?>
	
	<div class="clear"></div>
</div>


<div class="clear"></div><?php }} ?>
