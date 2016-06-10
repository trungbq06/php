<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:17:55
         compiled from "C:\xampp\htdocs\templates\elements\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200855746f826921fc6-52951760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017d540411a4e204c1706ab40e7172465e6b9741' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\menu.tpl',
      1 => 1464272271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200855746f826921fc6-52951760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746f8269626c1_47295837',
  'variables' => 
  array (
    'menu_p1' => 0,
    'data' => 0,
    'child' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f8269626c1_47295837')) {function content_5746f8269626c1_47295837($_smarty_tpl) {?><div class="menu-box">
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
        
        <!--<ul style="float: right" class="menu">
         <?php if ($_smarty_tpl->tpl_vars['member']->value['id']==0) {?>
        <li><a href="dang-nhap.html">Đăng nhập</a></li>
        <li><a href="dang-ky.html">Đăng ký</a></li>
        <?php } else { ?>
        <li><a href="tai-khoan.html">Hi, <?php echo $_smarty_tpl->tpl_vars['member']->value['name'];?>
</a></li>
        <li><a href="?mod=member&site=logout" onclick="return confirm('Bạn có chắc chắn muốn thoát không?')">Đăng xuất</a></li>
        <?php }?>
        </ul>

         <div class="pull-right search-input">
            <input type="text" name="search">
        </div> -->

    </div>
</div><?php }} ?>
