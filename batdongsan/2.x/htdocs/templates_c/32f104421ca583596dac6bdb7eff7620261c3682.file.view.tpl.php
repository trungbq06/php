<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:12:05
         compiled from "C:\xampp\htdocs\templates\product\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1845757470435221851-45455417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32f104421ca583596dac6bdb7eff7620261c3682' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\product\\view.tpl',
      1 => 1445051561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1845757470435221851-45455417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'max_view' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_574704352ae270_19392649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574704352ae270_19392649')) {function content_574704352ae270_19392649($_smarty_tpl) {?><div class="content" style="margin-bottom: 20px;">
                        <?php echo $_smarty_tpl->getSubTemplate ("../elements/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                       
                        <div class="data-info">
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <ul id="etalage">
                                    <li>
                                        <img class="etalage_source_image" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
"
                                        title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" /> 
                                        <img class="etalage_thumb_image" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" />
                                        </li>
                                </ul>
                                <img class="img-detailt-sp" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
"
                                        title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" style="width: 100%; margin-bottom: 10px;" /> 
                            </div>
                            <div class="col-md-6 col-sm-8 col-xs-12">
                                <h1><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h1>
                                <div class="sp-info">
                                	<p><label>Giá khuyến mãi:</label> <strong style="color: #f40;"><?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
</strong></p>
                                    <p><label>Giá cũ:</label> <strong style="text-decoration:line-through;"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</strong></p>
                                    <p><label>Xuất xứ/Nguồn:</label> <?php echo $_smarty_tpl->tpl_vars['value']->value['maker'];?>
</p>
                                    <p><label>Danh mục:</label> <?php echo $_smarty_tpl->tpl_vars['value']->value['category'];?>
</p>
                                    <p><label>Mã sản phẩm:</label> <?php echo $_smarty_tpl->tpl_vars['value']->value['code'];?>
</p>
                                    <p style="font-size: 13px;"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</p>
                                </div>
                               <!--  <div class="btn_cart">
                                    <button class="addtocart add_cart" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">Thêm giỏ hàng</button>
                                    <button class="buynow-notlogin">Liên Hệ</button> 
                                </div>
                                 -->
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 detailt-sp" style="margin-top: 20px !important;">
                                <h3 style="margin-bottom: 15px;">Thông tin chi tiết</h3>
                            <?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</div>
                        </div>
                    </div><!--end .content-->

                    <div class="content" style="padding-left:0px !important;">
    <h3>Sản phẩm liên quan</h3>
    <div class="products-box">

        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['max_view']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
        <div class="col-item col-md-3 col-sm-6 col-xs-6 col-default">
            <div class="item">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
"></a>
                 <p class="name">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</a>
                 </p>
            </div>
        </div>
        <?php } ?>
        
    </div>
</div><!--end .content--><?php }} ?>
