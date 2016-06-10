<?php /* Smarty version Smarty-3.1.18, created on 2016-05-27 15:26:07
         compiled from "C:\xampp\htdocs\templates\elements\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11225746f827300673-47442702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bae02f9551ec151bf88f5606b9bd3dc20406224' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\footer.tpl',
      1 => 1464355566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11225746f827300673-47442702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746f82733fe27_04342509',
  'variables' => 
  array (
    'info' => 0,
    'gallery_p1' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f82733fe27_04342509')) {function content_5746f82733fe27_04342509($_smarty_tpl) {?>

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

<script lang="javascript">
(function() {var _h1= document.getElementsByTagName('title')[0] || false;
var product_name = ''; if(_h1){product_name= _h1.textContent || _h1.innerText;}var ga = document.createElement('script'); ga.type = 'text/javascript';
ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=1f25ebb11cf03f85c16f234637b2331c&data=eyJzc29faWQiOjMxOTA0MDMsImhhc2giOiIwZmNjM2JmNWY1NzFjZWZiMWU1Mzk1ODMzNDc4N2QxYyJ9&pname='+product_name;
var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();
</script><noscript><a href="http://www.vatgia.com" title="vatgia.com" target="_blank">T�i tr&#7907; b&#7903;i vatgia.com</a></noscript><noscript><a href="http://vchat.vn" title="vchat.vn" target="_blank">Ph�t tri&#7875;n b&#7903;i vchat.vn</a></noscript> 
      
<?php }} ?>
