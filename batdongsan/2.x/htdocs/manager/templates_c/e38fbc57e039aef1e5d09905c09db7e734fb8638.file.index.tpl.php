<?php /* Smarty version Smarty-3.1.18, created on 2015-09-28 10:48:43
         compiled from "C:\xampp\htdocs\daisan_temp_code\manager\templates\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127885608feeb54f784-72919423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e38fbc57e039aef1e5d09905c09db7e734fb8638' => 
    array (
      0 => 'C:\\xampp\\htdocs\\daisan_temp_code\\manager\\templates\\home\\index.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127885608feeb54f784-72919423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5608feeb5d0628_22856447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5608feeb5d0628_22856447')) {function content_5608feeb5d0628_22856447($_smarty_tpl) {?><div class="sortable row-fluid">
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
