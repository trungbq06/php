<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:39:09
         compiled from "C:\xampp\htdocs\manager\templates\elements\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239255746fc7d9b7c13-44050501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0cf90c6dcb35b790ab8133517a094307c0f4170' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manager\\templates\\elements\\header.tpl',
      1 => 1413993460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239255746fc7d9b7c13-44050501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'admin_language' => 0,
    'gen_lang' => 0,
    'k' => 0,
    'list' => 0,
    'account' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746fc7d9f7eb8_02845809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746fc7d9f7eb8_02845809')) {function content_5746fc7d9f7eb8_02845809($_smarty_tpl) {?><div class="navbar-inner">
    <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
"> <img alt="Charisma Logo" src="webroots/img/logo20.png" /> <span>Administrator</span></a>
        
        <!-- theme selector starts -->
        <div class="btn-group pull-right theme-container" >
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-tint"></i><span class="hidden-phone"> Change languages</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-user" id="languages">
                <li <?php if ($_smarty_tpl->tpl_vars['admin_language']->value==0) {?>class="active"<?php }?>><a data-value="0" href="#"><i class="icon-blank"></i> Default</a></li>
            	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gen_lang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['admin_language']->value==$_smarty_tpl->tpl_vars['k']->value) {?>class="active"<?php }?>><a data-value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" href="#"><i class="icon-blank"></i> <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a></li>
                <?php } ?>
            </ul>
        </div>
        <!-- theme selector ends -->
        
        <!-- user dropdown starts -->
        <div class="btn-group pull-right" >
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user"></i><span class="hidden-phone"> <?php echo $_smarty_tpl->tpl_vars['account']->value['name'];?>
</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-user">
                <li><a href="?mod=user&site=edit">Change Profile</a></li>
                <li><a href="?mod=user&site=password">Change password</a></li>
                <li class="divider"></li>
                <li><a href="?mod=user&site=logout">Logout</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->
        
        <div class="top-nav nav-collapse">
            <ul class="nav">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" target="_blank">Visit Site</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query span2" name="query" type="text">
                    </form>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<?php }} ?>
