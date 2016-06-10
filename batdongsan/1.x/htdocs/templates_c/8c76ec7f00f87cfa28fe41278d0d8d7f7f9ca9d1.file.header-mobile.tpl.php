<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 01:31:11
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/header-mobile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1281899082564148df4e9fe0-14201406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c76ec7f00f87cfa28fe41278d0d8d7f7f9ca9d1' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/header-mobile.tpl',
      1 => 1444821753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1281899082564148df4e9fe0-14201406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gallery_p1' => 0,
    'data' => 0,
    'cate_news' => 0,
    'list' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564148df53a570_31416391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564148df53a570_31416391')) {function content_564148df53a570_31416391($_smarty_tpl) {?><section class="header-mobile">
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
                    <div class="col-xs-4 col-default search-mobile">
                        <i class="glyphicon glyphicon-search" style="font-size: 18px;"></i>
                    </div>
                </div>
            </div>
            <div class="row col-default">
                <div class="menubar-mobile">
                  <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h3>
    <ul>
   
 <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a></li>
 <?php } ?>    
    </ul>
   <?php } ?>   
                </div>
                <form action="" method="" class="search-form" >
                    <div class="">
                        <input type="text" class="form-control" id="search" placeholder="Nhập tìm kiếm">
                        <input type="submit" class="" value="Tìm kiếm">
                    </div>
                </form>
            </div>
        </section><?php }} ?>
