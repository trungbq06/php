<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:47:21
         compiled from "templates/layouts/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2028512406575ad2f94c05e2-02240318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca4f95f8265fa124970a2edb12a16965aa3f297c' => 
    array (
      0 => 'templates/layouts/default.tpl',
      1 => 1410226650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2028512406575ad2f94c05e2-02240318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'map' => 0,
    'site_map' => 0,
    'content' => 0,
    'support' => 0,
    'list' => 0,
    'other' => 0,
    'hot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575ad2f95811e5_94408191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575ad2f95811e5_94408191')) {function content_575ad2f95811e5_94408191($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo $_smarty_tpl->getSubTemplate ('../elements/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>
<script type="text/javascript" src="webroot/js/GoogleMapControl.js"></script>

</head>
<body onload="initialize(<?php echo $_smarty_tpl->tpl_vars['map']->value['map_ip'];?>
)">

<div class="Zoom">
	<div class="ZoomView">
	</div>
</div>



<div id="wrapper">

	<span id="icon_category"></span>
	<?php echo $_smarty_tpl->getSubTemplate ('../elements/btm_category.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<!--header -->
	<?php echo $_smarty_tpl->getSubTemplate ('../elements/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!--end header -->

	<div id="Content" class="bg">

		<div class="use">
			<div class="pad">
				<?php echo $_smarty_tpl->tpl_vars['site_map']->value;?>

			</div>
			<div class="wap-x20">
				<?php echo $_smarty_tpl->getSubTemplate ('../elements/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>

			<div class="wap-x60">
				<div class="mar">
					<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			</div>
			
			<div class="wap-x20">
				<div class="mar bor" id="hotline">
					<h3 class="bor-btm pad">HOTLINE HỖ TRỢ</h3>
					<ul id="">
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['support']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<li>
							<span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span>
							<span class="phone"><?php echo $_smarty_tpl->tpl_vars['list']->value['phone'];?>
</span>
						</li>
						<?php } ?>
					</ul>
				</div>
				
				
				<?php if ($_smarty_tpl->tpl_vars['other']->value!=null) {?>
				<div class="mar">
					<h2 class="bor-btm">Các tin khác</h2>
					<div class="mar-mid" id="news_other">
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
						<p class="mar-btm"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['list']->value['created'];?>
)</a></p>
						<?php } ?>
					</div>
				</div>
				<?php }?>
			
				<?php if ($_smarty_tpl->tpl_vars['other']->value!=null) {?>
				<div class="mar-3top mar">
					<h2 class="bor-btm">Tin xem nhiều nhất</h2>
					<div class="mar-mid" id="news_other">
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
						<p class="mar-btm"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['list']->value['created'];?>
)</a></p>
						<?php } ?>
					</div>
				</div>
				<?php }?>
				
				
			</div>
			
			<div class="clear"></div>
			
		</div>
		
	</div>
	
	<!--footer -->
	<?php echo $_smarty_tpl->getSubTemplate ('../elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!--end footer -->
</div>

</body>
</html><?php }} ?>
