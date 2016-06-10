<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 05:02:08
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/article/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40439329656417a50e1a5c7-50145521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ab7f4ec30f631b53c76589416f46decd4a17010' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/article/view.tpl',
      1 => 1444843947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40439329656417a50e1a5c7-50145521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_map' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56417a50e61445_10324297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56417a50e61445_10324297')) {function content_56417a50e61445_10324297($_smarty_tpl) {?> <div class="breadcrumb">
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['site_map']->value;?>
&nbsp;>&nbsp;<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

    </ul>
</div>
<div class="content">
                       
                        <div class="products-box">

                            <div class="post-553 post type-post status-publish format-standard hentry category-uncategorized" id="post-553">
                            <h3><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h3>
                            <div class="entry">
                                <?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>

                            </div>
                        </div>
                            
                        </div>
                    </div><!--end .content--><?php }} ?>
