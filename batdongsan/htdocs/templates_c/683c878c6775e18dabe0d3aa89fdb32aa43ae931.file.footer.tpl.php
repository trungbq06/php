<?php /* Smarty version Smarty-3.1.18, created on 2016-06-12 05:22:05
         compiled from "/home/chungcu2/public_html/templates/elements/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:718504706575acb66ce45e0-22493117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '683c878c6775e18dabe0d3aa89fdb32aa43ae931' => 
    array (
      0 => '/home/chungcu2/public_html/templates/elements/footer.tpl',
      1 => 1465708917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718504706575acb66ce45e0-22493117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acb66cf2c58_95531934',
  'variables' => 
  array (
    'info' => 0,
    'gallery_p1' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acb66cf2c58_95531934')) {function content_575acb66cf2c58_95531934($_smarty_tpl) {?>
<div class="row col-default footer">
    <div class="container">
        <div class="col-md-9 col-sm-9 col-xs-12" style="border-right: 1px #3775db solid; padding: 10px 0px !important;">
           <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_p1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['img'];?>
" width="250"></a>
        <?php } ?>
        </div>
    </div>
</div>

<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('meta[property="og:title"]').getAttribute('content') );var ga = document.createElement('script'); ga.type = 'text/javascript';ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=56b60a3d6bd0c68b1f1f36b97b61583b&data=eyJzc29faWQiOjM5MzE1NzEsImhhc2giOiJkZmNkMGI0NTdjZTUxN2Y3MzlhZjFhODRiNzA1MmNiYyJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script><noscript><a href="http://www.vatgia.com" title="vatgia.com" target="_blank">Tài trợ bởi vatgia.com</a></noscript><noscript><a href="http://vchat.vn" title="vchat.vn" target="_blank">Phát triển bởi vchat.vn</a></noscript>	
      
<?php }} ?>
