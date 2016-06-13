<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:26:47
         compiled from "/home/chungcu2/public_html/templates/article/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557156876575ace27036890-18788341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b076971dec845adf07d5558b14fda7b13b66215' => 
    array (
      0 => '/home/chungcu2/public_html/templates/article/view.tpl',
      1 => 1444843946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557156876575ace27036890-18788341',
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
  'unifunc' => 'content_575ace270b7dd5_24822465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575ace270b7dd5_24822465')) {function content_575ace270b7dd5_24822465($_smarty_tpl) {?> <div class="breadcrumb">
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
