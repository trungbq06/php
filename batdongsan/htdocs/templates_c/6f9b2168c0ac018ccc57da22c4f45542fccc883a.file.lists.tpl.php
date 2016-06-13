<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:51:09
         compiled from "C:\xampp\htdocs\templates\article\lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2398757470d5d061c14-60452244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9b2168c0ac018ccc57da22c4f45542fccc883a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\article\\lists.tpl',
      1 => 1444843868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2398757470d5d061c14-60452244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_map' => 0,
    'category' => 0,
    'result' => 0,
    'data' => 0,
    'fields' => 0,
    'pagesize' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57470d5d0e7262_77755429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57470d5d0e7262_77755429')) {function content_57470d5d0e7262_77755429($_smarty_tpl) {?> <div class="breadcrumb">
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['site_map']->value;?>

    </ul>
</div>
<div><h3><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</h3></div>
<div>                 
    <div class="news-list full-content">

        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            <div class="row col-default list">
                <div class="col-md-2 col-sm-3 col-xs-3 col-default image">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
"></a>
                </div>
                <div class="col-md-10 col-sm-9 col-xs-9 infomation">
                    <h5><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</a></h5>
                    <p style="font-style: italic;">Đăng ngày: <?php echo $_smarty_tpl->tpl_vars['data']->value['created'];?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</p>

                    <p class="view-more"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
">Xem chi tiết >> </a></p>
                </div>
            </div> 
        <?php } ?>
        <div class="pagging">
                                   <?php if ($_smarty_tpl->tpl_vars['fields']->value>$_smarty_tpl->tpl_vars['pagesize']->value) {?><div class="paging"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div><?php }?>
                          
                        </div><!--end .pagging-->
    </div>
</div><!--end .content-->
                  <?php }} ?>
