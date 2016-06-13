<?php /* Smarty version Smarty-3.1.18, created on 2014-10-25 02:30:51
         compiled from "/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/gallery/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80922648544b0b5ba38fc0-59117572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b00582705bfa2e91b6fbaaa6fe6022a0b4dd7fd' => 
    array (
      0 => '/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/gallery/index.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80922648544b0b5ba38fc0-59117572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544b0b5bdbc4e3_45285133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b0b5bdbc4e3_45285133')) {function content_544b0b5bdbc4e3_45285133($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-picture"></i> Gallery</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
                 	<br>
			<ul class="thumbnails gallery">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<li id="" class="thumbnail">
					<a style="background:url(<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
)" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
">
                      	<img class="grayscale" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
">
                    </a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php }} ?>
