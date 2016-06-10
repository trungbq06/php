<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 01:31:11
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:490570656564148df2dca69-19981968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c717f3c2d0a86654e16ae939afa29662eaba54' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/meta.tpl',
      1 => 1444845224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '490570656564148df2dca69-19981968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'domain' => 0,
    'seo' => 0,
    'info' => 0,
    'this_link' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564148df3a1ee2_16509444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564148df3a1ee2_16509444')) {function content_564148df3a1ee2_16509444($_smarty_tpl) {?><link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="content-language" content="vi" />
<meta charset="UTF-8">
<base href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
"></base>
<title><?php if ($_smarty_tpl->tpl_vars['seo']->value['title']!=null) {?> <?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['info']->value['web_title'];?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo']->value['keyword']!=null) {?> <?php echo $_smarty_tpl->tpl_vars['seo']->value['keyword'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['info']->value['web_keyword'];?>
 <?php }?>" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo']->value['description']!=null) {?> <?php echo $_smarty_tpl->tpl_vars['seo']->value['description'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['info']->value['web_description'];?>
 <?php }?>" />
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['seo']->value['keyword']!=null) {?> <?php echo $_smarty_tpl->tpl_vars['seo']->value['keyword'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['info']->value['web_keyword'];?>
 <?php }?>" />
<meta property="og:type" content="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['this_link']->value;?>
" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" />
<meta property="og:image:secure_url" content="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" >

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
<link rel="stylesheet" type="text/css" href="webroot/libs/bootstrap-3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="webroot/libs/jquery.bxslider/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="webroot/css/mobile.css" />
<link rel="stylesheet" type="text/css" href="webroot/libs/etalage/css/hoverZoomEtalage.css">

<script src="webroot/js/jquery-2.1.3.min.js"></script>
<script src="webroot/js/main.js"></script>
<script src="webroot/js/jquery.validate.js"></script>
<script src="webroot/libs/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<script src="webroot/js/cart.js"></script>

<script type="text/javascript" src="webroot/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="webroot/libs/etalage/js/hoverZoomjquery.etalage.min.js"></script><?php }} ?>
