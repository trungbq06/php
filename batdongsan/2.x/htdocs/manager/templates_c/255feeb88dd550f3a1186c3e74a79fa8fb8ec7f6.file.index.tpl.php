<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:15:39
         compiled from "/home/chungcu2/public_html/manager/templates/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1141771465575acb8b3c7837-65778388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '255feeb88dd550f3a1186c3e74a79fa8fb8ec7f6' => 
    array (
      0 => '/home/chungcu2/public_html/manager/templates/home/index.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1141771465575acb8b3c7837-65778388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acb8b3d8cf4_93350806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acb8b3d8cf4_93350806')) {function content_575acb8b3d8cf4_93350806($_smarty_tpl) {?><div class="sortable row-fluid">
	<a data-rel="tooltip" title="6 new members." class="well span3 top-block" href="?mod=member&site=manager">
		<span class="icon32 icon-red icon-user"></span>
		<div>Total Members</div>
		<div>0</div>
		<span class="notification">0</span>
	</a>

	<a data-rel="tooltip" title="4 new pro members." class="well span3 top-block" href="#">
		<span class="icon32 icon-color icon-star-on"></span>
		<div>Pro Members</div>
		<div>228</div>
		<span class="notification green">4</span>
	</a>

	<a data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['number']->value['invoice_new'];?>
 hoá đơn mới" class="well span3 top-block" href="#">
		<span class="icon32 icon-color icon-cart"></span>
		<div>Hoá đơn</div>
		<div><?php echo $_smarty_tpl->tpl_vars['number']->value['invoice'];?>
</div>
		<span class="notification yellow"><?php echo $_smarty_tpl->tpl_vars['number']->value['invoice_new'];?>
</span>
	</a>
	
	<a data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['number']->value['contact_new'];?>
 liên hệ mới" class="well span3 top-block" href="#">
		<span class="icon32 icon-color icon-envelope-closed"></span>
		<div>Liên hệ</div>
		<div><?php echo $_smarty_tpl->tpl_vars['number']->value['contact'];?>
</div>
		<span class="notification red"><?php echo $_smarty_tpl->tpl_vars['number']->value['contact_new'];?>
</span>
	</a>
</div>

<div class="row-fluid">
	<div class="box span12">
		<div class="box-header well">
			<h2><i class="icon-info-sign"></i> Introduction</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<h1>Charisma <small>free, premium quality, responsive, multiple skin admin template.</small></h1>
			<p>Its a live demo of the template. I have created Charisma to ease the repeat work I have to do on my projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you :)</p>
			<p><b>All pages in the user are functional, take a look at all, please share this with your followers.</b></p>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php }} ?>
