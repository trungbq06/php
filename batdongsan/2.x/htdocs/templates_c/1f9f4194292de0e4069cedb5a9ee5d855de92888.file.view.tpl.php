<?php /* Smarty version Smarty-3.1.18, created on 2016-05-27 17:47:19
         compiled from "C:\xampp\htdocs\templates\article\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1899357486c075ce238-90855164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f9f4194292de0e4069cedb5a9ee5d855de92888' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\article\\view.tpl',
      1 => 1444843947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899357486c075ce238-90855164',
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
  'unifunc' => 'content_57486c07630e35_56741514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57486c07630e35_56741514')) {function content_57486c07630e35_56741514($_smarty_tpl) {?> <div class="breadcrumb">
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
