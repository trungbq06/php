<?php /* Smarty version Smarty-3.1.18, created on 2015-11-19 01:58:53
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302138740564148df44b926-16649148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3973dd1e0fe3127214c4a4edc76bf29414e00c' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/menu.tpl',
      1 => 1447905138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302138740564148df44b926-16649148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564148df4e3d41_70454765',
  'variables' => 
  array (
    'menu_p1' => 0,
    'data' => 0,
    'child' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564148df4e3d41_70454765')) {function content_564148df4e3d41_70454765($_smarty_tpl) {?><div class="menu-box">
    <div class="container">
        <ul class="menu">
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_p1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['child']!=null) {?>
                    <ul>
                     <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a></li> 
                     <?php } ?>
                    </ul>
                <?php }?>
            </li>
            <?php } ?>
           
        </ul>
        
        <ul style="float: right" class="menu">
         <?php if ($_smarty_tpl->tpl_vars['member']->value['id']==0) {?>
        <li><a href="dang-nhap.html">Đăng nhập</a></li>
        <li><a href="dang-ky.html">Đăng ký</a></li>
        <?php } else { ?>
        <li><a href="tai-khoan.html">Hi, <?php echo $_smarty_tpl->tpl_vars['member']->value['name'];?>
</a></li>
        <li><a href="?mod=member&site=logout" onclick="return confirm('Bạn có chắc chắn muốn thoát không?')">Đăng xuất</a></li>
        <?php }?>
        </ul>

        <!-- <div class="pull-right search-input">
            <input type="text" name="search">
        </div> -->

    </div>
</div><?php }} ?>
