<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:15:02
         compiled from "/home/chungcu2/public_html/templates/elements/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1568822484575acb66bf2723-05868119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a76d46753d96d0389debae436769da3eafb6657d' => 
    array (
      0 => '/home/chungcu2/public_html/templates/elements/header.tpl',
      1 => 1444899194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1568822484575acb66bf2723-05868119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gallery_p1' => 0,
    'list' => 0,
    'info' => 0,
    'gallery_p3' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acb66c06210_89285167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acb66c06210_89285167')) {function content_575acb66c06210_89285167($_smarty_tpl) {?><div class="header">
            <div class="container">
              <div class="col-md-4 col-sm-4 col-xs-5 col-default">
                        <div class="logo pull-left">
                        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_p1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                            <a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['img'];?>
" ></a>
                        <?php } ?>    
                            <p style="text-align: center;font-size: 19px;font-family: 'Roboto', sans-serif">HOTLINE: <?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
</p>
                        </div>  
                                                      
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-7 col-default ban-ner">
                        <div class="banner pull-right">
                           <img src="<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_p3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
<?php } ?> ">
                        </div>
                       <!--  <div class="slogan">
                            <h1>MHTEC PANEL</h1>
                            <p>Giải pháp tối ưu - Giá cả cạnh tranh - Chất lượng vượt trội</p>
                        </div>      -->
                    </div> 
          </div>
        </div><?php }} ?>
