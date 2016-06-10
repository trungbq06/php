<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 05:02:09
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/article/lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197443122256417a511879e2-40220106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73b794654049bd08cb993e51dd3bce6900674503' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/article/lists.tpl',
      1 => 1444843868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197443122256417a511879e2-40220106',
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
  'unifunc' => 'content_56417a511f29d9_42297510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56417a511f29d9_42297510')) {function content_56417a511f29d9_42297510($_smarty_tpl) {?> <div class="breadcrumb">
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
