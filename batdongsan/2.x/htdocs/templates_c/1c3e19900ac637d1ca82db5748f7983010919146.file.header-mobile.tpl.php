<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:51:04
         compiled from "C:\xampp\htdocs\templates\elements\header-mobile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158825746f826a0c860-88612803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c3e19900ac637d1ca82db5748f7983010919146' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\header-mobile.tpl',
      1 => 1464274261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158825746f826a0c860-88612803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746f826a44f02_32435927',
  'variables' => 
  array (
    'gallery_p1' => 0,
    'data' => 0,
    'menu_p1' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f826a44f02_32435927')) {function content_5746f826a44f02_32435927($_smarty_tpl) {?><section class="header-mobile">
            <div class="row col-default">
                <div class="container">
                    <div class="col-xs-4 col-default bar-mobile">
                        <i class="glyphicon glyphicon-list" style="font-size: 18px;"></i>
                    </div>
                    <div class="col-xs-4 col-default logo-mobile">
                        <div class="logo" style="text-align: center;"> 
                            <a href="index.php"><img src="<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_p1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
<?php } ?>" height="55px;"></a>
                        </div>  
                    </div>
                    <!--<div class="col-xs-4 col-default search-mobile">
                        <i class="glyphicon glyphicon-search" style="font-size: 18px;"></i>
                    </div>-->
                </div>
            </div>
            <div class="row col-default">
                <div class="menubar-mobile">
					<ul>
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_p1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>					
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a></li>
					<?php } ?>    
					</ul>
   
 
        
 

                </div>
                <!--<form action="" method="" class="search-form" >
                    <div class="">
                        <input type="text" class="form-control" id="search" placeholder="Nhập tìm kiếm">
                        <input type="submit" class="" value="Tìm kiếm">
                    </div>
                </form>-->
            </div>
        </section><?php }} ?>
