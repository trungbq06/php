<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 01:31:11
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2073954160564148df732e83-24104399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '048540a78ba3847c846864ba2c7e7d04834ce8c5' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/elements/footer.tpl',
      1 => 1445223595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2073954160564148df732e83-24104399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'gallery_p1' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564148df789946_04570994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564148df789946_04570994')) {function content_564148df789946_04570994($_smarty_tpl) {?>

<div class="row col-default footer">
    <div class="container">
        <div class="col-md-9 col-sm-9 col-xs-12" style="border-right: 1px #3775db solid;">
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

<script lang="javascript">
(function() {var _h1= document.getElementsByTagName('title')[0] || false;
var product_name = ''; if(_h1){product_name= _h1.textContent || _h1.innerText;}var ga = document.createElement('script'); ga.type = 'text/javascript';
ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=1f25ebb11cf03f85c16f234637b2331c&data=eyJzc29faWQiOjMxOTA0MDMsImhhc2giOiIwZmNjM2JmNWY1NzFjZWZiMWU1Mzk1ODMzNDc4N2QxYyJ9&pname='+product_name;
var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();
</script><noscript><a href="http://www.vatgia.com" title="vatgia.com" target="_blank">T�i tr&#7907; b&#7903;i vatgia.com</a></noscript><noscript><a href="http://vchat.vn" title="vchat.vn" target="_blank">Ph�t tri&#7875;n b&#7903;i vchat.vn</a></noscript> 
      
<?php }} ?>
